<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoryTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 10)->create()->each(function($c){
            for($i=0; $i <= 1; $i++){
                $c->products()->save(factory(Products::class)->make());
            }
        });
    }
}
