<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=[
            ['name'=>'Administrator'],
            ['name'=>'Editor'],
            ['name'=>'Author'],
            ['name'=>'Contributor'],
            ['name'=>'Subscribers'],
        ];
        Role::insert($roles);
    }
}
