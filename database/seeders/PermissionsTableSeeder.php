<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_access',
            ],
            [
                'id'    => 2,
                'title' => 'task_access',
            ],
            [
                'id'    => 3,
                'title' => 'staff_access',
            ],
            [
                'id'    => 4,
                'title' => 'project_categories_access',
            ],
            [
                'id'    => 5,
                'title' => 'material_access',
            ],
            [
                'id'    => 6,
                'title' => 'funds_access',
            ],
            [
                'id'    => 7,
                'title' => 'donations_access',
            ],
            [
                'id'    => 8,
                'title' => 'balance_report_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
