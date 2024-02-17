@extends('email.master')
@section('body')
<div class="card">
    <div class="cart-body">Email Tamplates</div>
    <div class="cart-body">
        <a href="{{route('create')}}">Create</a>
    </div>
    <div class="cart-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($emails as $email)
                    
                
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$email->name}}</td>
                <td>{{$email->subject}}</td>
                <td>
                    <a href="{{route('edit',$email->id)}}">edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection