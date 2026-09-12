<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Show Employee</title>
</head>
<body>
    <h1>Employee List</h1>
   
    @foreach($employees as $emp)
    <ul>
        <li>{{$emp->name}}</li>
        <li>{{$emp->email}}</li>
        <li>{{$emp->phone}}</li>

    </ul>
    @endforeach
</body>
</html>
