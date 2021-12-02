
<div class="container float-right">
<div class="row">
<div class="my-4 col-12">
<h1 class="float-left">Data Admin</h1>

<a class="btn btn-dark float-right mt-2" href="/admin/tambah_admin" role="button">Tambah Admin</a>
</div>
<div class="col-6">
@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ session('status') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif
</div>
<div class="col-12">
<table class="table table-stripped">
<thead class="thead-primary">
<tr>
<th class="text-center">No</th>
<th class="text-center">Nama</th>
<th class="text-center">Email</th>
<th class="text-center">Alamat</th>
<th class="text-center">Nomor Telepon</th>
<th class="text-center">Action</th>
</tr>
</thead>
<tbody>
    <?php $i = 1; ?>@foreach($admin as $admin)
<tr>
<td class="text-center">{{$loop->iteration}}</td>
<td class="text-center">{{$admin->nama}}</td>
<td class="text-center">{{$admin->email}}</td>
<td class="text-center">{{$admin->alamat}}</td>
<td class="text-center">{{$admin->telepon}}</td>
<td class="text-center">
    <a href="/admin/edit/{{ $admin->id_admin }}" class="btn  btn-primary">Edit</a>
<a href="/admin/destroy/{{$admin->id_admin}}" class="btn btn-danger" onclick="return confirm('yakin?');">Delete</a>
</td>
</tr>

@endforeach
</tbody>
</table>
</div>