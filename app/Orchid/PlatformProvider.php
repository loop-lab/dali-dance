<?php

declare(strict_types=1);

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * @return Menu[]
     */
    public function registerMainMenu(): array
    {
        return [
            Menu::make('Занятия')
                ->icon('calendar')
                ->route('platform.lessons')
                ->permission('platform.systems.lessons')
                ->title('База данных'),

            Menu::make('Клиенты')
                ->icon('people')
                ->route('platform.customers')
                ->permission('platform.systems.customers'),

            Menu::make('Преподаватели')
                ->icon('graduation')
                ->route('platform.teachers')
                ->permission('platform.systems.teachers'),

            Menu::make('Стили')
                ->icon('social-github')
                ->route('platform.styles')
                ->permission('platform.systems.styles'),

            Menu::make('Абонементы')
                ->icon('event')
                ->route('platform.ticket_types')
                ->permission('platform.systems.ticket_types'),

            Menu::make(__('Users'))
                ->icon('user')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title('Доступы'),

            Menu::make(__('Roles'))
                ->icon('lock')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles'),
        ];
    }

    /**
     * @return Menu[]
     */
    public function registerProfileMenu(): array
    {
        return [
            Menu::make('Profile')
                ->route('platform.profile')
                ->icon('user'),
        ];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.lessons', 'Занятия')
                ->addPermission('platform.systems.customers', 'Клиенты')
                ->addPermission('platform.systems.teachers', 'Преподаватели')
                ->addPermission('platform.systems.styles', 'Стили')
                ->addPermission('platform.systems.ticket_types', 'Абонементы')
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }
}
