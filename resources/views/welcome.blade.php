<x-main>

        <main class="flex-shrink-0">
            <!-- Navigation-->
            
            <!-- Header-->
            <header class=" py-5 img-sfondo ">
                <div class="container px-5 ">
                    <div class="row gx-5 align-items-start justify-content-start mt-5">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5  text-xl-start">
                                <h1 data-aos="slide-right" data-aos-duration="600" class="display-2 fw-bolder corsivo mb-2">{{ __('ui.inserisciPOSTit') }}</h1>
                                <p data-aos="slide-right" data-aos-duration="700" data-aos-once="true" class="lead fw-bold mb-4">{{__('ui.home-subtitle')}}</p>
                                <div data-aos="slide-right" data-aos-duration="800" data-aos-once="true" class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-warning btn-lg px-4 me-sm-3" href="{{ route ('articles.index') }}">{{__('ui.nav-board')}}</a>
                                    @guest
                                        <a class="btn btn-dark btn-lg px-4 text-warning" href="/login">{{__('ui.home-log')}}</a>
                                    @else
                                        <a class="btn btn-dark btn-lg px-4 text-warning" href="{{ route ('articles.create') }}">{{__('ui.home-insert')}}</a>
                                    @endguest
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div> --}}
                    </div>
                </div>
            </header>
            <x-denied/>
            <x-success/>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <h2 class="fw-bolder mb-0 ps-3">{{__('ui.home-call')}}</h2>
                            <img src="{{ asset('.\image\postit-4543989_1280.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-8 ps-3">
                            <div data-aos="slide-left" data-aos-duration="700"  class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="badge text-wrap feature bg-warning bg-gradient text-white rounded-3 mb-3"><i class="m-3 fa-solid fa-bolt-lightning fa-2xl" style="color: #000000;"></i></div>
                                    <h2 class="h5 fw-bold">{{__('ui.home-free-title')}}</h2>
                                    <p class="mb-0">{{__('ui.home-free-sub')}}</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="badge text-wrap feature bg-warning bg-gradient text-white rounded-3 mb-3"><i class="m-3 fa-solid fa-magnifying-glass fa-2xl" style="color: #000000;"></i></div>
                                    <h2 class="h5 fw-bold">{{__('ui.home-easy-title')}} </h2>
                                    <p class="mb-0">{{__('ui.home-easy-sub')}}</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="badge text-wrap feature bg-warning bg-gradient text-white rounded-3 mb-3"><i class="m-3 fa-solid fa-box-archive fa-2xl" style="color: #000000;"></i></div>
                                    <h2 class="h5 fw-bold">{{__('ui.home-infinite-title')}}</h2>
                                    <p class="mb-0">{{__('ui.home-infinite-sub')}}</p>
                                </div>
                                <div class="col h-100">
                                    <div class="badge text-wrap feature bg-warning bg-gradient text-white rounded-3 mb-3"><i class="m-3 fa-solid fa-leaf fa-2xl" style="color: #000000;"></i></div>
                                    <h2 class="h5 fw-bold">{{__('ui.home-planet-title')}}</h2>
                                    <p class="mb-0">{{__('ui.home-planet-sub')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Blog preview section-->
            <section class="pt-2 pb-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-semibold border-bottom border-warning ">{{__('ui.home-last-title')}}</h2>
                                <p class="lead fw-normal text-muted mb-5">{{__('ui.home-last-sub')}} <a class="text-warning fw-semibold" href="{{ route('articles.index') }}">{{__('ui.nav-board')}}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        
                        @foreach ($articles as $article)
                            <x-card :article="$article" />
                        @endforeach
                     
                    </div>
                    <!-- Call to action-->
                    {{-- <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                            <div class="mb-4 mb-xl-0">
                                <div class="fs-3 fw-bold text-white">New products, delivered to you.</div>
                                <div class="text-white-50">Sign up for our newsletter for the latest updates.</div>
                            </div>
                            <div class="ms-xl-4">
                                <div class="input-group mb-2">
                                    <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
                                    <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
                                </div>
                                <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                            </div>
                        </div>
                    </aside> --}}
                </div>
            </section>
        </main>

</x-main>
