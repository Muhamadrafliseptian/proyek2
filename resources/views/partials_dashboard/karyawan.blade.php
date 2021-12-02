
<div class="container float-right">
<div class="row">
<div class="my-4 col-12">
<h1 class="float-left">Data Karyawan</h1>

<a class="btn btn-dark float-right mt-2" href="/karyawan/tambah_karyawan" role="button">Tambah Paket</a>
</div>
<div class="col-6">
</button>
</div>
</div>
<div class="col-12">
<table class="table table-stripped">
<thead class="thead-primary">
<tr>
<th class="text-center">No</th>
<th class="text-center">Nama</th>
<th class="text-center">Alamat</th>
<th class="text-center">Email</th>
<th class="text-center">Nomor Telepon</th>
<th class="text-center">Action</th>
</tr>
</thead>
<tbody>
    <?php $i = 1; ?>@foreach($karyawan as $karyawan)
<tr>
<td class="text-center">{{$loop->iteration}}</td>
<td class="text-center">{{$karyawan->nama}}</td>
<td class="text-center">{{$karyawan->email}}</td>
<td class="text-center">{{$karyawan->alamat}}</td>
<td class="text-center">{{$karyawan->telepon}}</td>
<td class="text-center">
    <a href="" class="btn btn-primary">Selesai</a>
<a href="" class="btn btn-danger" onclick="return confirm('yakin?');">Delete</a>
</td>
</tr>

@endforeach
</tbody>
</table>
</div>