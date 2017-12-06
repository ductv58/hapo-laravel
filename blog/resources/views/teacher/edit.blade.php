@extends('master')
@section('content')
<div class="panel panel-default col-md-8 col-md-offset-1" style="padding: 0;margin-top: 10%;">
	<div class="panel-heading">Edit teacher</div>
	<div class="panel-body">
		<form action="{{ route('teachers.update',$data['id']) }}" method="POST">
		{{csrf_field()}}
		{{ method_field('PUT') }}
			<div class="form-group">
				<label class="col-md-3 control-label">Name</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="name" value="{!! $data['name'] !!}" name="name">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Teacher code</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="mssv" value="{!! $data['teacher_code'] !!}" name="teacherCode">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Class</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="class" value="{!! $data['class'] !!}" name="class">
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
				<label class="col-md-3 control-label">phone</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="phone" value="{!! $data['phone'] !!}" name="phone">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">address</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="address" value="{!! $data['address'] !!}" name="address">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">sex</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="farther" value="{!! $data['sex'] !!}" name="sex">
				</div>
			</div>
			<button type="submit" class="btn btn-default">save</button>
			<button type="reset" class="btn btn-default">Reset</button>
		</form>
	</div>
</div>
@endsection()	