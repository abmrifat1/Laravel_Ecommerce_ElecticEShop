<ul>
    @foreach($users as $user)
    <li>{{$user->name}}</li>
    <li>{{$user->email}}</li>
    @endforeach
</ul>