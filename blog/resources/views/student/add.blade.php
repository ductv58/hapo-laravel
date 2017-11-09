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
	<div class="panel panel-default col-md-4 col-md-offset-2" style="padding: 0;margin-top: 10%;">
		<div class="panel-heading">Add student</div>
		<div class="panel-body">
			<form action="{{ route('students.store') }}" method="POST">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
				<div class="form-group">
					<label>Name</label>
					<input type="text" placeholder="name" name="TXTname">
				</div>
				<div class="form-group">
					<label>School year</label>
					<input type="text" placeholder="name" name="TXTschoolyear">
				</div>
				<div class="form-group">
					<label>Class</label>
					<input type="text" placeholder="name" name="TXTclass">
				</div>
				<div class="form-group">
					<label>Birhday</label>
					<input type="date" placeholder="name" name="TXTbirthday">
				</div>
				<div class="form-group">
					<label>email</label>
					<input type="email" placeholder="name" name="TXTemail">
				</div>
				<div class="form-group">
					<label>phone</label>
					<input type="text" placeholder="name" name="TXTphone">
				</div>
				<div class="form-group">
					<label>address</label>
					<input type="text" placeholder="name" name="TXTaddress">
				</div>
				<div class="form-group">
					<label>farther</label>
					<input type="text" placeholder="name" name="TXTfarthername">
				</div>
				<div class="form-group">
					<label>morther</label>
					<input type="text" placeholder="name" name="TXTmorthername">
				</div>
				<button type="submit" class="btn btn-default">Add</button>
			</form>
		</div>
	</div>
	</div>
	</div>
</body>
</html>