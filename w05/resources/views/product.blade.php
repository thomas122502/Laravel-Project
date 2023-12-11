@extends('layout')
@section('title')
    
@endsection
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">product_name</th>
        <th scope="col">product_desc</th>
        <th scope="col">product_price</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dataproduct as $item)
        <tr>
            <td class="table-primary">{{$item->product_name}}</td>
            <td>{{$item->product_desc}}</td>
            <td class="table-primary">{{$item->product_price}}</td>
            <td><a href="{{route('editproduct', $item->id)}}" class="btn btn-warning">Edit</a></td>
            <td><a href="{{route('deleteproduct', $item->id)}}" class="btn btn-danger">Delete</a></td>
          </tr>
        @endforeach
      
    </tbody>
  </table>
@endsection