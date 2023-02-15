@extends('layouts.app')
@section('content')


<form 
        id="formAccountSettings" 
        method="POST" 
        action="{{ route('profile.update',auth()->id()) }}" 
        enctype="multipart/form-data"
    >
    @csrf
    <div class="container">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="name" class="form-label">{{ trans('Name')}}</label>
                <input class="form-control" type="text" id="name" name="name" value="{{ auth()->user()->name }}" autofocus="" required>
                <div class="invalid-tooltip">{{ trans('Name is required')}}</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">{{ trans('Email')}}</label>
                <input class="form-control" type="text" id="email" name="email" value="{{ auth()->user()->email }}" placeholder="john.doe@example.com">
                <div class="invalid-tooltip">{{ trans('Email is required')}}</div>
            </div>
            <div class="mt-2 d-flex">
                <button type="submit" class="btn btn-outline-dark me-2">{{ trans('Save changes')}}</button>
                <a href="{{route('welcome')}}" class="btn btn-dark">Cancel</a>
            </div>
        </div>
    </div>
</form>

@endsection
