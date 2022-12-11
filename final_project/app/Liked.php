<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liked extends Model
{
    protected $table = "liked";
    protected $fillable = ["user_id","berita_id","nama","email","reaksi","komentar"];

    public function berita(){
        return $this->belongsToMany("App\Berita");
    }
    public function user(){
        return $this->belongsToMany("App\User");
    }
}
