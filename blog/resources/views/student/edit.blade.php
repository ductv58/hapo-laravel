@extends('master')
@section('content')
<div class="panel panel-default col-md-8 col-md-offset-1" style="padding: 0;margin-top: 10%;">
	<div class="panel-heading">edit student</div>
	<div class="panel-body">
		<form action="{{ route('students.update',$data['id']) }}" method="POST">
		{{csrf_field()}}
		{{ method_field('PUT') }}
			<div class="form-group">
				<label class="col-md-3 control-label">Name</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="name" value="{!! $data['name'] !!}" name="name">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Student code</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="student code" value="{!! $data['student_code'] !!}" name="studentCode">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">School year</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="school year" value="{!! $data['school_year'] !!}" name="schoolyear">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Birhday</label>
				<div class="col-md-9">
					<input class="form-control" type="date" value="{!! $data['birthday'] !!}" name="birthday">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">email</label>
				<div class="col-md-9">
					<input class="form-control" type="email" placeholder="email" value="{!! $data['email'] !!}" name="email">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">password</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="password" value="{!! $data['password'] !!}" name="password">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">phone</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="phone" value="{!! $data['phone'] !!}" name="phone">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">address</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="address" value="{!! $data['address'] !!}" name="TXTaddress">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">gender</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="sex" value="{!! $data['gender'] !!}" name="sex">
				</div>
			</div>
			<button type="submit" class="btn btn-default">save</button>
			<button type="reset" class="btn btn-default">Reset</button>
		</form>
	</div>
</div>
@endsection()	