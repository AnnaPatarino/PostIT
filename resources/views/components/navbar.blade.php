

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
    <div class="container-fluid px-5">
        <a class="navbar-brand corsivo fs-3 fw-bold d-flex align-items-center" href="{{ route('home')}}"><i class="fa-solid me-2 text-warning fa-note-sticky fa-2x"></i> {{ $title ?? 'POST.it' }}</a>
        <button class="navbar-toggler border border-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="fa-solid fa-bars text-warning"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('articles.index') }}">{{__('ui.nav-board')}}</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('ui.nav-cat')}}</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                      
                        @foreach ($categories as $category)
                        @if (session('locale') == 'it' || !session('locale') )

                            <li><a class="dropdown-item" href="{{ route('categoryShow', compact('category')) }}">{{ $category->nameIT }}</a></li>
                        @elseif (session('locale') == 'en')
                        <li><a class="dropdown-item" href="{{ route('categoryShow', compact('category')) }}">{{ $category->nameEN }}</a></li>
                        @elseif (session('locale') == 'es')
                        <li><a class="dropdown-item" href="{{ route('categoryShow', compact('category')) }}">{{ $category->nameES}}</a></li>
                        @endif
                        @endforeach
                    </ul>

                </li>
                @guest

                    <li class="nav-item"><a class="nav-link" href="/login">{{__('ui.nav-work')}}</a></li>
                    
                @endguest
                @auth
                    
                
                @if (!Auth::user()->is_revisor)
                    <li class="nav-item"><a class="nav-link" href="{{ route('revisor.lavoro') }}">{{__('ui.nav-work')}}</a></li>
                @endif
                @endauth
            </ul>
            <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
                @guest
                    
                    <li class="nav-item fw-bold"><a class="nav-link text-warning" href="/login">Login</a></li>
                    <li class="nav-item fw-bold"><a class="nav-link text-warning" href="/register">{{__('ui.nav-register')}}</a></li>
                @endguest

                @auth
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold text-warning" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('ui.nav-ciao')}} {{ auth()->user()->name }}</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                        @if(Auth::user()->is_revisor)
                            <li><a class="dropdown-item" href="{{ route('admin.console') }}">Console</a></li>
                        @endif
                        <li><a class="dropdown-item" href="{{ route('articles.create') }}">{{__('ui.home-insert')}}</a></li>
                        @if ( Auth::user()->is_revisor)
                            <li class="d-flex"><a class="dropdown-item" href="{{ route('revisor.index')}}">{{__('ui.nav-rev')}} <span class="badge rounded-pill bg-danger ms-2">{{ App\Models\Article::revisionCount()}}</span></a>
                            </li>
                        @endif
                        <li><hr class="dropdown-divider mt-2"></li>
                        <form action="/logout" method="POST" class="ms-2">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger mt-2 ms-2">Log Out</button>
                        </form>
                    </ul>
                </li>
                @endauth
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                        <li><a class="dropdown-item" href="portfolio-overview.html">Portfolio Overview</a></li>
                        <li><a class="dropdown-item" href="portfolio-item.html">Portfolio Item</a></li>
                    </ul>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold text-warning" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-earth-europe text-warning"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                        <li> <div class="d-flex align-items-center"> <x-_locale lang="it" /> ITALIANO</div></li>
                        <li> <div class="d-flex align-items-center">  <x-_locale lang="en" /> ENGLISH </div></li>
                        <li><div class="d-flex align-items-center"> <x-_locale lang="es" /> ESPANOL</div></li>
                    </ul>
                </li>
            </ul>
            <form action="{{route('postit.search')}}" method="GET" class="d-flex">
                    <input type="search" name="searched" class="form-control me-2" placeholder="{{__('ui.nav-what-search')}}" aria-label="search">
                    <button type="submit" class="btn btn-outline-warning">{{__('ui.nav-search')}}</button>
            </form>

            
        </div>
    </div>
</nav>