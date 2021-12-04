<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
<div class="row">
<div class="col-md-12 mt-3">
<h3>Form Edit Admin</h3>
<form action="/admin/update" method="post">
    {{csrf_field()}}
<div class="form-group">
    
<input class="form-control" type="hidden" name="id" id="id" value="{{ $admin->id_admin}}">
<label for="nama">Nama</label>
<input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{ $admin->nama}}" id="nama" autocomplete="off" placeholder="Masukkan Nama Lengkap"> @error('nama')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="form-group">
<label for="email">Email</label>
<input class="form-control @error('email') is-invalid @enderror" type="text" name="email" value="{{ $admin->email}}" id="email" autocomplete="off" placeholder="Masukkan Alamat Email"> @error('email')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="form-group">
<label for="alamat">Alamat</label>
<input class="form-control @error('alamat') is-invalid @enderror" type="text" name="alamat" value="{{ $admin->alamat}}" id="alamat" autocomplete="off" placeholder="Masukkan Alamat"> @error('alamat')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="form-group">
<label for="telepon">Nomor Telepon</label>
<input class="form-control @error('telepon') is-invalid @enderror" type="text" name="telepon" value="{{ $admin->telepon}}" id="telepon" autocomplete="off" placeholder="Masukkan Nomor Telepon"> @error('telepon')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="form-group float-right">
<button class="btn btn-lg btn-danger" type="reset">Reset</button>
<button class="btn btn-lg btn-dark" type="submit">Submit</button>
</div>
</form>
</div>
</div>
</div>

