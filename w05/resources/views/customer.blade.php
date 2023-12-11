@extends('layout')
@section('title')
    
@endsection
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">phone_no</th>
        <th scope="col">address</th>
        <th scope="col">password</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($datacustomer as $item)
        <tr>
            <td class="table-primary">{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td class="table-primary">{{$item->phone_no}}</td>
            <td>{{$item->address}}</td>
            <td class="table-primary">{{$item->password}}</td>
            <td><a href="{{route('editcustomer',$item->id)}}" class="btn btn-warning">Edit</a></td>
            <td><a href="{{route('deletecustomer',$item->id)}}" class="btn btn-danger">Delete</a></td>
          </tr>
        @endforeach
      
    </tbody>
  </table>
@endsection