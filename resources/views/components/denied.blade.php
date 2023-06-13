@if(session()->has('denied'))
    <div class="alert alert-danger">
        {{session('denied')}}
    </div>
@endif