@extends('teacher_user.index')
@section('content')
<div class="panel panel-default col-md-8 col-md-offset-1" style="padding: 0;margin-top: 10%;">
	<div class="panel-heading">Add point</div>
	<div class="panel-body">
		<form action="{{ route('teacher.course.post_add_point',$id) }}" method="POST" accept-charset="utf-8">
			{{csrf_field()}}
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
			        <?php $stt++ ?>
			        <tr class="odd gradeX" align="center">
			            <td>{!! $stt !!}</td>
			            <td>{!! $student->name!!}</td>
			            <td>{!! $student->student_code !!}</td>
			           <td><input type="text" value="{!! $student->pivot->point!!}" name="{{ $student->student_code }}"></td>
			        </tr>
			        @endforeach
			    </tbody>
			</table>
			<button type="submit">Add</button> 
		</form>
		
	</div>
</div>
@endsection()