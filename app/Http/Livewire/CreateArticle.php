<?php

namespace App\Http\Livewire;

use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Jobs\WatermarkPost;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Psy\Readline\Hoa\FileException;

class CreateArticle extends Component
{
    use WithFileUploads;
    public $title;
    public $price;
    public $category_id;
    public $description;
    public $user_id;  

    public $article;

    public $categories;

    public $temporary_images;

    public $images =[];

    public $image;
    public $category;

    protected $rules = [
        'title' => 'required|max:20',
        'price' => 'required|numeric',
        'description' => 'required|max:250',
        'category_id' => 'required',
        // 'user_id' => 'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];
    
    protected $messages = [
        'title.required' => 'Campo obbligatorio',
        'title.max' => 'Massimo :max caratteri',
        'price.required' => 'Campo obbligatorio',
        'price.numeric' => 'Campo numerico - usare . per i decimali',
        'description.required' => 'Campo obbligatorio',
        'description.max' => 'Massimo :max caratteri',
        'category_id.required' => 'Campo obbligatorio',
        'temporary_images.*.image' =>'Il file deve essere jpg, jpeg, png, bmp, gif, svg, or webp',
        'images.image' =>'Il file deve essere jpg, jpeg, png, bmp, gif, svg, or webp',
        'images.max' =>'Il File deve essere massimo 1MB',
        'temporary_images.*.max' =>'Il File deve essere massimo 1MB',



    ];

    public function mount(){
        // $this->article = new Article();
        $this->loadCategories();
    }
    
    public function loadCategories(){
        $this->categories = Category::all();
    }
    
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function store(){
        // dd($this->category_id, gettype($this->category_id));
        $this->validate(); //FANCULO x2
        $this->article = Auth::user()->articles()->create([
                    'title' => $this->title,
                    'price' => $this->price,
                    'description' => $this->description,
                    'category_id' => $this->category_id,
                    'user_id' => auth()->user()->id,
                    'images'=> $this->images
        ]); 
        
        // Article::create([
        //         'title' => $this->title,
        //         'price' => $this->price,
        //         'description' => $this->description,
        //         'category_id' => $this->category_id,
        //         'user_id' => auth()->user()->id,
        //     ]);

        ///////////////////////////////////////////////////////////


        // $this->article = Category::find($this->category_id)->articles()->create($this->validate());
        // $this->article->user()->associate(Auth::user());
        // $this->article->user_id = auth()->user()->id;
       
        if (count($this->images)){
        
            foreach ($this->images as $image){
                // $this->article->images()->create(['path' => $image->store('images','public')]);
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path' => $image->store($newFileName,'public')]);
                
                dispatch(new GoogleVisionSafeSearch($newImage->id));
                dispatch(new GoogleVisionLabelImage($newImage->id));

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 300, 300),
                    
                ])->dispatch($newImage->id);

                dispatch(new WatermarkPost($newImage->id));

                
            }   
            
            File::deleteDirectory(storage_path('\app\livewire-tmp')); 
        
        }

        $this->article->save();  

            // $this->article->save();
            
        // return redirect()->back()->with(['success' => 'Annuncio creato correttamente.']);
        session()->flash('success', 'Annuncio creato con successo! Verrà pubblicato a breve dopo la revisione.');

        $this->cleanArticle();
    }

    public function cleanArticle()
    {
        $this->title = '';
        $this->price = '';
        $this->description = '';
        $this->category_id = '';
        $this->image = '';
        $this->images = [];
        $this->temporary_images = [];
    }


    public function render()
    {
        return view('livewire.create-article');
    }

    public function updatedTemporaryImages() {
    
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024'
            ])) {
            
            foreach ($this->temporary_images as $image) {
            
                $this->images[] = $image;
            
            }
            
        }
       
    }
        

    
    public function removeImage($key){
    
        if (in_array($key , array_keys($this->images)))
        {
            unset($this->images[$key]);
        }
    
    }
}
