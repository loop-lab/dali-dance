<?php

namespace App\Orchid\Screens\Customer;

use Carbon\Carbon;
use App\Models\Lesson;
use App\Models\Ticket;
use App\Models\Customer;
use Orchid\Screen\Screen;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Toast;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\ModalToggle;
use App\Orchid\Layouts\Customer\CustomerEditLayout;

class CustomerEditScreen extends Screen
{
    public $customer;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Customer $customer): iterable
    {
        return [
            'customer' => $customer,
            'tickets' => Ticket::with(['ticketType', 'teacher'])
                ->where('customer_id', $customer->id)->get(),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Клиент';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Отметить посещение!')
                ->method('checkLesson')
                ->class('btn btn-success')
                ->novalidate()
                ->icon('check'),

            ModalToggle::make('QR-код')
                ->modal('qrCode')
                ->icon('code'),

            Button::make(__('Save'))
                ->icon('check')
                ->method('save'),

            Button::make(__('Remove'))
                ->icon('trash')
                ->method('remove')
                ->canSee($this->customer->exists),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            CustomerEditLayout::class,
            Layout::modal('qrCode', [
                Layout::view('picture'),
            ])->withoutApplyButton()->withoutCloseButton()->title('QR-код'),
        ];
    }

    public function checkLesson(Request $request, Customer  $customer): void
    {
        $tickets = $request->get('tickets')[0];
        Lesson::create([
            'customer_id' => $customer->id,
            'teacher_id' => $tickets['teacher'],
            'date_lessons' => Carbon::now()->format('Y-m-d'),
        ]);
        Toast::success('Посещение отмечено!');
    }

    public function save(Request $request, Customer $customer)
    {
        $requestCustomer = $request->get('customer');
        $requestCustomer['phone'] = preg_replace('/\D/', '', $requestCustomer['phone']);
        $customer->fill($requestCustomer);
        $customer->save();

        $requestTicket = $request->get('tickets');
        if (!empty($requestTicket)) {
            $ticketIds = Arr::pluck($requestTicket, 'id');
            $deleteTicketIds = Ticket::where('customer_id', $customer->id)
                ->whereNotIn('id', $ticketIds)->get()->pluck('id');
            Ticket::whereIn('id', $deleteTicketIds)->delete();

            foreach ($requestTicket as $ticket) {
                $ticket['customer_id'] = $customer->id;
                $ticket['teacher_id'] = $ticket['teacher'];
                $ticket['ticket_type_id'] = $ticket['ticket_type'];
                $model = Ticket::find($ticket['id']);
                if (empty($model)) {
                    $model = new Ticket();
                    $model->fill($ticket);
                    $model->save();
                } else {
                    $model->update($ticket);
                }
            }
        }

        Toast::info($customer->exists ? 'Данные преподавателя обновлены' : 'Добавлен новый преподаватель.');

        return redirect()->route('platform.customers');
    }

    public function remove(Customer $customer)
    {
        Ticket::where('customer_id', $customer->id)->delete();
        $customer->delete();

        Toast::info('Клиент удален.');

        return redirect()->route('platform.customers');
    }
}
