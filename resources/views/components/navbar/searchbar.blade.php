<nav class="navbar navbar-light bg-white" id="searchBar">
    <div class="container-fluid justify-content-center">
        <form class="d-flex justify-content-between {{auth()->check() ? 'w-100' : ''}}">
            <div class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
            <div>
                @auth()
                    <a class="btn btn-outline-primary" href="{{route('book.create')}}">Create book</a>
                @endauth
            </div>
        </form>
    </div>
</nav>

<script>
    let searchBar = document.getElementById('searchBar');

    window.onscroll = function() {
        let currentScrollPos = window.pageYOffset;
        if (currentScrollPos > 55) {
            searchBar.style.top = '0';
            searchBar.style.position = 'fixed';
            document.getElementById('container_id').style = 'margin-top : 59px !important';
        } else {
            if (window.innerWidth >= 1024) {
                searchBar.style.top = '55px';
                searchBar.style.position = 'absolute';
            }
            searchBar.style.position = 'static';
            document.getElementById('container_id').style = 'margin-top : 0.5rem !important';
        }
    }
</script>

<style>
    #searchBar {
        z-index: 1;
        position: static;
        top: 55px;
        left: 0;
        height: 50px;
        width: 100%;
        display: block;
    }
</style>
