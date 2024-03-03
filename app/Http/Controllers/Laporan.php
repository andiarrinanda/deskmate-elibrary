<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Laporan extends Controller
{
    public function index(){
        $users = DB::table('users')->paginate(10);
        return view('report',['users' => $users]);
    }
    public function store(Request $request)
{

	$this->validate($request,[
		'name' => 'required',
		'email' => 'required',
		'phone' => 'required',
	]);
	// insert data ke table 
	DB::table('users')->insert([
		'name' => $request->name,
		'email' => $request->email,
		'phone' => $request->p_number,
	]);
	return redirect('/report');
}

}