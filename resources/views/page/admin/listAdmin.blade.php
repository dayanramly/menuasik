@extends('layouts.default')
@section('title', 'List Admin')
@section('content')
<div class="col-lg-10 col-lg-offset-1">
	<table class="table">
		<thead>
			<th>Username</th>
			<th>Full Name</th>
			<th>Group Id</th>
			<th>Action</th>
		</thead>
		<tbody>
			@foreach ($user as $userList)
			<tr>
				<td>{{{$userList->uname}}}</td>
				<td>{{{$userList->name}}}</td>
				@if($userList->group_id==1)
				<td>Admin</td>
				@else
				<td>Public User</td>
				@endif
				<td>
					<a href="#" class="btn btn-primary">Edit</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop