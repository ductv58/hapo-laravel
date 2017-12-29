@extends('master')
@section('content')
@if(session()->has('success'))
    <div class="alert alert-success">
        <p>{{session()->get('success')}}</p>
    </div>
@endif
<div class="btn-add">
	<a href="{{ route('students.create') }}"><button type="button" class="btn btn-default">Add</button></a>
</div>
<div class="panel panel-default col-md-8 col-md-offset-1" style="padding: 0;margin-top: 1%;">
	<div class="panel-heading">List student</div>
	<div class="panel-body">
		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		    <thead>
		        <tr align="center">
		            <th>ID</th>
		            <th>Name</th>
		            <th>Student code</th>
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
		            <td>{!! $item["name"] !!}</td>
		            <td>{!! $item["student_code"] !!}</td>
		            <td><a href="{{ route('students.show',$item['id']) }}">show</a></td>
		            <td>
		            	<form action="{{ route('students.destroy',$item['id']) }}" method="POST" accept-charset="utf-8" onsubmit=" return deleteStudent()">
		            		{{csrf_field()}}
		            		{{ method_field('DELETE') }}
		            		<button type="submit" style="border: none;background:none;color: #337ab7;">Delete</button> 
		            	</form>
		            </td>
		            <td><a href="{{ route('students.edit',$item['id']) }}">Edit</a></td>
		        </tr>
		        @endforeach
		    </tbody>
		</table>
	</div>
</div>
@endsection()