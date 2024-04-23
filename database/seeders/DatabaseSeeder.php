<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    private $permissions = [
        'dashboard',
        'transaction-order',
        'history-order',
        'masterdata-konsumen',
        'masterdata-petugas',
        'masterdata-jenis_layanan',
        'masterdata-jenis_pembayaran',
        'masterdata-pemimpin'
    ];

    private $roles = [
        'Admin' => ['all_permissions'],
        'Petugas' => ['dashboard', 'transaction-order', 'history-order', 'masterdata-konsumen'],
        'Pemimpin' => ['dashboard', 'masterdata-konsumen', 'masterdata-petugas', 'masterdata-jenis_layanan', 'masterdata-jenis_pembayaran'],
    ];

    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(123456)
        ]);

        $permissions = Permission::pluck('id', 'id')->all();

        foreach ($this->roles as $roleName => $permissions) {
            $createdRole = Role::create(['name' => $roleName, 'guard_name' => 'web']);

            
            if ($roleName === 'Admin') {
                $user->assignRole([$createdRole->id]);
                $createdRole->syncPermissions(Permission::pluck('id')->all());
            } else {
                $permissionIds = Permission::whereIn('name', $permissions)->pluck('id')->all();
                $createdRole->syncPermissions($permissionIds);
            }
        }

    }
}
