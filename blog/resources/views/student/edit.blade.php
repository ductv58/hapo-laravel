<!DOCTYPE html>
<html lang="vi">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>hapolaravel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
	<div class="row" style="margin: 0;">
	<div class="panel panel-default col-md-6 col-md-offset-2" style="padding: 0;margin-top: 10%;">
		<div class="panel-heading">edit student</div>
		<div class="panel-body">
			<form action="{{ route('students.update',$data['id']) }}" method="POST">
			{{csrf_field()}}
			{{ method_field('PUT') }}
				<div class="form-group">
					<label class="col-md-3 control-label">Name</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="name" value="{!! $data['name'] !!}" name="TXTname">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">MSSV</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="mssv" value="{!! $data['mssv'] !!}" name="TXTmssv">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">School year</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="school year" value="{!! $data['school_year'] !!}" name="TXTschoolyear">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Class</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="class" value="{!! $data['class'] !!}" name="TXTclass">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Birhday</label>
					<div class="col-md-9">
						<input class="form-control" type="date" value="{!! $data['birthday'] !!}" name="TXTbirthday">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">email</label>
					<div class="col-md-9">
						<input class="form-control" type="email" placeholder="email" value="{!! $data['email'] !!}" name="TXTemail">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">phone</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="phone" value="{!! $data['phone'] !!}" name="TXTphone">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">address</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="address" value="{!! $data['address'] !!}" name="TXTaddress">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">farther</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="farther" value="{!! $data['farther_name'] !!}" name="TXTfarthername">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">morther</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="morther" value="{!! $data['morther_name'] !!}" name="TXTmorthername">
					</div>
				</div>
				<button type="submit" class="btn btn-default">save</button>
				<button type="reset" class="btn btn-default">Reset</button>
			</form>
		</div>
	</div>
	</div>
	</div>
</body>
</html>