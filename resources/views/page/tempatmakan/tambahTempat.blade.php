@extends('layouts.default')
@section('title', 'Tambah Tempat')
@section('content')

<div class="col-lg-12 text-right">
	<a href="{{URL::to('tempatmakan/list')}}" class="btn btn-warning">Kembali</a>
</div>
<div class="col-lg-12">
	<h3 class="text-center">Tambah Tempat Makan</h3>
	<form class="form-horizontal" method="POST">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Nama</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="name" placeholder="Name">
			</div>
		</div>
		<div class="form-group">
			<label for="alamat" class="col-sm-2 control-label">Alamat</label>
			<div class="col-sm-8">
				<textarea class="form-control" rows="2" id="alamat"></textarea>
			</div>
		</div>		
		<div class="form-group">
			<label for="alamat" class="col-sm-2 control-label">Deskripsi</label>
			<div class="col-sm-8">
				<textarea class="form-control" rows="2" id="deskripsi"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="alamat" class="col-sm-2 control-label">Tipe</label>
			<div class="col-sm-4">
				<select class="form-control">
					<option value="1">Rumah Makan</option>
					<option value="2">Restoran</option>
					<option value="3">Minuman</option>
					<option value="4">Makanan</option>
					<option value="5">Cafe</option>
					<option value="6"></option>
					<option value="7"></option>
					<option value="8"></option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="alamat" class="col-sm-2 control-label">Keunggulan</label>
			<div id="divKeunggulan">
				<div class="col-sm-8">
					<input type="text" class="form-control" id="keunggulan" name="keunggulan">
					<a href="#" class="btn btn-primary" id="addKeunggulan"><i class="glyphicon glyphicon-plus"></i></a>
				</div>
				<div class="col-sm-8 col-sm-offset-2"><input type="text" class="form-control" id="keunggulan" name="keunggulan['+i+']"><a href="#" class="btn btn-danger" id="rmKeunggulan"><i class="glyphicon glyphicon-minus"></i></a></div>
				<div class="col-sm-8 col-sm-offset-2"><input type="text" class="form-control" id="keunggulan" name="keunggulan['+i+']"><a href="#" class="btn btn-danger" id="rmKeunggulan"><i class="glyphicon glyphicon-minus"></i></a></div>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Tambah Data</button>
			</div>
		</div>
	</form>
</div>

@stop
@section('css')
<style type="text/css">
#keunggulan{
	display: inline-block;
	width: 88%;
	margin-bottom: 7px;
}
#rmKeunggulan{
	margin-left: 4px;
}
</style>
@endsection
@section('js')
<script type="text/javascript">
$(document).ready(function() {
	var divK= $('#divKeunggulan');
	var i = $('#keunggulan').size()+1;
	$('#addKeunggulan').on('click', function(){
		$('<div class="col-sm-8 col-sm-offset-2"><input type="text" class="form-control" id="keunggulan" name="keunggulan['+i+']"><a href="#" class="btn btn-danger" id="rmKeunggulan"><i class="glyphicon glyphicon-minus"></i></a></div>').appendTo(divK);
		i++;
		return false;
	});

	$('#rmKeunggulan').on('click', function() {
		$(this).parents('div').remove();
		i--;
		return false;
	});
});
</script>
@endsection