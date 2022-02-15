@extends('layouts.admin')
@section('content')

<h1> Create Page </h1>
<div class="row">
<form method="POST" action="{{route('admin.posts.store')}}" enctype="multipart/form-data" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group"> 
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control">
</div> 
<div class="form-group"> 
    <label for="category_id">Category:</label>
     <select class="form-control" id="category_id" name="category_id">
         <option value selected="selected">Choose Options</option>
         <option value="1">Individual</option>
         <option value="2">Group</option>
    </select>    
</div> 
<div class="form-group"> 
    <label for="photo_id">Photo:</label>
    <input type="file" name="photo_id">
</div> 
<div class="form-group"> 
    <label for="body">Description</label>
    <textarea name="body" rows="10" class="form-control"></textarea>
</div> 
<div class="form-group">
    <button type="submit" name="create_post" class="btn btn-primary">Create Post</button>
</div>
</form>   
</div>
<div class="row">
@include('includes.form_error');
</div>

@stop