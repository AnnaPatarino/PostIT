<div>
    <x-success/>
    {{-- FORM --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-10 col-md-10 mx-auto">
                <form wire:submit.prevent="store">
                    
                    <div class="row g-3">
                        {{-- TITOLO --}}
                        <div class="col-12">
                            <label for="title" class="fw-bold">{{__('ui.an-title')}}</label><br>
                            <input wire:model.lazy="title" type="text" class="form-control">
                            @error('title') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>

                        {{-- PREZZO --}}
                        <div class="col-12">
                            <label for="price" class="fw-bold">{{__('ui.an-price')}}</label><br>
                            <input wire:model.lazy="price" type="text" class="form-control">
                            @error('price') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>

                        {{-- CATEGORIA MULTIPLA --}}
                        <div class="col-12">
                            <label for="category_id" class="fw-bold">{{__('ui.an-cat')}}</label><br>
                            <select wire:model.lazy="category_id" class="form-select" aria-label="Default select example">
                                <option selected>{{__('ui.bacheca-category')}}</option>
                                @foreach ($categories as $category)
                                    @if (session('locale') == 'it' || !session('locale'))
                                    <option  value="{{ $category->id }}" >{{ $category->nameIT }}</option>
                                    @elseif (session('locale') == 'en')
                                    <option  value="{{ $category->id }}" >{{ $category->nameEN }}</option>
                                    @elseif (session('locale') == 'es')
                                    <option  value="{{ $category->id }}" >{{ $category->nameES }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('category_id') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>

                        {{-- TESTO --}}
                        <div class="col-12">
                            <label for="description" class="fw-bold">{{__('ui.an-text')}}</label><br>
                            <textarea wire:model.lazy="description" type="text" class="form-control"></textarea>
                            @error('description') <span class="small text-danger">{{ $message }}</span> @enderror

                        </div>

                       {{-- FOTO --}}
                        <div class="col-12">
                            <label for="images" class="fw-bold">{{__('ui.an-img')}}</label><br>
                            <input wire:model="temporary_images" type="file" multiple name="images" class="form-control
                            @error('temporary_images.*') is-invalid @enderror" placeholder="IMG">
                            @error('temporary_images.*') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div> 
                            @if (!empty($images))

                            <div class="row">
                                <div class="col-12">
                                    <p>{{__('ui.an-img-prew')}}</p>
                                    <div class="row border border-4 border-warning rounded py-4">
                                        @foreach ($images as $key=>$image)
                                            <div class="col my-3">
                                                <div class="img-preview mx-auto rounded d-flex">
                                                    <img src="{{$image->temporaryUrl()}}" alt="" class="align-items-center img-fluid border border-2 border-secondary">
                                                </div>
                                                <button type="button" class="btn btn-danger d-block text-center mt-3 mx-auto" wire:click="removeImage({{$key}})">Rimuovi</button>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                
                            </div>
                            @endif

                        {{-- BOTTONE --}}
                        <div class="col-12">
                            <button class="btn btn-warning text-dark" type="submit">{{__('ui.an-btn-publish')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
