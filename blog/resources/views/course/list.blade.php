@extends('master')
@section('content')
<div class="btn-add">
	<a href="{{ route('course.create') }}"><button type="button" class="btn btn-default">Add</button></a>
</div>
<div class="panel panel-default col-md-8 col-md-offset-1" style="padding: 0;margin-top: 1%;">
	<div class="panel-heading">List course</div>
	<div class="panel-body">
		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		    <thead>
		        <tr align="center">
		            <th>ID</th>
		            <th>Name</th>
		            <th>course code</th>
		            <th>show</th>
		            <th>Delete</th>
		            <th>Edit</th>
		        </tr>
		    </thead>
		   <tbody>
		        <?php $stt = 0 ?>
		        @foreach ($data as $item)
		        <?php $stt = $stt + 1 ?>
		        <tr class="odd gradeX" align="center">
		            <td>{!! $stt !!}</td>
		            <td>{!! $item->subject->name !!}</td>
		            <td>{!! $item["course_code"] !!}</td>
		            <td><a href="{{ route('course.show',$item['id']) }}">show</a></td>
		            <td>
		            	<form action="{{ route('course.destroy',$item['id']) }}" method="POST" accept-charset="utf-8" onsubmit=" return deleteStudent()">
		            		{{csrf_field()}}
		            		{{ method_field('DELETE') }}
		            		<button type="submit" style="border: none;background:none;color: #337ab7;">Delete</button> 
		            	</form>
		            </td>
		            <td><a href="{{ route('course.edit',$item['id']) }}">Edit</a></td>
		        </tr>
		        @endforeach
		    </tbody>
		</table>
	</div>
</div>
@endsection()