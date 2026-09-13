<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update employee</title>
</head>
<body>
    <h1>Update  Employee</h1>
    <form action="add-employee" method="post">
        @csrf

        <input type="text" name="name" value="{{$emp->name}}"  placeholder="enter name">
        <br><br>

          <input type="text" name="email"  value="{{$emp->email}}"  placeholder="enter email">
        <br><br>

          <input type="text" name="phone" value="{{$emp->phone}}"   placeholder="enter phone">
        <br><br>

        <button>Update Employee</button>

    </form>
</body>
</html>