@props(['book'])

<div class="card" style="width: 17rem; margin: 10px">
    <img src="{{URL::asset('storage/app/download/qFbkm5dZleQAO5br4WA2s7Y55qM0A08ZS3xZazPU.jpg')}}" class="card-img-top" height="300" width="200" alt="img error">
    <div class="card-body">
        <h5 class="card-title">{{$book->name}}</h5>
        <p class="card-text">{{$book->short_description}}</p>
        <div class="{{auth()->check() ? 'd-flex justify-content-between' : ''}}">
            <a href="{{route('book.show', $book->id)}}" class="btn btn-primary">Show info</a>
            @auth()
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Options
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Update</a></li>
                        <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                </div>
            @endauth
        </div>
    </div>
</div>
