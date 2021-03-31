<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array('sample1','sample2', 'sample3');
        for ($i=0; $i < 3; $i++) { 
            User::create([
                'name' => "User ".$users[$i],
                'email' => $users[$i].'@email.com',
                'password' => bcrypt('123456')
            ]);
        }
    }
}
