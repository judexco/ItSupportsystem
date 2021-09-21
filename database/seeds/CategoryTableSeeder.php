<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createCategory = new Category();
        $createCategory->name = 'Network';
        $createCategory->save();

        $createCategory = new Category();
        $createCategory->name = 'Internet';
        $createCategory->save();

        $createCategory = new Category();
        $createCategory->name = 'Printers';
        $createCategory->save();

        $createCategory = new Category();
        $createCategory->name = 'Operating System';
        $createCategory->save();

        $createCategory = new Category();
        $createCategory->name = 'Software';
        $createCategory->save();

        $createCategory = new Category();
        $createCategory->name = 'Hardware';
        $createCategory->save();

    }
}
