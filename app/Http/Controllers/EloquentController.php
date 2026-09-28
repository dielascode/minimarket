<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EloquentController extends Controller
{
    public function createData()
    {
        User::create([
            'name' => 'Azmi',
            'email' => 'azmi@example.com',
            'password' => bcrypt('password'),
            'role' => 'umum'
        ]);

        return 'Data berhasil ditambahkan';
    }

    public function saveData()
    {
        $user = new User;

        $user->name = 'lany';
        $user->email = 'lany@example.com';
        $user->password = bcrypt('password');
        $user->role = 'umum';

        $user->save();

        return 'Data berhasil ditambahkan';
    }

    public function getData()
    {
        $users = User::all();

        return $users;
    }

    public function getDataById()
    {
        $user = User::find(1);

        return $user;
    }

    public function getDataWhere()
    {
        $users = User::where('email', 'john@gmail.com')->get();

        return $users;
    }

    public function firstOrFail()
    {
        // $user = User::where('email', 'john@example.com')->firstOrFail(); //akan keluar 404
        $user = User::where('email', 'john@gmail.com')->firstOrFail(); //akan muncul data

        return $user;
    }
    public function updateData()
    {
        User::where('email', 'john@gmail.com')
            ->update(['name' => 'John Updated']);

        return 'Data berhasil diupdate';
    }
    public function updateSave()
    {
        $user = User::find(3);

        $user->name = 'Azmi Updated';

        $user->save();

        return 'Data berhasil diupdate';
    }
    public function deleteData()
    {
        $user = User::find(1);

        $user->delete();

        return 'Data berhasil dihapus';
    }

    public function destroyData()
    {
        User::destroy(2);

        return 'Data berhasil dihapus';
    }
}
