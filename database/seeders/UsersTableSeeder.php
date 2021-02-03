<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedUsers();
        $this->command->info('Tabla users inicializada con datos!');
    }


    private static function seedUsers()
    {
    	User::truncate();
    	foreach( self::$arrayUsers as $user ) {
		    $table = new User;
		    $table->name = $user['name'];
		    $table->email = $user['email'];
		    $table->password = $user['password'];
		    $table->administrador = $user['administrador'];
		    $table->proveedor = $user['proveedor'];
		    $table->save();
		}
    }

    private static $arrayUsers= array(
			array(
				'name' => 'Manuel',
				'email' => 'manuel.mgp.2001@gmail.com', 
				'password' => 'password', 
				'administrador' => true, 
				'proveedor' => false 
				
			),

			array(
				'name' => 'Alberto',
				'email' => 'alberto.sierra@murciaeduca.es', 
				'password' => '12345678', 
				'administrador' => false, 
				'proveedor' => true
				
			),

			array(
				'name' => 'SinNombre',
				'email' => 'sin.nombre@murciaeduca.es', 
				'password' => '12345678', 
				'administrador' => false, 
				'proveedor' => false
				
			)
	);
}
