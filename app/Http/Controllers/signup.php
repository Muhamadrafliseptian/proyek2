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
$users = DB::table('user') -> get();
// mengirim data students ke view daftar
return view('extends_user.user', ['user' => $users]);

}





 public function tambah() 
{
    // memanggil view create
    return view('/partials/signup');
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
'email' => $request->email,
'alamat' => $request->alamat,
'telepon' => $request->telepon,
'password' => $request->password,
'created_at' => $request->created_at
]);
return redirect('/signup');
}
}
