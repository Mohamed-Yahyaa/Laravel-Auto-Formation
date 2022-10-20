{{$users}}
@foreach ($users as $user)

<h1>Name : {{$user->Name}}</h1>
<h1>Email :{{$user->Email}}</h1>
    
@endforeach