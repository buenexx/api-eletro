<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // Brand::factory(10)->create();
        Product::factory(10)->create();
    }
}
