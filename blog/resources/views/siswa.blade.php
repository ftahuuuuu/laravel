@extends('master.master')
@section('title', 'Laravel')

@section('content')
<div class="container">
	<div class="mt-5">
		<div class="card-header text-center">
			<h3>Data Siswa</h3>
		</div>
		<div class="card=body">
			<br>
			<a href="{{url('siswa/siswatambah')}}" class="btn btn-primary ">Input Siswa Baru</a>
			<br>
			<br>
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr class=text-center>
					<th scope="col">#</th>	
					<th scope="col">Nama</th>
					<th scope="col">Alamat</th>
					<th scope="col">Opsi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($siswa as $p)
					<tr>
						<th class ="text-center" scope="row">{{ $loop ->iteration }}</th>
						<td>{{ $p->nama }}</td>
						<td class="text-center">{{ $p->alamat }}</td>	
						<td>
							<a href="{{ route('editData', $p->id) }}" class="btn btn-success btn-flat btn-sm">Edit</a>
							<a href="{{ route('delete', $p->id) }}" class="btn btn-danger btn-flat btn-sm">Delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>		
	</div>
	
</div>
@endsection