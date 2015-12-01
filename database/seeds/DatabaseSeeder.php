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
        App\User::create([
            'name' => 'admin',
            'email' => 'admin@nxpanel.com',
            'password' => bcrypt('admin')
        ]);
        App\Profile::create([
            'user_id' => 1,
        ]);

        factory(App\User::class, 50)->create();
        factory(App\Profile::class, 50)->create();

        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
