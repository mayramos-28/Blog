<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = []; // esto en un entorno real no lo haría, pero para simplificar la prueba lo dejo así

  
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }   
    public function files(){
        return $this->morphMany(File::class, 'fileable');
    }
    
}