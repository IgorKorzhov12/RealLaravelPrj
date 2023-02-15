@extends('components.layouts.layout')

@section('content')
    <div class="d-flex justify-content-center m-5 h-100">
        <form class="w-25" method="post" action="{{route('user.auth')}}">
            @csrf
            @error('email')
            <div class="text-danger mb-1">{{$message}}</div>
            @enderror
            <div class="text mb-1">
                <a href="{{route('user.register')}}">Don't you have an account? Click on me!</a>
            </div>
            <div class="mb-3">
                <label for="InputEmail" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="InputEmail"
                       aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="InputPassword" class="form-label">Password</label>
                <input name="password" type="password" class="form-control"
                       id="InputPassword" required>
            </div>
            <div class="mb-3 form-check">
                <input name="remember" type="checkbox" class="form-check-input"
                       id="Check">
                <label class="form-check-label" for="Check">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
