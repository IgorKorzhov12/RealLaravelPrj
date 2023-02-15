@extends('components.layouts.layout')

@section('content')
    @include('components.navbar.searchbar')
    <div class="m-2 d-flex justify-content-center flex-wrap" id="container_id">
        @foreach($books as $book)
            <x-card :$book  />
        @endforeach
    </div>
@endsection
