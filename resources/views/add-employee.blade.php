<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add employee</title>
</head>
<body>
    <h1>Add New Employee</h1>
    <form action="add-employee" method="post">
        @csrf

        <input type="text" name="name"  placeholder="enter name">
        <br><br>

          <input type="text" name="email"  placeholder="enter email">
        <br><br>

          <input type="text" name="phone"  placeholder="enter phone">
        <br><br>

        <button>Add new Employee</button>

    </form>
</body>
</html>