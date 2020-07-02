<html>
<body>
{{$enroll}}
<h1>hello vianyak</h1>
<form action="/register" method='POST'>
{{ csrf_field() }}
<strong>NAME</strong><br>
<input type="text" name="NAME" placeholder="Enter your user name" required><br>
<strong>USERNAME</strong><br>
<input type="text" name="USERNAME" placeholder="Enter your user name" required><br>
<strong>EMAIL</strong><br>
<input type="text" name="EMAIL" placeholder="Enter your user name" required><br>
<strong>PASSWORD</strong><br>
 <input type="password" name="PASSWORD" placeholder="Enter your password" required><br>
<input type="submit" value="Login">
</form>
</body>
</html>
