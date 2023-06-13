<x-main>
  {{-- @dd($allArticles) --}}
  
  <div class="background-page py-5">
    
    {{-- <h1 class="text-center fw-semibold mt-3">{{__('ui.POSTit-revisionare')}}</h1> --}}
    {{-- <h1 class="text-center fw-semibold mt-3"> {{$to_check ? '__('ui.POSTit-revisionare')' : '__('ui.no-POSTit')' }}</h1> --}}
    
    <h1 class="text-center fw-semibold mt-3">Console</h1>
    
    
    
    
    @if ($allArticles)
    
    
    <div class="container-fluid mt-5 ">
      <div class="row">
        <x-success/>
        <div class="col-12 mt-1">

          <h2 class="text-center fw-semibold mt-3">{{__('ui.art-YES')}}</h2>
          <div class="accordion container border border-success border-4 p-0 rounded" id="accordionExample">

            @foreach ($allArticles as $article)

              @if ($article->is_accepted)
              
                <div class="accordion-item mb-2">
                  <h2 class="accordion-header">
                    <button class="accordion-button bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $article->id }}" aria-expanded="true" aria-controls="collapse{{ $article->id }}">
                      <h2 class="corsivo text-dark">
                        {{ $article->title }}
                      </h2>
                    </button>
                  </h2>
                  <div id="collapse{{ $article->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      {{-- IMAGES --}}
                      <div class="row">
                        <div class="col-12">
                          @if(!$article->images->isEmpty())
                            <div class="d-flex justify-content-start">
                              @foreach ($article->images as $image)
                                <img src="{{ $image->getUrl(300, 300) }}" alt="" class="img-fluid mx-auto">
                              @endforeach
                            </div>
                          @else
                            <div class="d-flex justify-content-start">
                              <img src="{{asset('image\not-found.jpg')}}" class="d-block" alt="...">
                            </div>
                          @endif
                        </div>

                      </div>
                      <div class="col-12">
                        <h5 class="text-dark">
                          cat: 
                          @if (session('locale') == 'it' || session('locale') == null)
                            {{ $article->category->nameIT}}
                          @elseif (session('locale') == 'en')
                            {{ $article->category->nameEN}}
                          @elseif (session('locale') == 'es')
                            {{ $article->category->nameES}}
                          @endif
                        </h5>
                        <h5 class=" text-dark">
                          € 
                          {{ $article->price }}
                        </h5>
                        <h5 class=" text-dark">
                          {{ $article->description }}
                        </h5>
                        <h5 class=" text-dark">
                          view: {{ $article->view }}
                        </h5>
                        <h5 class="mt-1 border-top text-dark">
                          @if (Auth::user()->is_revisor)
                            <form action="{{route('revisor.nullable',['article' => $article])}}" method="POST" class="mt-2">
                              @csrf
                              @method ('PATCH')
                              <button  type="submit" class="btn btn-danger p-1">{{__('ui.card-revision')}}</button>
                            </form>
                          @endif
                        </h5>
                      </div>

                    </div>
                  </div>
                  
                </div>

              @endif

            @endforeach

          </div>

          <h2 class="text-center fw-semibold mt-5">{{__('ui.art-NO')}}</h2>
          <div class="accordion container border border-danger border-4 p-0 rounded" id="accordionExample">

            @foreach ($allArticles as $article)

              @if ($article->is_accepted === 0)
              
                <div class="accordion-item mb-2">
                  <h2 class="accordion-header">
                    <button class="accordion-button bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $article->id }}" aria-expanded="true" aria-controls="collapse{{ $article->id }}">
                      <h2 class="corsivo text-dark">
                        {{ $article->title }}
                      </h2>
                    </button>
                  </h2>
                  <div id="collapse{{ $article->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      {{-- IMAGES --}}
                      <div class="row">
                        <div class="col-12">
                          @if(!$article->images->isEmpty())
                            <div class="d-flex justify-content-start">
                              @foreach ($article->images as $image)
                                <img src="{{ $image->getUrl(300, 300) }}" alt="" class="img-fluid mx-auto">
                              @endforeach
                            </div>
                          @else
                            <div class="d-flex justify-content-start">
                              <img src="{{asset('image\not-found.jpg')}}" class="d-block" alt="...">
                            </div>
                          @endif
                        </div>

                      </div>
                      <div class="col-12">
                        <h5 class="text-dark">
                          cat: 
                          @if (session('locale') == 'it' || session('locale') == null)
                            {{ $article->category->nameIT}}
                          @elseif (session('locale') == 'en')
                            {{ $article->category->nameEN}}
                          @elseif (session('locale') == 'es')
                            {{ $article->category->nameES}}
                          @endif
                        </h5>
                        <h5 class=" text-dark">
                          € 
                          {{ $article->price }}
                        </h5>
                        <h5 class=" text-dark">
                          {{ $article->description }}
                        </h5>
                        <h5 class=" text-dark">
                          view: {{ $article->view }}
                        </h5>
                        <h5 class="mt-1 border-top text-dark">
                          @if (Auth::user()->is_revisor)
                            <form action="{{route('revisor.nullable',['article' => $article])}}" method="POST" class="mt-2">
                              @csrf
                              @method ('PATCH')
                              <button  type="submit" class="btn btn-danger p-1">{{__('ui.card-revision')}}</button>
                            </form>
                          @endif
                        </h5>
                      </div>

                    </div>
                  </div>
                  
                </div>

              @endif

            @endforeach

          </div>

          <h2 class="text-center fw-semibold mt-5">{{__('ui.art-REV')}}</h2>
          <div class="accordion container border border-dark border-4 p-0 rounded" id="accordionExample">

            @foreach ($allArticles as $article)

              @if ($article->is_accepted === NULL)
              
                <div class="accordion-item mb-2">
                  <h2 class="accordion-header">
                    <button class="accordion-button bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $article->id }}" aria-expanded="true" aria-controls="collapse{{ $article->id }}">
                      <h2 class="corsivo text-dark">
                        {{ $article->title }}
                      </h2>
                    </button>
                  </h2>
                  <div id="collapse{{ $article->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      {{-- IMAGES --}}
                      <div class="row">
                        <div class="col-12">
                          @if(!$article->images->isEmpty())
                            <div class="d-flex justify-content-start">
                              @foreach ($article->images as $image)
                                <img src="{{ $image->getUrl(300, 300) }}" alt="" class="img-fluid mx-auto">
                              @endforeach
                            </div>
                          @else
                            <div class="d-flex justify-content-start">
                              <img src="{{asset('image\not-found.jpg')}}" class="d-block" alt="...">
                            </div>
                          @endif
                        </div>

                      </div>
                      <div class="col-12">
                        <h5 class="text-dark">
                          cat: 
                          @if (session('locale') == 'it' || session('locale') == null)
                            {{ $article->category->nameIT}}
                          @elseif (session('locale') == 'en')
                            {{ $article->category->nameEN}}
                          @elseif (session('locale') == 'es')
                            {{ $article->category->nameES}}
                          @endif
                        </h5>
                        <h5 class=" text-dark">
                          € 
                          {{ $article->price }}
                        </h5>
                        <h5 class=" text-dark">
                          {{ $article->description }}
                        </h5>
                        <h5 class=" text-dark">
                          view: {{ $article->view }}
                        </h5>
                        <h5 class="mt-1 border-top text-dark d-flex">
                          @if (Auth::user()->is_revisor)
                            <form action="{{route('revisor.accept',['article' => $article])}}" method="POST" class="mt-1">
                              @csrf
                              @method ('PATCH')
                              
                              <button  type="submit" class="btn btn-success me-3">{{__('ui.btn-YES')}}</button>
                            </form>
                          
                            <form action="{{route('revisor.reject',['article' => $article])}}" method="POST" class="mt-1">
                              @csrf
                              @method ('PATCH')
                              
                              <button type="submit" class="btn btn-danger">{{__('ui.btn-NO')}}</button>
                            </form>
                          @endif
                        </h5>
                      </div>

                    </div>
                  </div>
                  
                </div>

              @endif

            @endforeach

          </div>
          

        </div>





{{-- 
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
            
          </div> --}}
          
        </div>
        
        
      </div>
      @endif
    </div>
  </x-main>