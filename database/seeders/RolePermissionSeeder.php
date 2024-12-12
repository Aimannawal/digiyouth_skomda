<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            "view_category",
            "view_any_category",
            "create_category",
            "update_category",
            "restore_category",
            "restore_any_category",
            "replicate_category",
            "reorder_category",
            "delete_category",
            "delete_any_category",
            "force_delete_category",
            "force_delete_any_category",
            "view_comment",
            "view_any_comment",
            "create_comment",
            "update_comment",
            "restore_comment",
            "restore_any_comment",
            "replicate_comment",
            "reorder_comment",
            "delete_comment",
            "delete_any_comment",
            "force_delete_comment",
            "force_delete_any_comment",
            "view_project",
            "view_any_project",
            "create_project",
            "update_project",
            "restore_project",
            "restore_any_project",
            "replicate_project",
            "reorder_project",
            "delete_project",
            "delete_any_project",
            "force_delete_project",
            "force_delete_any_project",
            "view_role",
            "view_any_role",
            "create_role",
            "update_role",
            "delete_role",
            "delete_any_role",
            "view_team",
            "view_any_team",
            "create_team",
            "update_team",
            "restore_team",
            "restore_any_team",
            "replicate_team",
            "reorder_team",
            "delete_team",
            "delete_any_team",
            "force_delete_team",
            "force_delete_any_team",
            "view_user",
            "view_any_user",
            "create_user",
            "update_user",
            "restore_user",
            "restore_any_user",
            "replicate_user",
            "reorder_user",
            "delete_user",
            "delete_any_user",
            "force_delete_user",
            "force_delete_any_user",
            "view_reply",
            "view_any_reply",
            "create_reply",
            "update_reply",
            "restore_reply",
            "restore_any_reply",
            "replicate_reply",
            "reorder_reply",
            "delete_reply",
            "delete_any_reply",
            "force_delete_reply",
            "force_delete_any_reply",
            "view_like",
            "view_any_like",
            "create_like",
            "update_like",
            "restore_like",
            "restore_any_like",
            "replicate_like",
            "reorder_like",
            "delete_like",
            "delete_any_like",
            "force_delete_like",
            "force_delete_any_like"
        ];
        
                foreach ($permissions as $permission) {
                    Permission::create([
                        "name" => $permission
                    ]);
                }
        
                $superAdminRole = Role::create([
                    "name" => "super_admin"
                ]);
        
                $superAdminRole->givePermissionTo($permissions);
        
                $teacherRole = Role::create([
                    "name" => "Guru"
                ]);
        
                $teacherRole->givePermissionTo([
                    $permissions[24],
                    $permissions[25],
                    $permissions[26],
                    $permissions[27],
                    $permissions[28],
                    $permissions[29],
                    $permissions[30],
                    $permissions[31],
                    $permissions[32],
                    $permissions[33],
                    $permissions[34],
                    $permissions[35],
                    ]);
        
                $studentRole = Role::create([
                    "name" => "Murid"
                ]);
        
                $studentRole->givePermissionTo([
                    $permissions[24],
                    $permissions[24],
                    $permissions[26],
                    $permissions[42],
                    $permissions[44],
                    $permissions[45],
                ]);
        
                $user = User::create([
                    "name" => "admin",
                    "email" => "admin@gmail.com",
                    "password" => bcrypt("admin1234"),
                ]);
        
                $user->assignRole($superAdminRole);
        
                $user = User::create([
                    "name" => "teacher",
                    "email" => "teacher@gmail.com",
                    "password" => bcrypt("teacher1234"),
                ]);
        
                $user->assignRole($teacherRole);
        
                $user = User::create([
                    "name" => "student",
                    "email" => "student@gmail.com",
                    "password" => bcrypt("student1234"),
                ]);
        
                $user->assignRole($studentRole);

                $user = User::create([
                    "name" => "Arka Jenar Maarif",
                    "email" => "arka@gmail.com",
                    "password" => bcrypt("arka1234"),
                    "grade" => "XII SIJA 1",
                ]);
        
                $user->assignRole($studentRole);

                $user = User::create([
                    "name" => "Muhammad Rizal Ramzi",
                    "email" => "ramzi@gmail.com",
                    "password" => bcrypt("ramzi1234"),
                    "grade" => "XII SIJA 1",
                ]);
        
                $user->assignRole($studentRole);

                $user = User::create([
                    "name" => "Elang Satrio Al Ayyu",
                    "email" => "elang@gmail.com",
                    "password" => bcrypt("elang1234"),
                    "grade" => "XII SIJA 1",
                ]);
        
                $user->assignRole($studentRole);

                $user = User::create([
                    "name" => "Aiman Wafi'i An Nawal",
                    "email" => "aiman@gmail.com",
                    "password" => bcrypt("aiman1234"),
                    "grade" => "XII SIJA 2",
                ]);
        
                $user->assignRole($studentRole);

                $user = User::create([
                    "name" => "Abi Arrasyid",
                    "email" => "abi@gmail.com",
                    "password" => bcrypt("abi1234"),
                    "grade" => "XII SIJA 1",
                ]);
        
                $user->assignRole($studentRole);

                $user = User::create([
                    "name" => "Ihsan Ryu Al Kautsar",
                    "email" => "ryu@gmail.com",
                    "password" => bcrypt("ryu1234"),
                    "grade" => "XII SIJA 1",
                ]);
        
                $user->assignRole($studentRole);
    }
}
