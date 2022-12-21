<?php

declare(strict_types=1);

namespace App\Orchid\Filters;

use Orchid\Screen\Field;
use Orchid\Filters\Filter;
use Orchid\Screen\Fields\CheckBox;
use Illuminate\Database\Eloquent\Builder;

class PayedFilter extends Filter
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Оплата';
    }

    /**
     * The array of matched parameters.
     *
     * @return array|null
     */
    public function parameters(): ?array
    {
        return ['is_payed_true', 'is_payed_false'];
    }

    /**
     * @param Builder $builder
     *
     * @return Builder
     */
    public function run(Builder $builder): Builder
    {
        $isPayedTrue = $this->request->get('is_payed_true') ?? null;
        $isPayedFalse = $this->request->get('is_payed_false') ?? null;

        return $builder->when($isPayedTrue, function ($query, $isPayedTrue) use ($isPayedFalse) {
            $isPayedFalse
                ? $query->orWhere('lessons.is_payed', $isPayedTrue)
                : $query->where('lessons.is_payed', $isPayedTrue);
        })
        ->when($isPayedFalse, function ($query, $isPayedFalse) use ($isPayedTrue) {
            $isPayedTrue
                ? $query->orWhere('lessons.is_payed', !$isPayedFalse)
                : $query->where('lessons.is_payed', !$isPayedFalse);
        });
    }

    /**
     * @return Field[]
     */
    public function display(): array
    {
        return [
            CheckBox::make('is_payed_true')
                ->fromModel(Lesson::class, 'is_payed')
                ->value($this->request->get('is_payed_true'))
                ->sendTrueOrFalse()
                ->title('Оплачен'),
            CheckBox::make('is_payed_false')
                ->fromModel(Lesson::class, 'is_payed')
                ->value($this->request->get('is_payed_false'))
                ->sendTrueOrFalse()
                ->title('Не оплачен'),
        ];
    }

    /**
     * @return string
     */
    public function value(): string
    {
        $isPayed = 'Все';
        if ($this->request->get('is_payed_true') && !$this->request->get('is_payed_false')) {
            $isPayed = 'Оплачен';
        } elseif (!$this->request->get('is_payed_true') && $this->request->get('is_payed_false')) {
            $isPayed = 'Не оплачен';
        }

        return $this->name().': '.$isPayed;
    }
}
