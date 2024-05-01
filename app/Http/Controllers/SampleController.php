<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller {
    public function index( Request $request ) {
        $records = DB::connection('mysql')->select("select * from users"); 
        $name = $records[0]->name;

        // $insertResult = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'111@','A','pass1')");
        // $insertResult = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'222@','B','pass2')");
        //$insertResult = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'333@','C','pass3')");



        $deleteResult = DB::connection("mysql")->delete("delete from users where name = 'B'");
        dd($deleteResult);

        return view("sample/index" , []);
    }
}