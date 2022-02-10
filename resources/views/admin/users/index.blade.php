@extends('layouts.admin')


@section('content')

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
            <th>Created</th>
            <th>Updated</th>
        </tr>    
       </thead>
       <tbody>
             @foreach($users as $user)
                 <tr>
                     <td>{{$user->id}}</td>
                     <td>{{$user->name}}</td>
                     <td>{{$user->email}}</td>
                     <td>{{$user->password}}</td>
                     <td>{{$user->role->name}}</td>
                     <td>{{$user->is_active==1?'Active':'Not active'}}</td>
                     <td>{{$user->created_at->diffForHumans()}}</td>
                     <td>{{$user->updated_at->diffForHumans()}}</td>
                 </tr>
              @endforeach
        </tbody>    
      </table>         
             



@stop    