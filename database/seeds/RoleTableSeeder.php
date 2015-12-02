<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            'Admin',
            'Moderator',
            'Staff',
            'User'
        ];

        foreach($arr as $role) {
            App\Role::create([
                'name' => strtolower($role),
                'display_name' => $role,
                'description' => 'Edit the description for ' . $role,
            ])->permissions()->attach(4);
        }
    }
}
