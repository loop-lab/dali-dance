<?php

namespace App\Orchid\Layouts\Customer;

use Orchid\Screen\TD;
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
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Layouts\Table;

class CustomerShowLayout extends Rows
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
                    ->title('Имя')
                    ->disabled(),

                Input::make('customer.last_name')
                    ->type('text')
                    ->title('Фамилия')
                    ->disabled(),

                Input::make('customer.phone')
                    ->type('text')
                    ->title('Телефон')
                    ->disabled(),
            ])->fullWidth(),

            Group::make([
                Input::make('customer.bonuses')
                    ->type('number')
                    ->title('Бонусы')
                    ->disabled()
            ])->fullWidth(),
        ];
    }
}
