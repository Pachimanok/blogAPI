<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //relacion unos a muchos inversa

    //relacion con usuarios.

    public function user(){

        return $this->belongsTo(User::class);

    }

     //relacion con catgegorias.

    public function category(){

        return $this->belongsTo(Category::class);
        
    }

    //Relacion mucho a muchos

    public function tags(){

        return $this->belongsToMany(Tag::class);
        
    }

    // RElacion uno a uno polimirfica

    public function image(){

        return $this->morphOne(Image::class,'imageable');
    }

}
