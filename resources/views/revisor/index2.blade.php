<x-main>
  <div class=" py-5">

    {{-- @dd($to_checks) --}}
    
    <h1 class="text-center fw-semibold mt-3 mb-3"> {{$to_checks ? 'Ecco il POSTit da revisionare:' : 'Non ci sono POSTit da revisionare'}}</h1>
    <x-success/>
    
    {{-- @if ($to_checks) --}}
    @foreach ($to_checks as $to_check)
      
    
    <div class="accordion mx-5" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$to_check->id}}" aria-expanded="true" aria-controls="collapse{{$to_check->id}}">
            {{$to_check->title}}
          </button>
        </h2>
        <div id="collapse{{$to_check->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body background-page">
            <div class="container-fluid mt-5 ">
              <div class="row">
                <div class="col-12 col-lg-6 mt-1">
                  <div id="carouselExampleIndicators" class="carousel slide">
                    {{-- <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div> --}}
                    @if($to_check->images !== NULL)
                      
                      <div class="carousel-inner dentro if">
                        @foreach ($to_check->images as $image)
                          <div class="carousel-item @if($loop->first)active @endif">
                            <img src="{{Storage::url($image->path)}}" alt="" class="img-fluid ">
                          </div>
                        @endforeach
                      </div>
                    
                    @else
                      <p>test</p>
                      <div class="carousel-inner fuori if">
                        <div class="carousel-item active">
                          <img src="https://picsum.photos/350/350" class="img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="https://picsum.photos/350/351" class="img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="https://picsum.photos/351/350" class="img-fluid" alt="...">
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
                <div class="col-12 col-lg-6">
                           
                  <p class="fw-normal fst-italic d-inline">Titolo: </p><p class="fs-2 lh-lg fw-semibold d-inline">{{ $to_check->title }}</p> <br>
                  <p class="fw-normal fst-italic d-inline">Categoria: </p><p class="fs-3 lh-lg fw-semibold d-inline">{{ $to_check->category->name }}</p> <br>
                  <p class="fw-normal fst-italic d-inline">Descrizione: </p><p class="fs-3 lh-lg fw-semibold d-inline">{{ $to_check->description }} </p> <br>
                  <p class="fw-normal fst-italic d-inline">Prezzo: </p><p class="fs-3 lh-lg fw-semibold d-inline">{{ $to_check->price }} euro</p> <br>
                  <p class="fw-normal fst-italic d-inline">Autore: </p><p class="fs-3 lh-lg fw-semibold d-inline">{{ $to_check->user->name }} </p> <br>
                  <p class="fw-normal fst-italic d-inline">Creato il: </p><p class="fs-3 lh-lg fw-semibold d-inline">{{ $to_check->created_at->format('d/m/Y H:i') }}</p> 
                            
                </div>
                <div class="col-12 col-lg-12 d-flex justify-content-center align-items-center my-5">
                  <form action="{{route('revisor.accept',['article' => $to_check])}}" method="POST">
                    @csrf
                    @method ('PATCH')
                    
                    <button  type="submit" class="btn btn-success me-3">Accetta</button>
                  </form>
                  
                  <form action="{{route('revisor.reject',['article' => $to_check])}}" method="POST">
                    @csrf
                    @method ('PATCH')
                    
                    <button type="submit" class="btn btn-danger">Rifiuta</button>
                  </form>
                  
                </div>
                
              </div>
              
              
            </div>
            
          </div>
        </div>
      </div>
    
    </div>  
    @endforeach
    {{-- @endif --}}
  </div>
</x-main>