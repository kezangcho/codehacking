@extends('layouts.admin')

@section('content')
<h3> Create User</h3>
<form method="post" action="{{route('admin.users.store')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <div class="form-group">
     <label for="name">Name</label>
     <input type="text" name="name" class="form-control">
 </div>
 <div class="form-group">
     <label for="email">Email</label>
     <input type="email" name="email" class="form-control">
 </div>
 <div class="form-group">
     <label for="password">Password</label>
     <input type="password" name="password" class="form-control">
 </div>
 <div class="form-group">
     <label for="role_id">Role</label>
     <select class="form-control" id="role_id" name="role_id">
         <option value selected="selected">Choose Options</option>
         <option value="1">Administrator</option>
         <option value="2">Author</option>
         <option value="3">Subscriber</option>
    </select>    
 </div>
 <div class="form-group">
     <label for="status">Status</label>
     <select class="form-control" id="is_active" name="is_active">
         <option value="1">Active</option>
         <option value="2">Not Active</option>
    </select>    
 </div> 
 <div class="form-group">
     <label for="file">Title:</label>
     <input type="file" name="file">
 </div> 
 <div class="form-group">
     <button type="submit" class="btn btn-primary">Create User</button>
 </div>
</form>
@include('includes.form_error');


 @stop