<div class="container float-right">
<div class="row">
<div class="my-4 col-12">
<h1 class="float-left">Daftar User</h1>
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
<th class="text-center">Tanggal Dibuat</th>
</tr>
</thead>
<tbody>
    
<?php $i = 1; ?>@foreach($user as $user)
<tr>
<td class="text-center">{{$loop->iteration}}</td>
<td class="text-center">{{$user->nama}}</td>
<td class="text-center">{{$user->email}}</td>
<td class="text-center">{{$user->alamat}}</td>
<td class="text-center">{{$user->telepon}}</td>

<td class="text-center">{{$user->created_at}}</td>
</tr>

@endforeach
</tbody>
</table>
</div>
