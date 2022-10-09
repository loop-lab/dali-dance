<?php

namespace App\Orchid\Layouts\Teacher;

use App\Models\Style;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Relation;

class TeacherEditLayout extends Rows
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
                Input::make('teacher.name')
                    ->type('text')
                    ->max(50)
                    ->required()
                    ->title('Имя')
                    ->placeholder('Имя'),

                Input::make('teacher.last_name')
                    ->type('text')
                    ->max(50)
                    ->required()
                    ->title('Фамилия')
                    ->placeholder('Фамилия'),

                Input::make('teacher.phone')
                    ->type('text')
                    ->max(11)
                    ->title('Телефон')
                    ->placeholder('Телефон'),

                CheckBox::make('teacher.is_active')
                    ->title('Активность')
                    ->sendTrueOrFalse(),
            ])->fullWidth(),

            Relation::make('style.')
                ->fromModel(Style::class, 'name')
                ->multiple()
                ->title('Стили'),
        ];
    }
}
