<html>
<head><h1> show data</h1></head>
<body>
<center>
    
    <table>
    <tr>
    <td>Name</td>
    <td>Enroll</td>
    <td>Password</td>
    <td>Action</td>
    </tr>
    @foreach($data as $value)
    <tr>
    <td>{{ $value->name}}</td>
    <td>{{ $value->enroll}}</td>
    <td>{{ $value->password}}</td>
    <td><a href="\edit"><button>EDIT</button></a>&nbsp;<a href="\delete"><button>DELETE</button></a></td>
    </tr>
    @endforeach
    </table>
    </center>
    </body>
    </html>


