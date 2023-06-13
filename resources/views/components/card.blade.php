<div class="col-lg-4 my-5">
    @php
        $random = rand(1, 8);
    @endphp

    <div class="card h-100 postit border-0" 
    @if ($random == 1)
    data-color="blue" 
    @elseif ($random == 2)
    data-color="green" 
    @elseif ($random == 3)
    data-color="brown" 
    @elseif ($random == 4)
    data-color="purple" 
    @elseif ($random == 5)
    data-color="orange" 
    @else
    data-color="yellow" 
    @endif
    >

        <div class="d-flex justify-content-center align-items-center">
            <img class="rounded card-img-top p-2 m-2 img-fluid" src="{{ !$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(300, 300) : asset('image\not-found.jpg') }}" alt="..." />

        </div>
        <div class="card-body p-4">
            <div class="badge bg-warning text-dark bg-gradient rounded-pill mb-2">{{ $article->category->name }}</div>
            <h5 class="card-title mb-3 corsivo fs-2">{{ $article->title }}</h5>
            <h5 class="card-title mt-2 mb-3">€ {{ $article->price }}</h5>
            <a href="{{ route('articles.show', $article) }}" class="me-3 text-decoration-none text-dark"><i class="fa-solid fa-eye fa-bounce animazione text-dark me-1" ></i> {{__('ui.card-look')}}</a>

        </div>
        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
            <div class="d-flex align-items-end justify-content-between">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-user me-3 text-dark fs-4"></i>
                    <div class="small">
                        <div class="fw-bold">{{ $article->user->name }}</div>
                        <div class="text-muted">{{__('ui.card-create')}} {{ $article->created_at->format('d/m/Y H:i') }}</div>
                    </div>
                </div>
            </div>
            @auth
                @if (Auth::user()->is_revisor)
                    <form action="{{route('revisor.nullable',['article' => $article])}}" method="POST" class="mt-2">
                        @csrf
                        @method ('PATCH')
                        <button  type="submit" class="btn btn-danger p-1">{{__('ui.card-revision')}}</button>
                    </form>
                @endif
            @endauth
        </div>
    </div>
</div>