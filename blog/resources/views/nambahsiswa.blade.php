@extends('master.master')
@section('title', 'Laravel')

@section('content')
<div class="container">
	<div class="mt-5">
		<div class="card-header text-center">
			Tambah Siswa
		</div>
		<div class="card=body">
			<br>
			
			<br>
			<br>
			<form action="/siswa/store" method="post">
				@csrf
			  <div class="form-group">
			    <label>Nama</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
				@error('nama')
					<div class="text-danger">{{ $message }}</div>
				@enderror
			  </div>
			  <div class="form-group">
			    <label>No Telepon</label>
				<input type="number" class="form-control" placeholder="Masukkan Nomor Telepon" name="notelp">
				@error('notelp')
				<div class="text-danger">{{ $message }}</div>
			@enderror
			  </div>
			  <div class="form-group">
			    <label>Alamat</label>
				<input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat">
				@error('alamat')
				<div class="text-danger">{{ $message }}</div>
			@enderror
			  </div>
			  <input type="submit" value="Simpan" class="btn btn-primary">
			  <a href="{{url('/siswa')}}" class="btn btn-primary ">Kembali</a>
			  </form>
		</div>		
	</div>
	
</div>
@endsection