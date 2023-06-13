<x-main>
    <div class="container my-5">
        
    







        <section class="h-100 h-custom" >
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                  <div class="card rounded-3" style="background-color: beige;">
                    <img src="{{asset('image\sticky-notes-feature.jpg')}}"
                      class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                      alt="Sample photo">
                    <div class="card-body p-4 p-md-5">
                      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2 text-center">{{__('ui.home-log')}}</h3>
          
                      <form action="/login" method="POST">
                        @csrf
                        <div class="row g-3">
                            {{-- EMAIL --}}
                            <div class="col-12">
                                <label for="email" class="fw-bold">Email</label><br>
                                <input type="text" name="email" value="{{ old('email')}}"
                                class="form-control @error('email') is-invalid @enderror">
                                @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
                            </div>

                            {{-- PSW --}}
                            <div class="col-12">
                                <label for="password" class="fw-bold">Password</label><br>
                                <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror">
                                @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
                            </div>

                            {{-- BOTTONE --}}
                            <div class="col-12">
                                <button class="btn btn-warning text-dark fw-semibold" type="submit">{{__('ui.home-log')}}</button>
                            </div>
                        </div>
                    </form>
          
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>




















</x-main>