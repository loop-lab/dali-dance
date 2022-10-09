<?php

namespace App\Orchid\Layouts\Lessons;

use Orchid\Screen\TD;
use Orchid\Screen\Layouts\Table;

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
        ];
    }
}
