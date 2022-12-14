<?php

namespace App\Orchid\Screens\Lesson;

use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Orchid\Layouts\Lessons\LessonTableLayout;
use App\Orchid\Layouts\Lessons\LessonFiltersLayout;

class LessonTableScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Request $request): iterable
    {
        $date = $request->get('date') ?? null;
        $teacher = $request->get('teacher') ?? null;

        $lessonsQuery = DB::table('lessons')
            ->select(DB::raw("
                lessons.date_lessons as date,
                concat(teachers.last_name, ' ', teachers.name) as teacher,
                count(lessons.customer_id) as countCustomer,
                group_concat(customers.last_name) as customers,
                (count(lessons.customer_id) * 150) as price
            "))
            // ->when($date, function ($query, $date) {
            //     $query->whereBetween('lessons.date_lessons', array_values($date));
            // })
            ->when($teacher, function ($query, $teacher) {
                $query->where('lessons.teacher_id', $teacher);
            })
            ->join('teachers', 'lessons.teacher_id', '=', 'teachers.id')
            ->join('customers', 'lessons.customer_id', '=', 'customers.id')
            ->groupBy('date', 'teacher');

        return [
            'lessons' => $lessonsQuery->paginate(),
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
            LessonFiltersLayout::class,
            LessonTableLayout::class,
        ];
    }
}
