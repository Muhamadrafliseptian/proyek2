<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class karyawan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
// mengambil data dari table students
$karyawans = DB::table('karyawan') -> get();
// mengirim data students ke view daftar
return view('karyawan', ['karyawan' => $karyawans]);

}

}

