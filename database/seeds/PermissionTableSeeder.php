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
            'edit',
            'delete'
        ];

        $entities = [
            'user',
            'role',
            'permission',
            'post'
        ];

        foreach($actions as $action) {
            foreach($entities as $entity) {
                App\Permission::create([
                    'name' => $action . '.' . $entity,
                    'display_name' => ucfirst($action) . ' ' . ucfirst($entity),
                    'description' => $action . '.' . $entity . ': Edit Description',
                ]);
            }
        }
    }
}
