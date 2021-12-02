<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
// mengambil data dari table students
$users = DB::table('user') -> get();
// mengirim data students ke view daftar
return view('user', ['user' => $users]);
}
}
