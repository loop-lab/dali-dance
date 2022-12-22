<?php

namespace App\Orchid\Screens\Customer;

use Carbon\Carbon;
use Orchid\Screen\TD;
use App\Models\Lesson;
use App\Models\Ticket;
use App\Models\Teacher;
use App\Models\Customer;
use Orchid\Screen\Screen;
use App\Models\TicketType;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Orchid\Screen\Layouts\Modal;
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
            ModalToggle::make('Отметить посещение!')
                ->modal('check')
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

            Layout::modal('check', [
                Layout::table('tickets', [
                    TD::make()->render(function (Ticket $model) {
                        return Button::make()
                            ->method('checkLesson', ['teacherId' => $model->teacher_id])
                            ->class('btn btn-success')
                            ->novalidate()
                            ->icon('check');
                    }),
                    TD::make('id', 'ID')->render(function (Ticket $model) {
                        return $model->id;
                    }),
                    TD::make('ticket_type', 'Абонемент')->render(function (Ticket $model) {
                        return TicketType::where('id', $model->ticket_type_id)->first()->name;
                    }),
                    TD::make('teacher', 'Преподаватель')->render(function (Ticket $model) {
                        $teacher = Teacher::where('id', $model->teacher_id)->first();
                        return $teacher->last_name . ' ' . $teacher->name;
                    }),
                    TD::make('start_date', 'Дата начала')->render(function (Ticket $model) {
                        return $model->start_date;
                    }),
                    TD::make('stop_date', 'Дата завершения')->render(function (Ticket $model) {
                        return $model->stop_date;
                    }),
                ]),
            ])->withoutApplyButton()->withoutCloseButton()->size(Modal::SIZE_LG)->title('Отметить посещение!'),
        ];
    }

    public function checkLesson(Request $request, Customer  $customer, $name, $teacherId): void
    {
        Lesson::create([
            'customer_id' => $customer->id,
            'teacher_id' => $teacherId,
            'date_lessons' => Carbon::now()->format('Y-m-d'),
        ]);
        Toast::success('Посещение отмечено!');
    }

    public function save(Request $request, Customer $customer)
    {
        $requestCustomer = $request->get('customer');
        $requestCustomer['phone'] = preg_replace('/\D/', '', $requestCustomer['phone']);
        $requestCustomer['bonuses'] = $requestCustomer['bonuses']  ?? 0;
        $customer->fill($requestCustomer);
        $customer->save();

        $requestTicket = $request->get('tickets');

        $ticketIds = $requestTicket ? Arr::pluck($requestTicket, 'id') : null;
        $deleteTicketIds = Ticket::where('customer_id', $customer->id)
            ->when($ticketIds, function ($query, $ticketIds) {
                $query->whereNotIn('id', $ticketIds);
            })->get('id')->pluck('id')->toArray();
        Ticket::whereIn('id', $deleteTicketIds)->delete();

        if (!empty($requestTicket)) {
            $countTicket = count($requestTicket);

            foreach ($requestTicket as $ticket) {
                $ticket['customer_id'] = $customer->id;
                $ticket['teacher_id'] = $ticket['teacher'];
                $ticket['ticket_type_id'] = $ticket['ticket_type'];
                $model = Ticket::find($ticket['id']);
                if (empty($model)) {
                    $model = new Ticket();
                    $model->fill($ticket);
                    $model->save();

                    $price = TicketType::find($ticket['ticket_type_id'])->price;
                    $customer->bonuses += $countTicket == 1 ?  $price*0.01 : $price*0.005;
                    $customer->save();
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
