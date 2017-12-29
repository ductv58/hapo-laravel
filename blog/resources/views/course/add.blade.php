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
		<form action="{{ route('course.store') }}" method="POST">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
			<div class="form-group">
				<label class="col-md-3 control-label">subject</label>
				<div class="col-md-9">
					<select class="form-control" name="subject">
					    <option value="0">select subject</option>
					    @foreach ($subject as $subject)
							<option value="{{ $subject['id'] }}">{{ $subject["name"] }}</option>
					    @endforeach
					</select>
				</div>
			</div> 
			<div class="form-group">
				<label class="col-md-3 control-label">credits</label>
				<div class="col-md-9">
					<select class="form-control" name="credits">
					    <option value="1">1</option>
					    <option value="2">2</option>
					    <option value="3">3</option>
					    <option value="4">4</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">max size</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="max_size" name="max_size">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">semester</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="semester" name="semester">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">course code</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="course_code" name="course_code">
				</div>
			</div>
			<button type="submit" class="btn btn-default">Add</button>
		</form>
	</div>
</div>
@endsection()