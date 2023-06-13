<x-main>
  
  <div class="mt-5">
    <h1 class=" text-center fw-semibold border-bottom border-warning">{{__('ui.all-dettails')}}</h1>
  </div>
  
  <div class="pb-5 mb-5" style="height: 100vh">
    
    <div class="container my-5">
      <div class="row d-flex justify-content-around align-items-center px-0">
        
        
        {{-- IMG --}}
        <div class="col-lg-6 col-md-6 col-sm-12 pe-5">
          <div id="carouselExampleIndicators" class="carousel slide">
            
            @if(!$article->images->isEmpty())
              <div class="carousel-inner">
                @foreach ($article->images as $image)
                <div class="carousel-item @if($loop->first)active @endif">
                  <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ $image->getUrl(300, 300) }}" alt="" class="w-75 img-fluid mx-auto   bg-light">

                  </div>
                </div>
                @endforeach
              </div>
            
            @else
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="d-flex justify-content-center align-items-center">
                  <img src="{{asset('image\not-found.jpg')}}" class="d-block w-75" alt="...">
                </div>
                </div>
              
              </div>
            
            @endif

              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
          </div>

        </div>
        
        
        {{-- CARD --}}
        <div class="col-lg-6 col-md-6 col-sm-12 content-card ">
          <div class="card-big-shadow">
            <div class="card card-just-text" data-background="color" data-color="yellow" data-radius="none">
              <div class="content">
                <h2 class="corsivo fw-bold text-dark display-3">{{ $article->title }}</h2>
                <h2 class="badge bg-warning text-dark text-wrap rounded-pill mb-2 fs-5">
                  @if (session('locale') == 'it' || session('locale') == NULL)
                  {{ $article->category->nameIT}}
                  @elseif (session('locale') == 'en')
                  {{ $article->category->nameEN}}
                  @elseif (session('locale') == 'es')
                  {{ $article->category->nameES}}
                  @endif
                </h2>
                <h5 class="mt-3 fw-light text-dark">{{ $article->description }}</h5>
                <h6 class="fs-3 lh-lg fw-semibold text-dark">{{ $article->price }} €</h6>
                <div class="border-top border-secondary">
                  <p class="fw-normal fst-italic d-inline text-dark">{{__('ui.created-by')}} </p><p class="fs-5 lh-lg fw-semibold d-inline text-dark">{{ $article->user->name }} </p> <br>
                  <p class="fw-normal fst-italic d-inline text-dark">{{__('ui.card-create')}} </p><p class="fs-5 lh-lg fw-semibold d-inline text-dark">{{ $article->created_at->format('d/m/Y H:i') }}</p>
                  
                </div>
                <div class="mt-3 text-center border-top border-secondary text-dark pt-4">
                  @if($article->view == 1)
                    <h5 class="fw-normal fst-italic d-inline">{{__('ui.first-user')}}</h5>
                  @else
                    <h5 class="fw-normal fst-italic d-inline">{{__('ui.nb-user')}}<span class="fw-bold">{{ $article->view }}</span>{{__('ui.nb-user-2')}}</h5>
                  @endif
        
                </div>
                @auth
                @if (Auth::user()->is_revisor)
                <form action="{{route('revisor.nullable',['article' => $article])}}" method="POST" class="mt-4">
                  @csrf
                  @method ('PATCH')
                  <button  type="submit" class="btn btn-danger p-1">{{__('ui.card-revision')}}</button>
                </form>
                @endif
                @endauth
              </div>
            </div> <!-- end card -->
          </div>
        </div>
        
        
        
        
        
        
        
        
        
      </div>
      
    </div>
  </div>
  
  
  
  
  
</x-main>