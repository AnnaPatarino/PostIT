<x-main>
    <div class="my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto">
                    <x-success/>
                    <h1 class="mb-4 fw-semibold">{{__('ui.work-title')}}</h1>
                    <h3>{{__('ui.work-data')}}</h3>
                    <ul>
                        <li class="fs-3">{{auth()->user()->name}}</li>
                        <li class="fs-3">{{auth()->user()->email}}</li>
                    </ul>
                    <h3 class="mt-3 text-center">{{__('ui.work-confirm')}}</h3>
                    <div class="d-flex justify-content-center mt-2">
                        <form action="{{route('become.revisor')}}">
                            <button type="submit" class="btn btn-warning text-dark">{{__('ui.work-btn')}}</button>
                        </form>

                    </div>

                </div>


            </div>

        </div>

    </div>

</x-main>