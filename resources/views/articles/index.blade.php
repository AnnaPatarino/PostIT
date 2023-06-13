<x-main>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-2  py-5">
                <h2 class="fw-bolder mt-5 text-center">{{__('ui.search-by-category')}}</h2>
                <div class="btn-group gx-5 d-flex justify-content-center">
                    <button class="btn btn-warning btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('ui.bacheca-category')}}
                    </button>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        @if (session('locale') == 'it' || session('locale') == NULL)

                            <li><a class="dropdown-item" href="{{ route('categoryShow', compact('category')) }}">{{ $category->nameIT }}</a></li>
                        @elseif (session('locale') == 'en')
                        <li><a class="dropdown-item" href="{{ route('categoryShow', compact('category')) }}">{{ $category->nameEN }}</a></li>
                        @elseif (session('locale') == 'es')
                        <li><a class="dropdown-item" href="{{ route('categoryShow', compact('category')) }}">{{ $category->nameES}}</a></li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            
            <div class="col-12 col-md-10">
                <section class="py-5">
                    <div class="container px-5 my-5">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <div class="text-center">
                                    <h2 class="fw-bolder border-bottom border-warning"> {{__('ui.bacheca-title')}}</h2>
                                    <p class="lead fw-normal text-muted mb-5">{{__('ui.bacheca-subtitle')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-5">
                            
                            @forelse ($articles as $article)
                                <x-card :article="$article" />
                                @empty
                                <div class="col-12">
                                    <p class="h1 text-center">{{__('ui.no-category')}}</p>
                                
                            @endforelse
                         
                        </div>
                    </div>
                </section>    
            
            </div> 
        </div>
    </div>


</x-main>