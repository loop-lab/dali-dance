<?php

namespace App\Orchid\Layouts\TicketType;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\CheckBox;

class TicketTypeEditLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('ticketType.name')
                ->type('text')
                ->max(50)
                ->required()
                ->title('Наименование')
                ->placeholder('Наименование'),

            Input::make('ticketType.lessons')
                ->type('number')
                ->title('Количество уроков')
                ->placeholder('Количество уроков'),

            Input::make('ticketType.price')
                ->type('number')
                ->title('Цена')
                ->placeholder('Цена'),

            CheckBox::make('ticketType.is_active')
                ->title('Активность')
                ->sendTrueOrFalse(),
        ];
    }
}
