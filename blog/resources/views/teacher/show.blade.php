@extends('master')
@section('content')
<div class="panel panel-default col-md-8 col-md-offset-1" style="padding: 0;margin-top: 10%;">
	<div class="panel-heading">show teacher</div>
	<div class="panel-body">
		<table class="table table-bordered">
			<tr>
				<td>name</td>
				<td>{!! $data["name"] !!}</td>
			</tr>
			<tr>
				<td>teacher code</td>
				<td>{!! $data["teacher_code"] !!}</td>
			</tr>
			<tr>
				<td>password</td>
				<td>{!! $data["password"] !!}</td>
			</tr>
			<tr>
				<td>birthday</td>
				<td>{!! $data["birthday"] !!}</td>
			</tr>
			<tr>
				<td>email</td>
				<td>{!! $data["email"] !!}</td>
			</tr>
			<tr>
				<td>phone</td>
				<td>{!! $data["phone"] !!}</td>
			</tr>
			<tr>
				<td>address</td>
				<td>{!! $data["address"] !!}</td>
			</tr>
			<tr>
				<td>sex</td>
				<td>{!! $data["gender"] !!}</td>
			</tr>
		</table>
	</div>
</div>
@endsection()
