<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = []; // esto en un entorno real no lo haría, pero para simplificar la prueba lo dejo así

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function files(){
        return $this->morphMany(File::class, 'fileable');
    }
}
