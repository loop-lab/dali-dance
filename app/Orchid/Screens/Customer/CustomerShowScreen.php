<?php

namespace App\Orchid\Screens\Customer;

use Orchid\Screen\TD;
use App\Models\Ticket;
use App\Models\Teacher;
use App\Models\Customer;
use Orchid\Screen\Screen;
use App\Models\TicketType;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\ModalToggle;
use App\Orchid\Layouts\Customer\CustomerShowLayout;

class CustomerShowScreen extends Screen
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
            ModalToggle::make('QR-код')
            ->modal('qrCode')
            ->icon('code'),
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
            CustomerShowLayout::class,
            Layout::table('tickets', [
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
            Layout::modal('qrCode', [Layout::view('picture')])
            ->withoutApplyButton()->withoutCloseButton()
            ->title('QR-код')
        ];
    }
}
