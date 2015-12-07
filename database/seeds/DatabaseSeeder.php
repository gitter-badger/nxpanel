<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(PermissionTableSeeder::class);    // 1st
        $this->call(RoleTableSeeder::class);    // 2nd
        $this->call(UserTableSeeder::class); // 3rd
        $this->call(PostTableSeeder::class); // 4th
        Model::reguard();
    }
}
