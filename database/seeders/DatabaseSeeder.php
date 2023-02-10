<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Models\Shipping;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        // $this->call(\Lwwcas\LaravelCountries\Database\Seeders\LcDatabaseSeeder::class);

        // \App\Models\User::factory()->create([
        //     'FirstName' => 'moath',
        //     'LastName' => 'ababneh',
        //     'email' => 'test@test.com',
        //     'gender' => 'male',
        //     'address' => 'irbid',
        //     'country' => 'jordan',
        //     'city' => 'irbid',
        //     'password'=>bcrypt('password')
        // ]);

        // Category::factory(10)->create();
        // Brand::factory(10)->create();
        Product::factory(25)->create();
        // Order::factory(5)->create();
        // OrderDetails::factory(5)->create();
        // Shipping::factory(5)->create();

    }
}
