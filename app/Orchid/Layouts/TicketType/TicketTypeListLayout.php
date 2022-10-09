<?php

namespace App\Orchid\Layouts\TicketType;

use Orchid\Screen\TD;
use App\Models\TicketType;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\DateTimer;

class TicketTypeListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'ticket_types';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name', 'Наименование')
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(function (TicketType $ticketType) {
                    return Link::make($ticketType->name)
                        ->route('platform.ticket_types.edit', $ticketType->id);
                }),

            TD::make('lessons', 'Количество уроков')
                ->sort()
                ->cantHide()
                ->render(function (TicketType $ticketType) {
                    return Link::make($ticketType->lessons)
                        ->route('platform.ticket_types.edit', $ticketType->id);
                }),

            TD::make('price', 'Цена')
                ->sort()
                ->cantHide()
                ->render(function (TicketType $ticketType) {
                    return Link::make($ticketType->price)
                        ->route('platform.ticket_types.edit', $ticketType->id);
                }),

            TD::make('is_active', 'Активность')
                ->sort()
                ->cantHide()
                ->filter(CheckBox::make())
                ->render(function (TicketType $ticketType) {
                    return Link::make($ticketType->is_active)
                        ->route('platform.ticket_types.edit', $ticketType->id);
                })->is_active(),

            TD::make('created_at', __('Created'))
                ->sort()
                ->filter(DateTimer::make()->format('Y-m-d'))
                ->render(function (TicketType $ticketType) {
                    return $ticketType->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Обновлено')
                ->sort()
                ->filter(DateTimer::make()->format('Y-m-d'))
                ->render(function (TicketType $ticketType) {
                    return $ticketType->updated_at->toDateTimeString();
                }),
        ];
    }
}
