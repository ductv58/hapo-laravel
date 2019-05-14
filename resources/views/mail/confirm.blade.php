<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Activate user</title>
</head>
<body>
	<h3>activate student</h3>
	<h5>click <a href="{{ route('student.activate',$student->email_token) }}">here</a> to activate</h5>
</body>
</html>