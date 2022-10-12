<?php

namespace App\Orchid\Screens\Lesson;

use Orchid\Screen\Screen;
use Illuminate\Support\Facades\DB;
use App\Orchid\Layouts\Lessons\LessonTableLayout;

class LessonTableScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        $page = 1;

        return [
            'lessons' => DB::table('lessons')
                ->select(DB::raw("
                    lessons.date_lessons as date,
                    concat(teachers.last_name, ' ', teachers.name) as teacher,
                    count(lessons.customer_id) as countCustomer,
                    group_concat(customers.last_name) as customers,
                    (count(lessons.customer_id) * 150) as price
                "))
                ->join('teachers', 'lessons.teacher_id', '=', 'teachers.id')
                ->join('customers', 'lessons.customer_id', '=', 'customers.id')
                ->groupBy('date', 'teacher')
                ->limit(100)
                ->offset(($page-1)*100)
                ->get(),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Занятия';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
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
            LessonTableLayout::class,
        ];
    }
}
