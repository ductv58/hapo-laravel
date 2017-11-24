@extends('master')
@section('content')
<div class="panel panel-default col-md-8 col-md-offset-1" style="padding: 0;margin-top: 10%;">
	<div class="panel-heading">Add student</div>
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
		<form action="{{ route('students.store') }}" method="POST">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
			<div class="form-group">
				<label class="col-md-3 control-label">teacher</label>
				<select class="form-control" id="sel1">
				    <option>1</option>
				    <option>2</option>
				    <option>3</option>
				    <option>4</option>
				</select>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">class</label>
				<select class="form-control" id="sel1">
				    <option>1</option>
				    <option>2</option>
				    <option>3</option>
				    <option>4</option>
				</select>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">class</label>
				<select class="form-control" id="sel1">
				    <option>1</option>
				    <option>2</option>
				    <option>3</option>
				    <option>4</option>
				</select>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">max size</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="name" name="maxSize">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">present</label>
				<div class="col-md-9">
					<input class="form-control" type="date" placeholder="name" name="present">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">semester</label>
				<div class="col-md-9">
					<input class="form-control" type="email" placeholder="name" name="semester">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">class code</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="name" name="classCode">
				</div>
			</div>
			<button type="submit" class="btn btn-default">Add</button>
		</form>
	</div>
</div>
@endsection()