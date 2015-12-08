<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Status::create([
        	'name' => 'active',
        	'label' => 'Active'
       	]);

        App\Status::create([
        	'name' => 'suspended',
        	'label' => 'Suspended'
       	]);

        App\Status::create([
        	'name' => 'banned',
        	'label' => 'Banned'
       	]);
    }
}
