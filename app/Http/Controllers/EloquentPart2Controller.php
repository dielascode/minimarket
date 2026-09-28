<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EloquentPart2Controller extends Controller
{
    public function whereData()
    {
        $users = User::where('status', 'active')->get();

        return $users;
    }
    public function orWhereData()
    {
        $users = User::where('status', 'active')
            ->orWhere('role', 'admin')
            ->get();

        return $users;
    }
    public function whereBetweenData()
    {
        $users = User::whereBetween('age', [18, 30])->get();

        return $users;
    }
    public function whereInData()
    {
        $users = User::whereIn('role', ['admin', 'editor'])->get();

        return $users;
    }
    public function whereNotNullData()
    {
        $users = User::whereNotNull('email_verified_at')->get();

        return $users;
    }
    public function whenData()
    {
        $role = 'admin';

        $users = User::when($role, function ($query, $role) {
            return $query->where('role', $role);
        })->get();

        return $users;
    }
    public function accessorData()
    {
        $user = User::find(4);

        return $user->full_name;
    }
    public function softDeleteData()
    {
        $user = User::find(3);

        $user->delete();

        return 'Data berhasil dihapus secara soft delete';
    }


    public function withTrashedData()
    {
        $users = User::withTrashed()->get();

        return $users;
    }
    public function onlyTrashedData()
    {
        $users = User::onlyTrashed()->get();

        return $users;
    }
    public function restoreData()
    {
        $user = User::withTrashed()->find(1);

        $user->restore();

        return 'Data berhasil dikembalikan';
    }
    
}
