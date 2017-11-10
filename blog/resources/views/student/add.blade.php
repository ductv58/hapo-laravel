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
		<div class="panel-heading">Add student</div>
		<div class="panel-body">
			<form action="{{ route('students.store') }}" method="POST">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
				<div class="form-group">
					<label class="col-md-3 control-label">Name</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="name" name="TXTname">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">MSSV</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="name" name="TXTmssv">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">School year</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="name" name="TXTschoolyear">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Class</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="name" name="TXTclass">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Birhday</label>
					<div class="col-md-9">
						<input class="form-control" type="date" placeholder="name" name="TXTbirthday">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">email</label>
					<div class="col-md-9">
						<input class="form-control" type="email" placeholder="name" name="TXTemail">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">phone</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="name" name="TXTphone">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">address</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="name" name="TXTaddress">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">farther</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="name" name="TXTfarthername">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">morther</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="name" name="TXTmorthername">
					</div>
				</div>
				<button type="submit" class="btn btn-default">Add</button>
			</form>
		</div>
	</div>
	</div>
	</div>
</body>
</html>