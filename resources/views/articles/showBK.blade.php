<x-main>
  
  <div class="mt-5">
    <h1 class=" text-center fw-semibold">{{__('ui.all-dettails')}}</h1>
    
  </div>
  
  <div class="pb-5 mb-5" style="height: 100vh">
    
    
    <div class="container-fluid my-5">
      <div class="row border border-secondary border-1 m-5 p-3 rounded shadow-lg background-page border-opacity-10">
        <x-success/>
        <div class="col-12 col-lg-6 mt-1">
          <div id="carouselExampleIndicators" class="carousel slide">
            
            @if(!$article->images->isEmpty())
            <div class="carousel-inner mx-5">
              @foreach ($article->images as $image)
              <div class="carousel-item @if($loop->first)active @endif">
                <div class="d-flex justify-content-center align-items-center">
                  <img src="{{ $image->getUrl(300, 300) }}" alt="" class="w-50 img-fluid mx-auto   bg-light">

                </div>
              </div>
              @endforeach
            </div>
            
            @else
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="d-flex justify-content-center align-items-center">
                <img src="{{asset('image\not-found.jpg')}}" class="d-block w-50" alt="...">
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
          <div class="mt-3 text-center">
            @if($article->view == 1)
              <h5 class="fw-normal fst-italic d-inline">{{__('ui.first-user')}}</h5>
            @else
              <h5 class="fw-normal fst-italic d-inline">{{__('ui.nb-user')}}<span class="fw-bold">{{ $article->view }}</span>{{__('ui.nb-user-2')}}</h5>
            @endif
  
          </div>
        </div>
        <div class="col-12 col-lg-6">
          
          <h2 class="corsivo fw-bold display-1">{{ $article->title }}</h2>
          <h2 class="badge bg-warning text-dark text-wrap rounded-pill mb-2 fs-5">{{ $article->category->name }}</h2>
          <h4 class="mt-5 lh-base">{{ $article->description }}</h4>
          
          <p class="fs-3 lh-lg fw-semibold">{{ $article->price }} €</p>
          <p class="fw-normal fst-italic d-inline">{{__('ui.created-by')}} </p><p class="fs-3 lh-lg fw-semibold d-inline">{{ $article->user->name }} </p> <br>
          <p class="fw-normal fst-italic d-inline">{{__('ui.card-create')}} </p><p class="fs-3 lh-lg  d-inline">{{ $article->created_at->format('d/m/Y H:i') }}</p> 
        </div>

      </div>
      
    </div>
    
  </div>
  
  
  
  
  
</x-main>