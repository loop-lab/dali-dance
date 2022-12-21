<?php

declare(strict_types=1);

namespace App\Orchid\Filters;

use App\Models\Teacher;
use Orchid\Screen\Field;
use Orchid\Filters\Filter;
use Orchid\Platform\Models\Role;
use Orchid\Screen\Fields\Select;
use Illuminate\Database\Eloquent\Builder;

class TeacherFilter extends Filter
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Преподаватель';
    }

    /**
     * The array of matched parameters.
     *
     * @return array|null
     */
    public function parameters(): ?array
    {
        return ['teacher'];
    }

    /**
     * @param Builder $builder
     *
     * @return Builder
     */
    public function run(Builder $builder): Builder
    {
        return $builder->whereHas('teacher_id', function (Builder $query) {
            $query->where('teacher_id', $this->request->get('teacher'));
        });
    }

    /**
     * @return Field[]
     */
    public function display(): array
    {
        return [
            Select::make('teacher')
                ->fromModel(Teacher::class, 'last_name')
                ->empty()
                ->value($this->request->get('teacher'))
                ->title('Преподаватель'),
        ];
    }

    /**
     * @return string
     */
    public function value(): string
    {
        $teacher = Teacher::find($this->request->get('teacher'));
        return $this->name().': '.$teacher->last_name.' '.$teacher->name;
    }
}
