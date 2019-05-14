<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Activate user</title>
</head>
<body>
	<h3>activate teacher</h3>
	<h5>click <a href="{{ route('teacher.activate',$teacher->email_token) }}">here</a> to activate</h5>
</body>
</html>