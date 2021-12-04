<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class signup extends Controller
{
    //@return \Illuminate\Http\Response
    public function index()
{
// mengambil data dari table students
$admins = DB::table('admin') -> get();
// mengirim data students ke view daftar
return view('extends_admin.admin', ['admin' => $admins]);

}





 public function tambah() 
{
    // memanggil view create
    return view('/partials_dashboard/tambah_admin');
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
// untuk validasi form
$this->validate($request, [
'nama' => 'required',
'email' => 'required',
'alamat' => 'required',
'telepon' => 'required',
'password' => 'required',

'created_at' => 'required'
]);
DB::table('user')->insert([
'nama' => $request->nama,
'alamat' => $request->email,
'telepon' => $request->telepon,
'email' => $request->email,
'password' => $request->password,
'created_at' => $request->created_at
]);
return redirect('/signup')->with('status', 'Data Paket Berhasil Ditambahkan');
}
}
