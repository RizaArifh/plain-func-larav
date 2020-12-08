<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    public function addRole(){
     $roles=[
         ['name'=>'Administrator'],
         ['name'=>'Editor'],
         ['name'=>'Author'],
         ['name'=>'Contributor'],
         ['name'=>'Subscribers'],
     ];
     Role::insert($roles);
     return 'roles are create successfully';
    }

    public function addUser(){
        $user= new User();
        $user->name='second user';
        $user->email='fddirstSusefr@gmail.com';
        $user->password=encrypt('secret');
        $user->save();

        $roleids=[1];
        $user->roles()->attach($roleids);
        return "record has been created successfully";
    }

    public function getAllRolesByUser($id){
        $user=User::find($id);
        $roles = $user->roles;
        return $roles;
    }
    public function getAllUsersRoles($id){
        $role=Role::find($id);
        $users = $role->users;
        return $users;
    }
    
}
