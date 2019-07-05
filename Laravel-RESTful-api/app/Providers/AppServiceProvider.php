<?php
namespace App\Providers;


use App\Repositories\CustomerRepository;
use App\Repositories\CustomerRepositoryImpl;
use App\Service\CustomerService;
use App\Service\CustomerServiceImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //
    }


    public function register()
    {
        $this->app->singleton(
            CustomerRepository::class,
            CustomerRepositoryImpl::class
        );
        $this->app->singleton(
            CustomerService::class,
            CustomerServiceImpl::class
        );
    }
}