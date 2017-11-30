@extends('master')
@section('content')
<div class="panel panel-default col-md-8 col-md-offset-1" style="padding: 0;margin-top: 10%;">
	<div class="panel-heading">show student</div>
	<div class="panel-body">
		<table class="table table-bordered">
			<tr>
				<td>Teacher</td>
				@foreach ($courses as $course)
				<td>{{ $course->teacher->name }}</td>
				@endforeach
				
			</tr>
		</table>
	</div>
</div>
@endsection()
