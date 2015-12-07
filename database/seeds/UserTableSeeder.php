<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'admin',
            'email' => 'admin@nxpanel.com',
            'password' => bcrypt('admin')
        ]);

        App\Profile::create([
            'user_id' => 1,
        ]);

        App\User::find(1)->roles()->attach(1);

        factory(App\User::class, 50)->create()->each(function($u) {
            $u->profile()->save(factory(App\Profile::class)->make());

            $u->roles()->attach(rand(1,4));
        });
    }
}
