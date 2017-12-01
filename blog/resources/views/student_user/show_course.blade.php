@extends('student_user.index')
@section('content')
<div class="panel panel-default col-md-8 col-md-offset-1" style="padding: 0;margin-top: 10%;">
	<div class="panel-heading">show student</div>
	<div class="panel-body">
		<table class="table table-bordered">
			<tr>
				<td>Subject</td>
				@foreach ($courses as $course)
				<td>{{ $course->subject->name }}</td>
				@endforeach			
			</tr>
			<tr>
				<td>course_code</td>
				@foreach ($courses as $course)
				<td>{{ $course->course_code }}</td>
				@endforeach
			</tr>
			<tr>
				<td>Teacher</td>
				@foreach ($courses as $course)
				@if (isset($course->teacher->name))
				<td>{{ $course->teacher->name }}</td>
				@else
				<td></td>
				@endif
				@endforeach			
			</tr>
			<tr>
				<td>credits</td>
				@foreach ($courses as $course)
				<td>{{ $course->credits }}</td>
				@endforeach
			</tr>
			<tr>
				<td>max_size</td>
				@foreach ($courses as $course)
				<td>{{ $course->max_size }}</td>
				@endforeach
			</tr>
			<tr>
				<td>semester</td>
				@foreach ($courses as $course)
				<td>{{ $course->semester }}</td>
				@endforeach
			</tr>
		</table>
	</div>
</div>
@endsection()