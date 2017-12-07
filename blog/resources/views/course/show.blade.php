@extends('master')
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

	<div class="panel-body">
		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		    <thead>
		        <tr align="center">
		            <th>ID</th>
		            <th>Name</th>
		            <th>student code</th>
		            <th>point</th>
		        </tr>
		    </thead>
		   <tbody>
		        <?php $stt = 0 ?>
		        @foreach ($students as $student)
		        <?php $stt = $stt + 1 ?>
		        <tr class="odd gradeX" align="center">
		            <td>{!! $stt !!}</td>
		            <td>{!! $student->name!!}</td>
		            <td>{!! $student->student_code !!}</td>
		            <td>{!! $student->pivot->point!!}</td>
		        </tr>
		        @endforeach
		    </tbody>
		</table>
	</div>
</div>
@endsection()
