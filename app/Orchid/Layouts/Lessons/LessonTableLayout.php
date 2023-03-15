<?php

namespace App\Orchid\Layouts\Lessons;

use Orchid\Screen\TD;
use App\Models\Lesson;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Fields\CheckBox;

class LessonTableLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'lessons';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id', 'ID')
            ->render(function ($lesson) {
                return CheckBox::make('lessons[]')
                    ->value($lesson->ids)
                    ->checked(false);
            }),

            TD::make('date', 'Дата')->sort()
                ->render(function ($lesson) {
                    return $lesson->date;
                }),

            TD::make('teacher', 'Преподаватель')->sort()
                ->render(function ($lesson) {
                    return $lesson->teacher;
                }),

            TD::make('countCustomer', 'Количество клиентов')->sort()
                ->render(function ($lesson) {
                    return $lesson->countCustomer;
                }),

            TD::make('customers', 'Клиенты')->sort()
                ->render(function ($lesson) {
                    return $lesson->customers;
                }),

            TD::make('price', 'Цена')->sort()
                ->render(function ($lesson) {
                    return $lesson->price;
                }),

            TD::make('is_payed', 'Оплачен')
                ->render(function ($lesson) {
                    return $lesson->is_payed;
                })->is_active(),
        ];
    }
}
