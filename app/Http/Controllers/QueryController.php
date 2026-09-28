<?php

namespace App\Http\Controllers;

use App\Rules\Uppercase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function insertData()
    {
        DB::table('users')->insert([
            'name' => 'Dila',
            'email' => 'dilay@example.com',
            'password' => bcrypt('password123')
        ]);
    }
    public function insertGetId()
    {
        $id = DB::table('users')->insertGetId([
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'password' => bcrypt('password123')
        ]);

        echo $id;
    }

    public function getData()
    {
        $users = DB::table('users')->get();

        echo $users;
    }


    public function getDataWhere()
    {
        $users = DB::table('users')
            ->where('email', 'john@gmail.com')->first();
        dd($users);
    }

    public function getDataColumn()
    {
        $users = DB::table('users')->select('id', 'name')->get();
        echo $users;
    }

    public function getDataManyWhere()
    {
        $users = DB::table('users')
            ->where('email', 'john@gmail.com')
            ->where('role', 'admin')
            ->get();

        echo $users;
    }

    public function getDataOperator()
    {
        $users = DB::table('users')
            ->where('age', '>=', 18)
            ->get();

        echo $users;
    }

    public function updateData()
    {
        $update = DB::table('users')
            ->where('email', 'john@gmail.com')
            ->update(['role' => 'umum']);

        if ($update) {
            echo "data berhasil diupdate";
        } else {
            echo "data tidak berhasil diupdate";
        }
    }

    public function increment()
    {
        DB::table('users')
            ->where('id', 1)
            ->increment('points', 10);
    }
    public function decrement()
    {
        DB::table('users')
            ->where('id', 1)
            ->decrement('points', 5);
    }

    public function destroyData()
    {
        $destroy = DB::table('users')
            ->where('email', 'john@gmail.com')
            ->delete();

        if ($destroy) {
            echo "data berhasil dihapus";
        } else {
            echo "data tidak berhasil dihapus";
        }
    }

    public function truncate()
    {
        $truncate = DB::table('users')->truncate();

        if ($truncate) {
            echo "data berhasil dihapus semua";
        } else {
            echo "data tidak berhasil dihapus";
        }
    }

    public function pluckData()
    {
        $names = DB::table('users')->pluck('name');

        echo $names;
    }
    public function pluckDataKeyValue()
    {
        $users = DB::table('users')->pluck('name', 'email');

        echo $users;
    }
    public function countData()
    {
        $totalUsers = DB::table('users')->count();

        echo $totalUsers;
    }
    public function sumData()
    {
        $totalPoints = DB::table('users')->sum('points');

        echo $totalPoints;
    }
    public function avgData()
    {
        $averageAge = DB::table('users')->avg('age');

        echo $averageAge;
    }
    public function maxData()
    {
        $maxSalary = DB::table('employees')->max('salary');

        echo $maxSalary;
    }
    public function minData()
    {
        $minSalary = DB::table('employees')->min('salary');

        echo $minSalary;
    }
    public function joinData()
    {
        $users = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.name', 'orders.total_price')
            ->get();

        return $users;
    }
    public function leftJoinData()
    {
        $users = DB::table('users')
            ->leftJoin('orders', 'users.id', '=', 'orders.user_id')
            ->get();

        return $users;
    }

    public function orderData()
    {
        $users = DB::table('users')
            ->orderBy('name', 'asc')
            ->get();

        return $users;
    }
    public function limitData()
    {
        $users = DB::table('users')
            ->limit(10)
            ->get();

        return $users;
    }
    public function offsetData()
    {
        $users = DB::table('users')
            ->offset(10)
            ->limit(10)
            ->get();

        return $users;
    }

    public function subQueryData()
    {
        $users = DB::table('users')
            ->select('name')
            ->selectSub(function ($query) {
                $query->from('orders')->selectRaw('count(*)')
                    ->whereColumn('orders.user_id', 'users.id');
            }, 'order_count')
            ->get();

        return $users;
    }
    public function rawSelectData()
    {
        $users = DB::table('users')
            ->selectRaw('COUNT(*) as total_users, status')
            ->groupBy('status')
            ->get();

        return $users;
    }
    public function rawWhereData()
    {
        $users = DB::table('users')
            ->whereRaw('age > ? AND status = ?', [18, 'active'])
            ->get();

        return $users;
    }

    // public function uppercase(Request $request) {}

    // public function munculform()
    // {
    //     return view('form');
    // }

    // public function validasiform(Request $request)
    // {
    //     $request->validate([
    //         'name' => ['required', new Uppercase]
    //     ]);

    //     return 'data berhasil divalidasi';
    // }
}
