<?php

namespace App\Providers;

use Orchid\Screen\TD;
use Orchid\Screen\Layout;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        TD::macro('is_active', function () {
            $column = $this->column;

            $this->render(function ($datum) use ($column) {
                return view('tables.colums.is_active',[
                    'is_active' => $datum->$column
                ]);
            });

            return $this;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
