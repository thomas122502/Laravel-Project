@extends('layout')
@section('title')
    
@endsection
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col" class="table-primary">brand_name</th>
        <th scope="col" class="table-primary">Edit</th>
        <th scope="col" class="table-primary">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($databrand as $item)
        <tr>
            <td>{{$item->brand_name}}</td>
            <td><a href="{{route('edit', $item->id)}}" class="btn btn-warning">Edit</a></td>
            <td><a href="{{route('delete', $item->id)}}" class="btn btn-danger">Delete</a></td>
          </tr>
        @endforeach
      
    </tbody>
  </table>
@endsection