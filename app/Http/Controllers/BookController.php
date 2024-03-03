<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function search(Request $request){
        // menangkap data pencarian
        $cari = $request->cari;
 
        // mengambil data dari table pegawai sesuai pencarian data
        $search = DB::table('booksection')
        ->where('title','like',"%".$cari."%")
        ->paginate();
 
        // mengirim data pegawai ke view index
        return view('bookSearch',['cari' => $search]);
 
    }
}
