<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      //Producto
        Permission::create([
          'name'         => 'Import products',
          'slug'         => 'products.import',
          'description'  => 'Importa productos con un archivo excel',
        ]);

        Permission::create([
          'name'         => 'Administrate products',
          'slug'         => 'products.administrate',
          'description'  => 'Permite administrar productos',
        ]);

        Permission::create([
          'name'         => 'Administrar detalles de producto',
          'slug'         => 'products_description.edit',
          'description'  => 'Permite cambiar la descripcion de los productos',
        ]);


      //Roles
        Permission::create([
          'name'         => 'Navegar roles',
          'slug'         => 'roles.index',
          'description'  => 'Permite ver todos los roles',
        ]);

        Permission::create([
          'name'         => 'Creacion de roles',
          'slug'         => 'roles.create',
          'description'  => 'Permite crear nuevos roles',
        ]);

        Permission::create([
          'name'         => 'Edicion de roles',
          'slug'         => 'roles.edit',
          'description'  => 'Permite editar roles',
        ]);

        Permission::create([
          'name'         => 'Ver rol particular',
          'slug'         => 'roles.show',
          'description'  => 'Permite ver roles particulares',
        ]);

        Permission::create([
          'name'         => 'Eliminar roles',
          'slug'         => 'roles.destroy',
          'description'  => 'Permite elimiar un rol',
        ]);


    }
}
