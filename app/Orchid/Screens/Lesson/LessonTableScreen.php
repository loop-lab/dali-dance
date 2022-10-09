<?php

namespace App\Orchid\Screens\Lesson;

use App\Models\Lesson;
use App\Models\Customer;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use App\Orchid\Layouts\Style\LessonTableLayout;

class LessonTableScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        $customer = Customer::with(['teachers'])->find(1);
        $cus = $customer->toArray();
        $cus['teachers'] = $customer->teachers->groupBy('pivot.date_lessons')->sortKeys()->toArray();

        return [
            'customer' => $cus,
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
        ];
    }
}
