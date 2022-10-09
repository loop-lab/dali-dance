<?php

namespace App\Orchid\Layouts\Customer;

use Orchid\Screen\TD;
use App\Models\Customer;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\DateTimer;

class CustomerListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'customers';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('last_name', 'Фамилия')
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(function (Customer $customer) {
                    return Link::make($customer->last_name)
                        ->route('platform.customers.edit', $customer->id);
                }),

            TD::make('name', 'Имя')
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(function (Customer $customer) {
                    return Link::make($customer->name)
                        ->route('platform.customers.edit', $customer->id);
                }),

            TD::make('phone', 'Телефон')
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(function (Customer $customer) {
                    return Link::make($customer->phone)
                        ->route('platform.customers.edit', $customer->id);
                }),

            TD::make('bonuses', 'Бонусы')
                ->sort()
                ->cantHide()
                ->render(function (Customer $customer) {
                    return Link::make($customer->bonuses)
                        ->route('platform.customers.edit', $customer->id);
                }),

            TD::make('is_active', 'Активность')
                ->sort()
                ->cantHide()
                ->filter(CheckBox::make())
                ->render(function (Customer $customer) {
                    return Link::make($customer->is_active)
                        ->route('platform.customers.edit', $customer->id);
                })->is_active(),

            TD::make('created_at', __('Created'))
                ->sort()
                ->filter(DateTimer::make()->format('Y-m-d'))
                ->render(function (Customer $customer) {
                    return $customer->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Обновлено')
                ->sort()
                ->filter(DateTimer::make()->format('Y-m-d'))
                ->render(function (Customer $customer) {
                    return $customer->updated_at->toDateTimeString();
                }),
        ];
    }
}
