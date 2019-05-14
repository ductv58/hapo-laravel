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
		<form action="{{ route('subject.store') }}" method="POST">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
			<div class="form-group">
				<label class="col-md-3 control-label">subject name</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="name" name="name">
				</div>
			</div>
			<button type="submit" class="btn btn-default">Add</button>
		</form>
	</div>
</div>
@endsection()