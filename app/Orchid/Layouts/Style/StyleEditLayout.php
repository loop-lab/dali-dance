<?php

namespace App\Orchid\Layouts\Style;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\CheckBox;

class StyleEditLayout extends Rows
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
                Input::make('style.name')
                    ->type('text')
                    ->max(50)
                    ->required()
                    ->title('Имя')
                    ->placeholder('Имя'),

                CheckBox::make('style.is_active')
                    ->title('Активность')
                    ->sendTrueOrFalse(),
            ])->fullWidth(),
        ];
    }
}
