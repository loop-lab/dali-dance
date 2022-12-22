<?php

declare(strict_types=1);

use Tabuna\Breadcrumbs\Trail;
use Illuminate\Support\Facades\Route;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\Style\StyleEditScreen;
use App\Orchid\Screens\Style\StyleListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use App\Orchid\Screens\Lesson\LessonTableScreen;
use App\Orchid\Screens\Teacher\TeacherEditScreen;
use App\Orchid\Screens\Teacher\TeacherListScreen;
use App\Orchid\Screens\Customer\CustomerEditScreen;
use App\Orchid\Screens\Customer\CustomerListScreen;
use App\Orchid\Screens\Customer\CustomerShowScreen;
use App\Orchid\Screens\TicketType\TicketTypeEditScreen;
use App\Orchid\Screens\TicketType\TicketTypeListScreen;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Profile'), route('platform.profile'));
    });

// Platform > System > Users
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(function (Trail $trail, $user) {
        return $trail
            ->parent('platform.systems.users')
            ->push(__('User'), route('platform.systems.users.edit', $user));
    });

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.users')
            ->push(__('Create'), route('platform.systems.users.create'));
    });

// Platform > System > Users > User
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Users'), route('platform.systems.users'));
    });

// Platform > System > Roles > Role
// Route::screen('roles/{role}/edit', RoleEditScreen::class)
//     ->name('platform.systems.roles.edit')
//     ->breadcrumbs(function (Trail $trail, $role) {
//         return $trail
//             ->parent('platform.systems.roles')
//             ->push(__('Role'), route('platform.systems.roles.edit', $role));
//     });

// // Platform > System > Roles > Create
// Route::screen('roles/create', RoleEditScreen::class)
//     ->name('platform.systems.roles.create')
//     ->breadcrumbs(function (Trail $trail) {
//         return $trail
//             ->parent('platform.systems.roles')
//             ->push(__('Create'), route('platform.systems.roles.create'));
//     });

// // Platform > System > Roles
// Route::screen('roles', RoleListScreen::class)
//     ->name('platform.systems.roles')
//     ->breadcrumbs(function (Trail $trail) {
//         return $trail
//             ->parent('platform.index')
//             ->push(__('Roles'), route('platform.systems.roles'));
//     });

// Platform > Customers > Customer
Route::screen('customers/{customer}/edit', CustomerEditScreen::class)
    ->name('platform.customers.edit')
    ->breadcrumbs(function (Trail $trail, $customer) {
        return $trail
            ->parent('platform.customers')
            ->push('Клиент', route('platform.customers.edit', $customer));
    });

// Platform > Customers > Create
Route::screen('customers/create', CustomerEditScreen::class)
    ->name('platform.customers.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.customers')
            ->push(__('Create'), route('platform.customers.create'));
    });

// Platform > Customers
Route::screen('customers', CustomerListScreen::class)
    ->name('platform.customers')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push('Клиенты', route('platform.customers'));
    });

// Platform > Teachers > Teacher
Route::screen('teachers/{teacher}/edit', TeacherEditScreen::class)
    ->name('platform.teachers.edit')
    ->breadcrumbs(function (Trail $trail, $teacher) {
        return $trail
            ->parent('platform.teachers')
            ->push('Преподаватели', route('platform.teachers.edit', $teacher));
    });

// Platform > Teachers > Create
Route::screen('teachers/create', TeacherEditScreen::class)
    ->name('platform.teachers.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.teachers')
            ->push(__('Create'), route('platform.teachers.create'));
    });

// Platform > Teachers
Route::screen('teachers', TeacherListScreen::class)
    ->name('platform.teachers')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push('Преподаватели', route('platform.teachers'));
    });

// Platform > Styles > Style
Route::screen('styles/{style}/edit', StyleEditScreen::class)
    ->name('platform.styles.edit')
    ->breadcrumbs(function (Trail $trail, $style) {
        return $trail
            ->parent('platform.styles')
            ->push('Преподаватели', route('platform.styles.edit', $style));
    });

// Platform > Styles > Create
Route::screen('styles/create', StyleEditScreen::class)
    ->name('platform.styles.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.styles')
            ->push(__('Create'), route('platform.styles.create'));
    });

// Platform > Styles
Route::screen('styles', StyleListScreen::class)
    ->name('platform.styles')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push('Преподаватели', route('platform.styles'));
    });

// Platform > TicketTypes > TicketType
Route::screen('ticket_types/{ticket_type}/edit', TicketTypeEditScreen::class)
    ->name('platform.ticket_types.edit')
    ->breadcrumbs(function (Trail $trail, $ticketType) {
        return $trail
            ->parent('platform.ticket_types')
            ->push('Абонементы', route('platform.ticket_types.edit', $ticketType));
    });

// Platform > TicketTypes > Create
Route::screen('ticket_types/create', TicketTypeEditScreen::class)
    ->name('platform.ticket_types.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.ticket_types')
            ->push(__('Create'), route('platform.ticket_types.create'));
    });

// Platform > TicketTypes
Route::screen('ticket_types', TicketTypeListScreen::class)
    ->name('platform.ticket_types')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push('Абонементы', route('platform.ticket_types'));
    });

// Platform > Lessons
Route::screen('lessons', LessonTableScreen::class)
    ->name('platform.lessons')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push('Занятия', route('platform.lessons'));
    });