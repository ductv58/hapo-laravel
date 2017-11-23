@extends('master')
@section('content')
<div class="panel panel-default col-md-8 col-md-offset-1" style="padding: 0;margin-top: 10%;">
	<div class="panel-heading">Add student</div>
	<div class="panel-body">
		<form action="{{ route('students.store') }}" method="POST">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
			<div class="form-group">
				<label class="col-md-3 control-label">Name</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="name" name="name">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Student code</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="name" name="studentCode">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">School year</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="name" name="schoolYear">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Birhday</label>
				<div class="col-md-9">
					<input class="form-control" type="date" placeholder="name" name="birthday">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">email</label>
				<div class="col-md-9">
					<input class="form-control" type="email" placeholder="name" name="email">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">phone</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="name" name="phone">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">address</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="name" name="address">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">sex</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="name" name="sex">
				</div>
			</div>
			<button type="submit" class="btn btn-default">Add</button>
		</form>
	</div>
</div>
@endsection()