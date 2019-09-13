<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'Henrique Brandão',
             'email' => 'henrique.brandao@sagatechbrasil.com.br',
             'password' => bcrypt('123456')

        ]);
        User::create([
            'name'=> 'Isa',
             'email' => 'isa@sagatechbrasil.com.br',
             'password' => bcrypt('123456')

        ]);
        //
    }


}
