<?php

namespace CodeProject\Providers;

use Illuminate\Support\ServiceProvider;

class CodeProjectRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->add->bind(
            \CodePRoject\Repositories\ClientRepository::class,
            \CodePRoject\Repositories\ClientRepositoryEloquent::class
        );
    }
}
