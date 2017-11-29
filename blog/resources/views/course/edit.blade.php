@extends('master')
@section('content')
<div class="panel panel-default col-md-8 col-md-offset-1" style="padding: 0;margin-top: 10%;">
	<div class="panel-heading">edit course</div>
	<div class="panel-body">
		<form action="{{ route('course.update',$course['id']) }}" method="POST">
		{{csrf_field()}}
		{{ method_field('PUT') }}
			<div class="form-group">
				<label class="col-md-3 control-label">subject</label>
				<div class="col-md-9">
					<select class="form-control" name="subject">
					    @foreach ($subject as $subject)
							<option @if($course->subject->id == $subject->id) selected @endif value="{{ $subject->id }}">{{ $subject["name"] }}</option>
					    @endforeach
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">credits</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="credits" value="{!! $course['credits'] !!}" name="credits">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">maxSize</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="maxSize" value="{!! $course['max_size'] !!}" name="maxSize">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">present</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="present" value="{!! $course['present'] !!}" name="present">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">semester</label>
				<div class="col-md-9">
					<input class="form-control" type="text" value="{!! $course['semester'] !!}" name="semester">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">courseCode</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="courseCode" value="{!! $course['course_code'] !!}" name="courseCode">
				</div>
			</div>
			<button type="submit" class="btn btn-default">save</button>
			<button type="reset" class="btn btn-default">Reset</button>
		</form>
	</div>
</div>
@endsection()	