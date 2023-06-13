<x-main>

  
  <div class="background-page py-5">
    
    {{-- <h1 class="text-center fw-semibold mt-3">{{__('ui.POSTit-revisionare')}}</h1> --}}
    {{-- <h1 class="text-center fw-semibold mt-3"> {{$to_check ? '__('ui.POSTit-revisionare')' : '__('ui.no-POSTit')' }}</h1> --}}
    
      @if ($to_check)
       <h1 class="text-center fw-semibold mt-3">{{__('ui.POSTit-revisionare')}}</h1>
      @else
        <h1 class="text-center fw-semibold mt-3">{{__('ui.no-POSTit')}}</h1>
      @endif
      
      
    
    @if ($to_check)
    
          
    <div class="container mt-5 ">
      <div class="row">
        <x-success/>
        {{-- Blocco immagine --}}
        <div class="col-12 col-lg-6 mt-1">
          <div class="row">

            <div id="carouselExampleIndicators" class="carousel slide">
              {{-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div> --}}
              @if(!$to_check->images->isEmpty())
                <div class="carousel-inner">
                  @foreach ($to_check->images as $image)
                    <div class="carousel-item @if($loop->first)active @endif  ">
                      <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ $image->getUrl(300, 300) }}" alt="" class="w-50 img-fluid mx-auto">
  
                      </div>
                      <div class="row d-flex justify-content-between pt-3 border-top border-secondary">
                        <div class="col-6">
                          <div class="card-body">
                            <h5 class="tc-accent fw-bold">{{__('ui.rev-title')}}</h5>
                            <p>{{__('ui.rev-ad')}}<span class="{{$image->adult}}"></span></p>
                            <p>{{__('ui.rev-sat')}}<span class="{{$image->spoof}}"></span></p>
                            <p>{{__('ui.rev-med')}}<span class="{{$image->medical}}"></span></p>
                            <p>{{__('ui.rev-vio')}}<span class="{{$image->violence}}"></span></p>
                            <p>{{__('ui.rev-amm')}}<span class="{{$image->racy}}"></span></p>
                          </div>
                        </div>
  
                        <div class="col-6">
                          <h5 class="tc-accent fw-bold">Tags</h5>
                          <div class="p-2">
                            @if($image->labels)
                              @foreach ($image->labels as $label )
                                <p class="d-inline">{{$label}}</p>
                              @endforeach
                            @endif
                          </div>
                        </div>
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
          </div>

        </div>

        {{-- descrizione --}}
        <div class="col-12 col-lg-6 d-flex flex-column justify-content-around border-start border-secondary">
             
          <div>
            <p class="fw-normal fst-italic d-inline fw-semibold">{{__('ui.an-title')}}: </p><p class="fs-1 fw-semibold d-inline">{{ $to_check->title }}</p>
          </div>
          <div>
            <p class="fw-normal fst-italic d-inline fw-semibold">{{__('ui.an-cat')}}: </p><p class="fs-3 d-inline">
            @if (session('locale') == 'it'  || session('locale') == NULL)
            {{ $to_check->category->nameIT}}</p> <br>
            @elseif (session('locale') == 'en')
            {{ $to_check->category->nameEN}}</p> <br>
            @elseif (session('locale') == 'es')
            {{ $to_check->category->nameES}}</p> <br>
            @endif
          </div>
          <div>
            <p class="fw-normal fst-italic d-inline fw-semibold">{{__('ui.an-text')}}: </p><p class="fs-4 d-inline">{{ $to_check->description }} </p> <br>
          </div>
          <div>
            <p class="fw-normal fst-italic d-inline fw-semibold">{{__('ui.an-price')}}: </p><p class="fs-3 d-inline">{{ $to_check->price }}€ </p> <br>
          </div>
          <div>
            <p class="fw-normal fst-italic d-inline fw-semibold">{{__('ui.card-auth')}} </p><p class="fs-3 d-inline">{{ $to_check->user->name }} </p> <br>
          </div>
          <div>
            <p class="fw-normal fst-italic d-inline fw-semibold">{{__('ui.card-create')}}: </p><p class="fs-3 d-inline">{{ $to_check->created_at->format('d/m/Y H:i') }}</p>
          </div>

        </div>
        <div class="col-12 col-lg-12 d-flex justify-content-center align-items-center my-5">
          <form action="{{route('revisor.accept',['article' => $to_check])}}" method="POST">
            @csrf
            @method ('PATCH')
            
            <button  type="submit" class="btn btn-success me-3">{{__('ui.btn-YES')}}</button>
          </form>
          
          <form action="{{route('revisor.reject',['article' => $to_check])}}" method="POST">
            @csrf
            @method ('PATCH')
            
            <button type="submit" class="btn btn-danger">{{__('ui.btn-NO')}}</button>
          </form>
          
        </div>
        
      </div>
      
      
    </div>
    @endif
  </div>
</x-main>