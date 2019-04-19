<?php

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
        DB::table('users')->insert([
	    [		
           	'id' => 1,
           	'name' => 'admin',
	        'password' => bcrypt('admin'),
	        'email' => 'admin@admin.com',
        ],
        [
		    'id' => 2,
            'name' => 'gestionnaire',
	    	'password' => bcrypt('gestionnaire'),
	    	'email' => 'gestionnaire@gestionnaire.com',
        ],
        [
		    'id' => 3,
            'name' => 'user',
	    	'password' => bcrypt('user'),
	    	'email' => 'user@user.com',
	    ],
        ]);
    }
}	
		
