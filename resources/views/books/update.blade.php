@extends('components.layouts.layout')

@section('content')
    <div class="d-flex justify-content-center m-5 h-100">
        <form class="w-25" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="BookName" class="form-label">Book name</label>
                <input value="{{old('name')}}" name="name" type="text" class="form-control"
                       id="BookName" required>
                @error('name')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <textarea name="short_description" class="form-control" placeholder="Leave a comment here" id="short_description" style="height: 100px">{{old('short_description')}}</textarea>
                <label for="short_description">Short description</label>
                @error('short_description')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <textarea name="description" class="form-control" placeholder="Leave a comment here" id="description" style="height: 100px">{{old('description')}}</textarea>
                <label for="description">Description</label>
                @error('description')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input value="{{old('quantity')}}" name="quantity" type="number" class="form-control"
                       id="BookName" min="0" max="1000" required>
                @error('quantity')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="genres">Select your genres</label>
                <select name="genres[]" class="form-select" id="genres" aria-label="Floating label select example"
                multiple required>
                    @foreach($allGenres as $genreInDB)
                        <option value="{{$genreInDB->name}}"
                        @if(old('genres'))
                            @foreach(old('genres') as $genre)
                                {{$genreInDB->name == $genre ? 'selected' : ''}}
                            @endforeach
                        @endif
                        >{{$genreInDB->name}}</option>
                    @endforeach
                </select>
                @error('genres')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Choose your images</label>
                <input class="form-control" type="file" id="images" name="images[]" multiple
                value="
                @if(old('images'))
                    @foreach(old('images') as $image)
                        {{$image}}
                    @endforeach
                    @endif">
                @error('images')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create book</button>
        </form>
    </div>
@endsection
