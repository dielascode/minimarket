<?php

namespace App\Http\Controllers;

use App\Rules\Uppercase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class QueryController extends Controller
{
    public function getData(){
        $users= DB::table('users')->get();

        echo $users;
    }

    public function getDataWhere(){
        $users = DB::table('users')
        ->where('email', 'john@gmail.com')->first();
        dd($users);
    }

    public function getDataColumn(){
        $users = DB::table('users')->select('id', 'name')->get();
        echo $users;
    }

    public function getDataManyWhere(){
        $users = DB::table('users')
        ->where('email', 'john@gmail.com')
        ->where('role', 'admin')
        ->get();

        echo $users;
    }

    public function updateData(){
        $update = DB::table('users')
        ->where('email', 'john@gmail.com')
        ->update(['role'=>'umum']);

        if ($update) {
            echo "data berhasil diupdate";
        } else {
            echo "data tidak berhasil diupdate";
        }

    }

    public function increment(){
        DB::table('users')
        ->where('id', 1)
        ->increment('points', 10);
    }
    public function decrement(){
        DB::table('users')
        ->where('id', 1)
        ->decrement('points', 10);
    }

    public function destroyData(){
        $destroy = DB::table('users')
        ->where('email', 'john@gmail.com')
        ->delete();

        if ($destroy) {
            echo "data berhasil dihapus";
        } else {
            echo "data tidak berhasil dihapus";
        }

    }

    public function truncate(){
        $truncate = DB::table('users')->truncate();

        if ($truncate) {
            echo "data berhasil dihapus semua";
        } else {
            echo "data tidak berhasil dihapus";
        }
    }

    public function uppercase(Request $request){

    }

    public function munculform(){
        return view('form');
    }

    public function validasiform(Request $request){
        $request->validate([
            'name'=>['required', new Uppercase]
        ]);

        return 'data berhasil divalidasi';
    }

}
