@extends('master')
@section('content')
<div class="panel panel-default col-md-8 col-md-offset-1" style="padding: 0;margin-top: 10%;">
	<div class="panel-heading">edit student</div>
	<div class="panel-body">
		<form action="{{ route('subject.update',$data['id']) }}" method="POST">
		{{csrf_field()}}
		{{ method_field('PUT') }}
			<div class="form-group">
				<label class="col-md-3 control-label">Name</label>
				<div class="col-md-9">
					<input class="form-control" type="text" placeholder="name" value="{!! $data['name'] !!}" name="name">
				</div>
			</div>
			<button type="submit" class="btn btn-default">save</button>
			<button type="reset" class="btn btn-default">Reset</button>
		</form>
	</div>
</div>
@endsection()	