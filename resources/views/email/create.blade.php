@extends('email.master')
@section('body')
<form action="{{route('store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="" name="name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Subject</label>
      <input type="subject" class="form-control" id="" name="subject">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">description</label>
      <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection