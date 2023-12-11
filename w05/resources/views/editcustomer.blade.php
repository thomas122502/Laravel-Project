@extends('layout')
@section('title')
@endsection
@section('content')
    
    <form style="margin: 1rem 26rem,text-align:start;" action="{{route('editcustomer',$editcustomer->id)}}">
        @csrf
        <h3>Insert data customer</h3>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">name</label>
            <input type="name" name="name" value="{{$editcustomer->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">email</label>
            <input type="name" name="email" value="{{$editcustomer->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">phone_no</label>
            <input type="name" name="phone_no" value="{{$editcustomer->phone_no}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">address</label>
            <input type="name" name="address" value="{{$editcustomer->address}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">password</label>
            <input type="name" name="password" value="{{$editcustomer->password}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary" value="บันทึก">Submit</button>
    </form>
    <hr style="border: 1.3px solid #111;">
@endsection
