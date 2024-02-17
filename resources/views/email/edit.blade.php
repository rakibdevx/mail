@extends('email.master')
@section('body')
<form action="{{route('update',$emailTamplate->id)}}" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="" name="name" value="{{$emailTamplate->name}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Subject</label>
      <input type="subject" class="form-control" id="" name="subject" value=" {{$emailTamplate->subject}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">description</label>
      <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$emailTamplate->description}}</textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection