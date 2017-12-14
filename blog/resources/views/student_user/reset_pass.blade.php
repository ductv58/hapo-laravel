@extends('student_user.index')
@section('content')
<div class="panel panel-default col-md-8 col-md-offset-1" style="padding: 0;margin-top: 10%;">
	<div class="panel-heading">Reset password</div>
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
		<form action="{{ route('student.postReset') }}" method="POST">
		{{ csrf_field() }}
			<div class="form-group">
				<label class="col-md-3 control-label">old password</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="old_password" name="old_password">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">new password</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="new_password" name="new_password">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">confirm password</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="confirm_password" name="confirm_password">
				</div>
			</div>
			<button type="submit" class="btn btn-default">save</button>
		</form>
	</div>
</div>
@endsection()