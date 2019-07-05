<?php


namespace App\Repositories;


use App\Customer;

class CustomerRepositoryImpl extends EloquentRepository implements CustomerRepository
{

    public function getModel()
    {
        $model = Customer::class;
        return $model;
    }
}