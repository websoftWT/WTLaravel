@extends('master')
@section('content')
<h2 class="my-3">Add a Catagory</h2>
@if($errors->all())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </div>
@endif
<form action="{{route('catagory.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control">
  </div>
  <div class="form-group">
    <label for="content">Details</label>
    <textarea name="details" id="details" cols="30" rows="10" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-outline-info">Add a Catagory</button>
  </div>
</form>
@endsection

