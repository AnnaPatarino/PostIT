<x-main>

<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder border-bottom border-warning">{{__('ui.bacheca-title')}}</h2>
                    <p class="lead fw-normal text-muted mb-5">{{__('ui.category-message')}}    
                        @if (session('locale') == 'it' || !session('locale') )
                        {{ $category->nameIT }}
                    @elseif (session('locale') == 'en')
                        {{ $category->nameEN }}
                    @elseif (session('locale') == 'es')
                        {{ $category->nameES}}
                    @endif</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            
            @forelse ($category->articles as $article)
                @if ($article->is_accepted)
                    <x-card :article="$article" />
                @else
                    <div class="col-12">
                        <p class="h1 text-center">{{__('ui.category-empty-message')}}
                            @if (session('locale') == 'it' || !session('locale') )
                            {{ $category->nameIT }}
                        @elseif (session('locale') == 'en')
                            {{ $category->nameEN }}
                        @elseif (session('locale') == 'es')
                            {{ $category->nameES}}
                        @endif</p>
                        <p class="h2 text-center"> <a href="{{ route('articles.create')}}"></a>!</p>
                    </div>
                @endif

            @empty

                <div class="col-12">
                    <p class="h1 text-center">{{__('ui.nocategory')}}
                        @if (session('locale') == 'it' || !session('locale') )
                        {{ $category->nameIT }}
                    @elseif (session('locale') == 'en')
                        {{ $category->nameEN }}
                    @elseif (session('locale') == 'es')
                        {{ $category->nameES}}
                    @endif</p>
                    <p class="h2 text-center">{{__('ui.publicfirst')}} <a href="{{ route('articles.create')}}"> POSTit</a>!</p>
                </div>
            @endforelse
            
        </div>
    </div>
</section>    




</x-main>