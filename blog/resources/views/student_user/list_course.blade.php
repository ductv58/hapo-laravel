@extends('student_user.index')
@section('content')
<div class="panel panel-default col-md-8 col-md-offset-1" style="padding: 0;margin-top: 1%;">
	<div class="panel-heading">List course</div>
	<div class="panel-body">
		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		    <thead>
		        <tr align="center">
		            <th>ID</th>
		            <th>Name</th>
		            <th>course code</th>
		            <th>point</th>
		            <th>Delete</th>
		        </tr>
		    </thead>
		   <tbody>
		        <?php $stt = 0 ?>
		        @foreach ($courses as $course)
		        <?php $stt = $stt + 1 ?>
		        <tr class="odd gradeX" align="center">
		            <td>{!! $stt !!}</td>
		            <td>{!! $course->subject->name!!}</td>
		            <td>{!! $course->course_code !!}</td>
		            <td>{!! $course->pivot->point!!}</td>
		            <td>
		            	<form action="{{ route('student.course.delete',$course->id) }}" method="POST" accept-charset="utf-8">
		            		{{csrf_field()}}
		            		{{ method_field('DELETE') }}
		            		<button type="submit" style="border: none;background:none;color: #337ab7;">Delete</button> 
		            	</form>
		            </td>
		        </tr>
		        @endforeach
		    </tbody>
		</table>
	</div>
</div>
@endsection()