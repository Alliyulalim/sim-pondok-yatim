<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Izin Admin',
        ]);
        $pengguna = Role::create([
            'name' => 'pengguna',
            'display_name' => 'Izin Pengguna',
        ]);

        $kasir = Role::create([
            'name' => 'kasir',
            'display_name' => 'Izin kasir',
        ]);

        $userAdmin = new User();
        $userAdmin->name = 'muhamad alliyul alim';
        $userAdmin->email = 'admin@gmail.com';
        $userAdmin->password = Hash::make('12345678');
        $userAdmin->save();
        $userAdmin->attachRole($admin);

        $userPengguna = new User();
        $userPengguna->name = 'muhamad ilhamudin';
        $userPengguna->email = 'ilham@gmail.com';
        $userPengguna->Password = Hash::make('12345678');
        $userPengguna->save();
        $userPengguna->attachRole($pengguna);

        $kasir = new User();
        $kasir->name = 'sukaesih';
        $kasir->email = 'esih@gmail.com';
        $kasir->password = Hash::make('12345678');
        $kasir->save();
        $kasir->attachRole($kasir);
    }

}
