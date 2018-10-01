<?php

use Illuminate\Database\Seeder;

class ProductsDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProductDescription::class, 30)->create();
    }
}
