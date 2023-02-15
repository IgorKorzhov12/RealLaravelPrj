@extends('components.layouts.layout')

@section('content')
    <div class="d-flex justify-content-center m-5 h-100">
        <form class="w-25" method="post" action="{{route('user.create')}}">
            @csrf
            <div class="mb-3">
                <label for="InputName" class="form-label">Your Name</label>
                <input value="{{old('name')}}" name="name" type="text" class="form-control"
                       aria-describedby="emailHelp" id="InputName" required>
                @error('name')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="InputEmail" class="form-label">Email address</label>
                <input value="{{old('email')}}" name="email" type="email" class="form-control" id="InputEmail"
                       aria-describedby="emailHelp" required>
                @error('email')
                <div class="text-danger">{{$message}}</div>
                @enderror
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="InputPassword" class="form-label">Password</label>
                <input value="{{old('password')}}" name="password" type="password" class="form-control"
                       id="InputPassword" required>
                @error('password')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="InputConfirmPassword" class="form-label">Confirm Password</label>
                <input value="{{old('password_confirmation')}}" name="password_confirmation" type="password" class="form-control"
                       id="InputConfirmPassword" required>
            </div>
            <div class="mb-3 form-check">
                <input name="remember" value="{{old('remember')}}" type="checkbox" class="form-check-input"
                       id="Check">
                <label class="form-check-label" for="Check">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
