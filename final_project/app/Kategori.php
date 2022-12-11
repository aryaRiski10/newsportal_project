<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";
    protected $fillable = ["nama","tag_id"];
    public function berita(){
        return $this->hasMany('App\Berita');
    }

    public $timestamps = false;

}
