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
            "force_delete_any_user"
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
                    "name" => "ayam",
                    "email" => "ayam@gmail.com",
                    "password" => bcrypt("ayam1234"),
                ]);
        
                $user->assignRole($studentRole);
        
                $user = User::create([
                    "name" => "bebek",
                    "email" => "bebek@gmail.com",
                    "password" => bcrypt("bebek1234"),
                ]);
        
                $user->assignRole($studentRole);
    }
}
