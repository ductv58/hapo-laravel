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
		<div class="panel-heading">show student</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr>
					<td>name</td>
					<td>{!! $data["name"] !!}</td>
				</tr>
				<tr>
					<td>Student code</td>
					<td>{!! $data["student_code"] !!}</td>
				</tr>
				<tr>
					<td>school year</td>
					<td>{!! $data["school_year"] !!}</td>
				</tr>
				<tr>
					<td>birthday</td>
					<td>{!! $data["birthday"] !!}</td>
				</tr>
				<tr>
					<td>email</td>
					<td>{!! $data["email"] !!}</td>
				</tr>
				<tr>
					<td>phone</td>
					<td>{!! $data["phone"] !!}</td>
				</tr>
				<tr>
					<td>address</td>
					<td>{!! $data["address"] !!}</td>
				</tr>
				<tr>
					<td>sex</td>
					<td>{!! $data["sex"] !!}</td>
				</tr>
			</table>
		</div>
	</div>
	</div>
	</div>
</body>
</html>