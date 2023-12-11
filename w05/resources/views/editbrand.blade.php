@extends('layout')
@section('title')
@endsection
@section('content')
    {{-- category form  --}}
    <form style="margin: 1rem 26rem ,text-align:start" action="{{route('edit',$edit->id)}}" >
        @csrf
        <h3>Edit Brand</h3>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Brand</label>
            <input type="name" value="{{$edit->brand_name}}" name="brand_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <button type="submit" class="btn btn-primary" value="บันทึก">Submit</button>
    </form>
    <hr style="border: 1.3px solid #111;">


@endsection
