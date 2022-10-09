<?php

namespace App\Orchid\Layouts\Style;

use Orchid\Screen\TD;
use App\Models\Style;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\DateTimer;

class StyleListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'styles';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name', 'Имя')
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(function (Style $style) {
                    return Link::make($style->name)
                        ->route('platform.styles.edit', $style->id);
                }),

            TD::make('is_active', 'Активность')
                ->sort()
                ->cantHide()
                ->filter(CheckBox::make())
                ->render(function (Style $style) {
                    return Link::make($style->is_active)
                        ->route('platform.styles.edit', $style->id);
                })->is_active(),

            TD::make('created_at', __('Created'))
                ->sort()
                ->filter(DateTimer::make()->format('Y-m-d'))
                ->render(function (Style $style) {
                    return $style->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Обновлено')
                ->sort()
                ->filter(DateTimer::make()->format('Y-m-d'))
                ->render(function (Style $style) {
                    return $style->updated_at->toDateTimeString();
                }),
        ];
    }
}
