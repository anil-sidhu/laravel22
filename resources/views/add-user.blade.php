<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add User Form</title>
</head>
<body>
    <!-- @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li style="color:red" >{{$error}}</li>
        @endforeach
    </ul>
    @endif -->
    <form action="/add-user" method="post">
        @csrf
    <input type="text" name="username" value="{{old('username')}}" placeholder="enter user name">
    @error("username")
     <span style="color:red" >{{$message}}</span>
    @enderror
    <br><br>
    <input type="phone" value="{{old('phone')}}" name="phone" placeholder="enter user phone">
      @error("phone")
     <span style="color:red" >{{$message}}</span>
    @enderror
    <br><br>
    <input type="email" value="{{old('email')}}" name="email" placeholder="enter user email">
    <br><br>
    <input type="date" value="{{old('dob')}}" name="dob">
    <br><br>
    <label for="">Gender</label>
    <br>
    <input type="radio" name="gender" {{old('gender')=="male"?'checked':''}} value="male" ><span>Male</span>
    <input type="radio" name="gender" {{old('gender')=="female"?'checked':''}} value="female"><span>Female</span>
      @error("gender")
     <span style="color:red" >{{$message}}</span>
    @enderror

    <br><br>

        <label for="">Skills</label>
    <br>
    <input type="checkbox" name="skills[]" {{ in_array("laravel", old('skills',[]))?'checked' :''}} value="laravel"  ><span>Laravel</span>
    <input type="checkbox" name="skills[]" {{ in_array("react", old('skills',[]))?'checked' :''}} value="react"><span>React</span>
    <input type="checkbox" name="skills[]" {{ in_array("angular", old('skills',[]))?'checked' :''}} value="angular"><span>Angular</span>

    <br><br>
    <select name="" id="">
        <option value="">Select City</option>
        <option value="noida">Noida </option>
        <option value="delhi">Delhi</option>
    </select>
<br><br>
<input type="range" name="age"value="{{old('age')}}"  min="18" max="100" >
<br><br>
<textarea name="bio" id="">{{old('bio')}}</textarea>
<br><br>
    <button>Add New User</button>

    </form>
</body>
</html>