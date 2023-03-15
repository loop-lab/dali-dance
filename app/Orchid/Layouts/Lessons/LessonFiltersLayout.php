<?php

namespace App\Orchid\Layouts\Lessons;

use Orchid\Filters\Filter;
use App\Orchid\Filters\PayedFilter;
use Orchid\Screen\Layouts\Selection;
use App\Orchid\Filters\TeacherFilter;
use App\Orchid\Filters\DateRangeFilter;

class LessonFiltersLayout extends Selection
{
    /**
     * @return string[]|Filter[]
     */
    public function filters(): array
    {
        return [
            PayedFilter::class,
            TeacherFilter::class,
            DateRangeFilter::class,
        ];
    }
}
