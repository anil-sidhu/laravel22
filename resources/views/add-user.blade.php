<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add User Form</title>
</head>
<body>
    <form action="/add-user" method="get">
        @csrf
    <input type="text" name="username" placeholder="enter user name">
    <br><br>
    <input type="phone" name="phone" placeholder="enter user phone">
    <br><br>
    <input type="email" name="email" placeholder="enter user email">
    <br><br>
    <button>Add New User</button>

    </form>
</body>
</html>