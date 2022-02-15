@extends('layouts.admin')

@section('content')
<div class="row">
<div class="col-sm-3">
    <img src="{{$user->photo?$user->photo->file:'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
</div>
<div class="col-sm-9">
<h3> Edit User</h3>
<form method="PATCH" action="{{route('admin.users.update',$user->id)}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <div class="form-group">
     <label for="name">Name</label>
     <input type="text" name="name" class="form-control" value="{{$user->name}}">
 </div>
 <div class="form-group">
     <label for="email">Email</label>
     <input type="email" name="email" class="form-control" value="{{$user->email}}">
 </div>
 <div class="form-group">
     <label for="password">Password</label>
     <input type="password" name="password" class="form-control" value="{{$user->password}}">
 </div>
 <div class="form-group">
     <label for="role_id">Role</label>
     <select class="form-control" id="role_id" name="role_id">
         <option value selected="selected">{{$user->role->name}}</option>
    </select>    
 </div>
 <div class="form-group">
     <label for="status">Status</label>
     <select class="form-control" id="is_active" name="is_active">
         <option value>{{$user->is_active}}</option>
    </select>    
 </div> 
 <div class="form-group">
     <label for="photo_id">Title:</label>
     <input type="file" name="photo_id">
 </div> 
 <div class="form-group">
     <button type="submit" class="btn btn-primary col-sm-6" >Update User</button>
 </div>
</form>
<form method="DELETE" action="{{route('admin.users.destroy',$user->id)}}">

<div class="form-group">
    <button type="submit" name="delete_user" class="btn btn-danger col-sm-6">Delete User</button>
</div>    
</div>
</div>
<div class="row">
@include('includes.form_error');
</div>

 @stop