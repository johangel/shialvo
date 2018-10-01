<?php

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
      $this->call(UsersTable::Class);
      $this->call(PermissionsTableSeeder::Class);
      $this->call(ProductsDescriptionSeeder::Class);
      $this->call(ProductsTableSeeder::Class);
    }
}
