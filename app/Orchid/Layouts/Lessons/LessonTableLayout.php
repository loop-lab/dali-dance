<?php

namespace App\Orchid\Layouts\Lessons;

use Orchid\Screen\TD;
use App\Models\Teacher;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Fields\DateRange;

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
                ->render(function ($lessons) {
                    return $lessons->date;
                }),

            TD::make('teacher', 'Преподаватель')->sort()
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
