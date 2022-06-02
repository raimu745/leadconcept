@extends('layout.master')
@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
      @php $i=1;
       @endphp
      @foreach($contact as $item)
    <tr>
      <td>{{$i++}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->subject}}</td>
      <td>{{$item->message}}</td>
      <td>
          <a href="{{route('edit',['key'=>encrypt($item->id)])}}" class="btn btn-primary">Edit</a>
          <a href="{{route('del',['id'=>encrypt($item->id)])}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</div>





@endsection
