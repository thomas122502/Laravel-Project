@extends('layout')
@section('title')
@endsection
@section('content')
    {{-- category form  --}}
    <form style="margin: 1rem 26rem ,text-align:start" action="/brand" method="POST">
        @csrf
        <h3>Insert Brand</h3>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Brand</label>
            <input type="name" name="brand_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <button type="submit" class="btn btn-primary" value="บันทึก">Submit</button>
    </form>
    <hr style="border: 1.3px solid #111;">


    {{-- product form  --}}
    <form style="margin: 1rem 26rem,text-align:start;" action="/product" method="POST">
        @csrf
        <h3>Insert Product</h3>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">product_name</label>
            <input type="name" name="product_name" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">product_desc</label>
            <input type="name" name="product_desc" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">product_price</label>
            <input type="name" name="product_price" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary" value="บันทึก">Submit</button>
    </form>
    <hr style="border: 1.3px solid #111;">


    {{-- customers form  --}}
    <form style="margin: 1rem 26rem,text-align:start;" action="/customer" method="POST">
        @csrf
        <h3>Insert data customer</h3>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">name</label>
            <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">email</label>
            <input type="name" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">phone_no</label>
            <input type="name" name="phone_no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">address</label>
            <input type="name" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">password</label>
            <input type="name" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary" value="บันทึก">Submit</button>
    </form>
    <hr style="border: 1.3px solid #111;">
@endsection
