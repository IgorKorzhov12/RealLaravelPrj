@extends('components.layouts.layout')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style=" position: absolute; min-width: 100%; min-height: 80%">
        <form method="post" action="{{route('verification.send')}}">
            @csrf
            <button @disabled(session('message') ?? false) type="submit" class="btn btn-link btn-lg">
                Your email is not verifyed.
                <br>Click on me to send letter on your email!
            </button>
                <h5 class="text-success text-center">
                    {{session('message') ?? null}}
                </h5>
        </form>
    </div>
@endsection
