<html>
<head>UPDATED</head>
<body>
<table>
@foreach($student as $value)
<tr>
    <td>{{ $value->name}}</td>
    <td>{{ $value->enroll}}</td>
    <td>{{ $value->password}}</td>
    </tr>
@endforeach
</table>
</body>
</html>