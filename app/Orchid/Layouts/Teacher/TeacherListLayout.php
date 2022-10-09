<?php

namespace App\Orchid\Layouts\Teacher;

use Orchid\Screen\TD;
use App\Models\Teacher;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\DateTimer;

class TeacherListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'teachers';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('last_name', 'Фамилия')
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(function (Teacher $teacher) {
                    return Link::make($teacher->last_name)
                        ->route('platform.teachers.edit', $teacher->id);
                }),

            TD::make('name', 'Имя')
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(function (Teacher $teacher) {
                    return Link::make($teacher->name)
                        ->route('platform.teachers.edit', $teacher->id);
                }),

            TD::make('phone', 'Телефон')
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(function (Teacher $teacher) {
                    return Link::make($teacher->phone)
                        ->route('platform.teachers.edit', $teacher->id);
                }),

            TD::make('style', 'Стиль')
                ->sort()
                ->cantHide()
                ->filter(Select::make())
                ->render(function (Teacher $teacher) {
                    return Link::make($teacher->style->pluck('name')->join(', '))
                        ->route('platform.teachers.edit', $teacher->id);
                }),

            TD::make('is_active', 'Активность')
                ->sort()
                ->cantHide()
                ->filter(CheckBox::make())
                ->render(function (Teacher $teacher) {
                    return Link::make($teacher->is_active)
                        ->route('platform.teachers.edit', $teacher->id);
                })->is_active(),

            TD::make('created_at', __('Created'))
                ->sort()
                ->filter(DateTimer::make()->format('Y-m-d'))
                ->render(function (Teacher $teacher) {
                    return $teacher->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Обновлено')
                ->sort()
                ->filter(DateTimer::make()->format('Y-m-d'))
                ->render(function (Teacher $teacher) {
                    return $teacher->updated_at->toDateTimeString();
                }),
        ];
    }
}
