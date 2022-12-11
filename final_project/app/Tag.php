<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tag";
    protected $fillable = ["nama", "link"];
    // public function kategori(){
    //     return $this->belongsTo('App\Kategori');
    // }
}
