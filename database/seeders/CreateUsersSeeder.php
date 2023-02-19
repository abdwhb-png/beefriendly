<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Providers\UserRolesServiceProvider;

use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    protected $userRoles = UserRolesServiceProvider::ROLES;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'username'=>'admin',
               'email'=>'admin@beefriendly.com',
               'type'=>$this->userRoles['admin'],
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Manager User',
               'username'=>'manager',
               'email'=>'manager@beefriendly.com',
               'type'=> $this->userRoles['manager'],
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'username'=>'user',
               'email'=>'user@beefriendly.com',
               'type'=>$this->userRoles['user'],
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
        for($i=1; $i<=21; $i++){
            $user = [
                    'name'=>'User'.$i,
                    'username'=>'user'.$i,
                    'email'=>'user'.$i.'@beefriendly.com',
                    'type'=>$this->userRoles['user'],
                    'password'=> bcrypt('123456'),
            ];
            User::create($user);
        }
    }
}
