<?php

namespace App\Orchid\Layouts\Lessons;

use Orchid\Screen\TD;
use App\Models\Lesson;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Fields\DateTimer;

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
            TD::make('date', 'Дата')->sort()
                ->filter(DateTimer::make()->format('Y-m-d'))
                ->render(function ($lessons) {
                    return $lessons->date;
                }),

            TD::make('teacher', 'Преподаватель')->sort()
                ->filter(Select::make())
                ->render(function ($lessons) {
                    return $lessons->teacher;
                }),

            TD::make('countCustomer', 'Количество клиентов')->sort()
                ->render(function ($lessons) {
                    return $lessons->countCustomer;
                }),

            TD::make('customers', 'Клиенты')->sort()
                ->render(function ($lessons) {
                    return $lessons->customers;
                }),

            TD::make('price', 'Цена')->sort()
                ->render(function ($lessons) {
                    return $lessons->price;
                }),
        ];
    }
}
