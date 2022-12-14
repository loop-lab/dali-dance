<?php

declare(strict_types=1);

namespace App\Orchid\Filters;

use Orchid\Screen\Field;
use Orchid\Filters\Filter;
use Orchid\Platform\Models\Role;
use Orchid\Screen\Fields\DateRange;
use Illuminate\Database\Eloquent\Builder;

class DateRangeFilter extends Filter
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Дата';
    }

    /**
     * The array of matched parameters.
     *
     * @return array|null
     */
    public function parameters(): ?array
    {
        return ['date'];
    }

    /**
     * @param Builder $builder
     *
     * @return Builder
     */
    public function run(Builder $builder): Builder
    {
        return $builder->whereBetween('date_lessons', array_values($this->request->get('date')));
    }

    /**
     * @return Field[]
     */
    public function display(): array
    {
        return [
            DateRange::make('date')
                ->value($this->request->get('date'))
                ->title('Дата'),
        ];
    }

    /**
     * @return string
     */
    public function value(): string
    {
        $date = $this->request->get('date');
        return $this->name() . ': ' . $date['start'].' - '.$date['end'];
    }
}
