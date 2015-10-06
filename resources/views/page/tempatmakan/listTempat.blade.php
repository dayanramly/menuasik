@extends('layouts.default')
@section('title', 'List Admin')
@section('content')
<div class="col-lg-12">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<th>Id</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Deskripsi</th>
				<th>Tipe</th>
				<th>Keunggulan</th>
				<th>Menu</th>
				<th>Foto</th>
				<th>Kontak</th>
				<th>Socmed</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach ($tempatmakan as $tempat)
				<tr>
					<td>{{{$tempat->id}}}</td>
					<td>{{{$tempat->nama}}}</td>
					<td>{{{$tempat->alamat}}}</td>
					<td>{{{$tempat->deskripsi}}}</td>
					@if($tempat->tipe==1)
					<td>Rumah Makan</td>
					@elseif($tempat->tipe==2)
					<td>Kafe</td>
					@elseif($tempat->tipe==3)
					<td>Resto</td>
					@elseif($tempat->tipe==4)
					<td>Kaki Lima</td>
					@elseif($tempat->tipe==5)
					<td>Outlet</td>
					@elseif($tempat->tipe==6)
					<td>Minuman</td>
					@elseif($tempat->tipe==7)
					<td>Camilan</td>
					@else($tempat->tipe==8)
					<td>Oleh-oleh</td>
					@endif
					<td>{{{$tempat->keunggulan}}}</td>
					<td>{{{$tempat->menu}}}</td>
					<td>{{{$tempat->foto}}}</td>
					<td>{{{$tempat->kontak}}}</td>
					<td>{{{$tempat->socmed}}}</td>
					<td>
						<a href="#" class="btn btn-primary">Edit</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop