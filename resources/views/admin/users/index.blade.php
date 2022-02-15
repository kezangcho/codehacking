@extends('layouts.admin')


@section('content')
@if(Session::has('user_created'))
  <p class="bg-danger">{{session('user_created')}}</p>
@endif  
    <h3>Users</h3>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th>Status</th>
            <th>Photo</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>    
       </thead>
       <tbody>
             @foreach($users as $user)
                 <tr>
                     <td>{{$user->id}}</td>
                     <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
                     <td>{{$user->email}}</td>
                     <td>{{$user->password}}</td>
                     <td>{{$user->role->name}}</td>
                     <td>{{$user->is_active==1?'Active':'Not active'}}</td>
                     <td><img height="50" src="{{$user->photo?$user->photo->file:'http://placehold.it/400x400'}}" alt=""></td>
                     <td>{{$user->created_at->diffForHumans()}}</td>
                     <td>{{$user->updated_at->diffForHumans()}}</td>
                 </tr>
              @endforeach
        </tbody>    
      </table>         
             



@stop    