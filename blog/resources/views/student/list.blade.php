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
	<div class="panel panel-default col-md-5 col-md-offset-2" style="padding: 0;margin-top: 10%;">
		<div class="panel-heading">List student</div>
		<div class="panel-body">
			<!-- <form action="" method="get" accept-charset="utf-8"> -->
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
			    <thead>
			        <tr align="center">
			            <th>ID</th>
			            <th>Name</th>
			            <th>MSSV</th>
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
			            <td>{!! $item["mssv"] !!}</td>
			            <td><a href="{{ route('students.show',$item['id']) }}">show</a></td>
			            <!-- <td><a onclick="return cfdelete('delete this student')" href="{{ route('students.destroy',$item['id']) }}"> Delete</a></td> -->
			            <td>
			            	<form action="{{ route('students.destroy',$item['id']) }}" method="POST" accept-charset="utf-8">
			            		{{csrf_field()}}
			            		{{ method_field('DELETE') }}
			            		<button type="submit" onclick="return cfdelete('delete this student')" style="border: none;background:none;color: #337ab7;">Delete</button> 
			            	</form>
			            </td>
			            <td><a href="{{ route('students.edit',$item['id']) }}">Edit</a></td>
			        </tr>
			        @endforeach
			    </tbody>
			</table>
			<!-- </form> -->
		</div>
	</div>
	</div>
	</div>
</body>
</html>