@extends('layouts.app')
@section('content')
    <div class="mt-3">
        <p class="text-center fs-3 fw-semibold my-3">Category : {{$dishes->Category}}</p>
        <p class="fw-bold fs-5 text-center">Dish Name : {{$dishes->name}}</p>
        <p class="text-center fs-5 my-3">Price : {{$dishes->price}} euro</p>
    </div>
    <div class="container">
        <img class="w-50 h-50 rounded-2 shadow-lg mb-4 mx-auto d-flex align-items-center justify-content-center" src="{{asset($dishes->image_path)}}" alt="">
    </div>
    <div class="container">
        <p class="text-start fs-5 fw-semibold mx-5 my-3">{{$dishes->description}}</p>
    </div>
    @if(Auth::check())
        <div class="ms-auto py-3 px-4 text-center d-flex justify-content-center">
            <div>
                <a href="{{ url('/menu/'.$dishes->id. '/edit')}}" class="btn btn-success me-3 px-4 fw-bold"> Edit</a>
            </div>
            <div>
                <form action="{{ url('/menu'. '/'.$dishes->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger me-3 px-3 fw-bold"> Delete</a>
                </form>
            </div>
            <div>
                <a href="/menu" class="btn btn-dark px-4 fw-bold"> Return</a>
            </div>
            
        </div>
    @endif

@endsection