@extends('layouts.app')
@section('content')
<div class="container w-50 m-auto pt-4">
    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1 container">
            {{ session('status') }}
        </div>
    @endif
    <h1 class="fs-1 fw-bold text-center">Edit Dish</h1>
    <form action="{{url ('/menu/'. $dishes->id)}}" method="POST" enctype="multipart/form-data">
        @method("PUT")
        @csrf
        <input type="hidden" name="id" id="id" value="{{$dishes->id}}">
        <div class="mb-3">
            <label for="formFile" class="form-label">Select an image to upload :</label>
            <input class="form-control" name="dishImage" type="file" id="formFile">
            @error('dishImage')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="dishName" class="form-control" id="name" value="{{$dishes->name}}">
            @error('dishName')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="dishPrice" class="form-control" id="price" value="{{$dishes->price}}">
            @error('dishPrice')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text"  name="dishCategory" class="form-control" id="category" value="{{$dishes->Category}}">
            @error('dishCategory')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control"  name="dishDescription" id="description" rows="3">{{$dishes->description}}</textarea>
            @error('dishDescription')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div> 
        <a href="/menu"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Exit</button></a>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection