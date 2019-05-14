@extends('master')
@section('content')
<div class="panel panel-default col-md-8 col-md-offset-1" style="padding: 0;margin-top: 10%;">
	<div class="panel-heading">Add teacher</div>
	<div class="panel-body">
		@if(count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		            <li>{!! $error !!}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		<form action="{{ route('teachers.store') }}" method="POST">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
			<div class="form-group">
				<label class="col-md-3 control-label">Name</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="name" name="name">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Teacher code</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="teacher code" name="teacherCode">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Birhday</label>
				<div class="col-md-9">
					<input class="form-control" type="date" placeholder="birthday" name="birthday">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">email</label>
				<div class="col-md-9">
					<input class="form-control" type="email" placeholder="email" name="email">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">password</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="password" name="password">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">phone</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="phone" name="phone">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">address</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="address" name="address">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">sex</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="sex" name="sex">
				</div>
			</div>
			<button type="submit" class="btn btn-default">Add</button>
		</form>
	</div>
</div>
@endsection()