<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = []; // esto en un entorno real no lo haría, pero para simplificar la prueba lo dejo así

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comment(){
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function ingredients(){
        return $this->hasMany(Ingredients::class);
    }
    public function preparation(){
        return $this->hasMany(Preparation::class);
    }
    public function files(){
        return $this->hasMany(Files::class);
    }
    public function favorite(){
        return $this->hasMany(Favorite::class);
    }
}
