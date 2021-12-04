<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
]);
DB::table('admin')->insert([
'nama' => $request->nama,
'email' => $request->email,
'alamat' => $request->alamat,
'telepon' => $request->telepon,
]);
return redirect('/admin')->with('status', 'Data Paket Berhasil Ditambahkan');
}


 /**
     * Display the specified resource.
     *
     * @param  int  $i  d
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function edit($id)
{
$admin = DB::table('admin')->where('id_admin', $id)->first();
return view('partials_dashboard.edit_admin', compact('admin'));
}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response\
     */
    public function update(Request $request)
{
$this->validate($request, [
    'nama' => 'required',
'email' => 'required',
'alamat' => 'required',
'telepon' => 'required',
]);
DB::table('admin')->where('id_admin', $request->id)->update([
'nama' => $request->nama,
'email' => $request->email,
'alamat' => $request->alamat,
'telepon' => $request->telepon,
]);
return redirect('/admin')->with('status', 'Data siswa Berhasil Diubah');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */






public function destroy($id)
{
DB::table('admin')->where('id_admin', $id)->delete();
return redirect('/admin')->with('status', 'Data Paket Berhasil DiHapus');
}
}


