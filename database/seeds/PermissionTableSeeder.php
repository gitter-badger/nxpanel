<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actions = [
            'create',
            'read',
            'update',
            'delete'
        ];

        $entities = [
            'user',
            'profile',
            'role',
            'permission',
            'post'
        ];

        foreach($actions as $action) {
            foreach($entities as $entity) {
                App\Permission::create([
                    'name' => $action . '.' . $entity,
                    'label' => ucfirst($action) . ' ' . ucfirst($entity),
                    'description' => $action . '.' . $entity . ': Edit Description',
                ]);
            }
        }
    }
}
