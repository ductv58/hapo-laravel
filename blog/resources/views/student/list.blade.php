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
			<form action="" method="get" accept-charset="utf-8">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
			    <thead>
			        <tr align="center">
			            <th>ID</th>
			            <th>Name</th>
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
			            <td>show</td>
			            <td>Delete</td>
			            <td>Edit</td>
			        </tr>
			        @endforeach
			    </tbody>
			</table>
			</form>
		</div>
	</div>
	</div>
	</div>
</body>
</html>