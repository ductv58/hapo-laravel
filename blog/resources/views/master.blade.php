<!DOCTYPE html>
<html lang="vi">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>hapolaravel</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Hapolaravel</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="#">Home</a></li>
		    </ul>
		    <!-- <ul class="nav navbar-nav navbar-right">

		    </ul> -->
		</div>
	</nav>
	<div class="container-fluid">
	<div class="row" style="margin: 0;">
	<div class="col-md-2" style="height: 400px;">
		<div class="list-group">
		  	<a href="#" class="list-group-item disabled">Dashboard</a>
		  	<a href="{{ route('students.index') }}" class="list-group-item">Student</a>
		  	<a href="{{ route('teachers.index') }}" class="list-group-item">Teacher</a>
		  	<a href="#" class="list-group-item">Class</a>
		</div>
	</div>
	<div class="col-md-10">
		<div class="row">
			@yield('content')
		</div>
	</div>
	</div>
	</div>
	<script type="text/javascript">
		function deleteStudent (){
			return confirm("delete this student?.");	    
		}
	</script>
</body>
</html>