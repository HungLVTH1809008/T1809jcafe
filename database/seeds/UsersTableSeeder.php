<?php

use App\Category;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class,50)->create();
        factory(App\Product::class,30)->create();
        factory(App\User::class,30)->create();

    }
}
