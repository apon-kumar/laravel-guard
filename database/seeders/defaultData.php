<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Merchant;

class defaultData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $merchant = [
            'name' => 'Richard',
            'email' => 'richard@gmail.com',
            'password' => bcrypt('password'),
            'login_at' => date('Y-m-d H:i:s'),
        ];

        Merchant::create($merchant);

        $customer = [
            'name' => 'Denis',
            'email' => 'denis@gmail.com',
            'password' => bcrypt('password'),
            'login_at' => date('Y-m-d H:i:s'),
        ];

        Customer::create($customer);

    }

}
