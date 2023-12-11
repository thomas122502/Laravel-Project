@extends('layout')
@section('title')
@endsection
@section('content')


    {{-- product form  --}}
    <form style="margin: 1rem 26rem,text-align:start;" action="{{route('editproduct',$editproduct->id)}}">
        @csrf
        <h3>Edit Product</h3>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">product_name</label>
            <input type="name" name="product_name" value="{{$editproduct->product_name}}" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">product_desc</label>
            <input type="name" name="product_desc" value="{{$editproduct->product_desc}}" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">product_price</label>
            <input type="name" name="product_price" value="{{$editproduct->product_price}}" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary" value="บันทึก">Submit</button>
    </form>
    <hr style="border: 1.3px solid #111;">



@endsection
