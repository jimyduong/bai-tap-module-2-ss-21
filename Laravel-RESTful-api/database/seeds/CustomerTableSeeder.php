<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            $customer = new Customer();
            $customer->first_name = str_random(5);
            $customer->last_name = str_random(3);
            $customer->save();
        }
    }
}
