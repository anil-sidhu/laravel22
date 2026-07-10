<h1>Hello Users</h1>
<h2>{{printName()}}</h2>

<h3>{{--$users[2]--}}</h3>

@if($users[0]=='anil')
<h3>Weclome admin</h3>
@elseif($users[0]=='sidhu')
<h3>Welcome Manager</h3>
@else
<h3>Welcome User</h3>
@endif


@foreach($users as $user)
<h4>{{$user}}</h4>
@endforeach

@for($i=0;$i<10;$i++)
<p>Value is : {{$i}}</p>
@endfor

@php

function printName(){
    return 'Hello Anil sidhu';
}
@endphp