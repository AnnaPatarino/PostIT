<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['title', 'price', 'description', 'category_id', 'user_id', 'is_accepted'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public static function revisionCount() {
        return Article::where('is_accepted', null)->count();
    }

    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    

    public function toSearchableArray()
    {
        $category = $this->category;
        $user = $this->user;
        $array =[
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $category,
            'user_id' => $user,
        ];
        return $array;
    }


    public function images(){
    
        return $this->hasMany(Image::class);
    
    }
}
