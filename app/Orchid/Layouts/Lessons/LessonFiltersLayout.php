<?php

namespace App\Orchid\Layouts\Lessons;

use Orchid\Filters\Filter;
use Orchid\Screen\Layouts\Selection;
use App\Orchid\Filters\DateRangeFilter;

class LessonFiltersLayout extends Selection
{
    /**
     * @return string[]|Filter[]
     */
    public function filters(): array
    {
        return [
            DateRangeFilter::class,
        ];
    }
}
