@extends('layouts.app')

@section('content')

    <div class="text-center pt-2">
        <h1 class="titre ms-0" style="color: #441d0b;">Coffee Shop Menu</h1>
        <p class="mt-4 fs-5 fw-semibold">Our coffee is selected with care. Whether mild, strong, classic or decaffeinated -</p>
        <p class="mt-0 mb-3 fs-5 fw-semibold"> you can decide for yourself which variety suits your taste best. With our coffee, you can fully enjoy every cup of coffee!</p>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success container fs-6 fw-semibold">
            <p>{{ $message }}</p>
        </div>
    @endif  
    @if(Auth::check() && Auth::user()->isAdmin == 1)
        <div class="container ms-auto py-3 px-4">
            <a href="/menu/create" class="btn w-25 py-2 ms-0 ps-0 text-white" style="background-color:  #567189"><i class='bx bx-plus fs-6 fw-bold'></i> <span class="fs-5 fw-bold">Add new dish in the menu </span></a>
        </div>
    @endif
    
        <div class="row row-cols-1 row-cols-md-3 g-4 mx-auto my-4" style="width:90%; background-color:transparent;">
            @foreach ($dishes as $dish)
            <div class="col">
                <div class="card rounded-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                <img src="{{$dish->image_path}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-4 fw-bold">{{$dish->name}}</h5>
                    <p class="fs-5 fw-semibold">{{$dish->Category}}</p>
                    <p class="fs-5 fw-normal text-truncate">{{$dish->description}}</p>
                    <p class="fs-6 fw-semibold mb-3">Price : {{$dish->price}} Euro</p>
                    <a href="{{ url('/menu/'.$dish->id)}}" class="btn btn-outline-dark mb-2">Read more</a>
                </div>
                </div>
            </div>
            @endforeach
        </div>

 

@endsection