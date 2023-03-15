<?php

namespace App\Orchid\Screens\Lesson;

use Carbon\Carbon;
use App\Models\Lesson;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Toast;
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
        $date = $request->get('date')
            ?? [Carbon::now()->format('Y-m-1'), Carbon::now()->endOfMonth()->format('Y-m-d')];
        $teacher = $request->get('teacher') ?? null;
        $sort = $request->get('sort') ?? null;
        $isPayedTrue = $request->get('is_payed_true') ?? null;
        $isPayedFalse = $request->get('is_payed_false') ?? null;

        $lessonsQuery = DB::table('lessons')
            ->select(DB::raw("
                group_concat(lessons.id) as ids,
                lessons.date_lessons as date,
                concat(teachers.last_name, ' ', teachers.name) as teacher,
                count(lessons.customer_id) as countCustomer,
                group_concat(customers.last_name) as customers,
                (count(lessons.customer_id) * 150) as price,
                lessons.is_payed as is_payed
            "))
            ->when($date, function ($query, $date) {
                $query->whereBetween('lessons.date_lessons', array_values($date));
            })
            ->when($teacher, function ($query, $teacher) {
                $query->where('lessons.teacher_id', $teacher);
            })
            ->when($isPayedTrue, function ($query, $isPayedTrue) use ($isPayedFalse) {
                $isPayedFalse
                    ? $query->orWhere('lessons.is_payed', $isPayedTrue)
                    : $query->where('lessons.is_payed', $isPayedTrue);
            })
            ->when($isPayedFalse, function ($query, $isPayedFalse) use ($isPayedTrue) {
                $isPayedTrue
                    ? $query->orWhere('lessons.is_payed', !$isPayedFalse)
                    : $query->where('lessons.is_payed', !$isPayedFalse);
            })
            ->when($sort, function ($query, $sort) {
                $by = "asc";
                if (preg_match('/-.*/', $sort)) {
                    $by = "desc";
                    $sort = substr($sort, 1);
                }
                $query->orderBy($sort, $by);
            })
            ->join('teachers', 'lessons.teacher_id', '=', 'teachers.id')
            ->join('customers', 'lessons.customer_id', '=', 'customers.id')
            ->groupBy('date', 'teacher', 'is_payed');

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
            Button::make('Отметить оплаченным!')
                ->method('payed')
                ->class('btn btn-success')
                ->novalidate()
                ->icon('check'),
        ];
    }

    public function payed(Request $request)
    {
        $ids = explode(',', join(',', $request->get('lessons')));

        Lesson::whereIn('id', $ids)->where('is_payed', false)->update(['is_payed' => true]);
        Toast::info('Уроки отмечены оплаченными!');

        return redirect()->route('platform.lessons');
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
