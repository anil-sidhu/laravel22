<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Show Employee</title>
    <style>
        ul{     width:500px;
                display: flex;
                justify-content: space-between;
                list-style: none;
        }

        .heading{
            font-weight:bold
        }
    </style>
</head>
<body>
    <h1>Employee List</h1>
    <form action="/search-employee" method="get">
        <input type="text" name="search-name" placeholder="enter name">
        <button>Search</button>
    </form>
   <ul class="heading">
    <li>Name</li>
    <li>Email</li>
    <li>Phone</li>
    <li>Operation</li>

   </ul>
    @foreach($employees as $emp)
    <ul>
        <li>{{$emp->name}}</li>
        <li>{{$emp->email}}</li>
        <li>{{$emp->phone}}</li>
        <li>
            <a href="delete-employee/{{$emp->id}}">Delete</a>
            <a href="update-employee/{{$emp->id}}">Update</a>

        </li>


    </ul>
    @endforeach

   <div>
    {{$employees->links()}}
   </div>
</body>
</html>
