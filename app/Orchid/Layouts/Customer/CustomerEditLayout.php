<?php

namespace App\Orchid\Layouts\Customer;

use App\Models\Ticket;
use App\Models\Teacher;
use Orchid\Screen\Field;
use App\Models\TicketType;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\DateTimer;

class CustomerEditLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Group::make([
                Input::make('customer.name')
                    ->type('text')
                    ->max(50)
                    ->required()
                    ->title('Имя')
                    ->placeholder('Имя'),

                Input::make('customer.last_name')
                    ->type('text')
                    ->max(50)
                    ->required()
                    ->title('Фамилия')
                    ->placeholder('Фамилия'),

                Input::make('customer.phone')
                    ->type('text')
                    ->max(11)
                    ->mask('9 (999) 999-99-99')
                    ->title('Телефон')
                    ->placeholder('Телефон'),
            ])->fullWidth(),

            Group::make([
                Input::make('customer.bonuses')
                    ->type('number')
                    ->title('Бонусы')
                    ->placeholder('Бонусы'),

                CheckBox::make('customer.is_active')
                    ->title('Активность')
                    ->sendTrueOrFalse(),
            ])->fullWidth(),

            Matrix::make('tickets')
                ->title('Абонементы')
                ->columns([
                    'Id' => 'id',
                    'Абонемент' => 'ticket_type',
                    'Преподаватель' => 'teacher',
                    'Дата начала' => 'start_date',
                    'Дата завершения' => 'stop_date',
                ])
                ->fields([
                    'id' => Input::make('ticket_type')->type('number')
                        ->fromModel(Ticket::class, 'id'),
                    'ticket_type' => Relation::make('ticket_type')
                        ->fromModel(TicketType::class, 'name'),
                    'teacher' => Relation::make('teacher')
                        ->fromModel(Teacher::class, 'last_name')
                        ->displayAppend('full'),
                    'start_date' => DateTimer::make('start_date')->format('Y-m-d'),
                    'stop_date' => DateTimer::make('stop_date')->format('Y-m-d'),
                ]),
        ];
    }
}
