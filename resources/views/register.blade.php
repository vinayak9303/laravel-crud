<html>
<body>
{{$name}}
{{$username}}
{{$email}}
{{$password}}
<form action="\login" method='POST'>
{{ csrf_field() }}
<strong>EMAIL</strong><br>
<input type="text" name="EMAIL" placeholder="Enter your user name" required><br>
<strong>PASSWORD</strong><br>
<input type="text" name="PASSWORD" placeholder="Enter your user name" required><br>
<input type="submit" value="Login">
</body>
</html>