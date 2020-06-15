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

        //para cada usuário é criado uma loja    
        factory(\App\User::class, 40)->create()->each(function($user) {
            $user->store()->save(factory(\App\Store::class)->make());
        });
    }
}
