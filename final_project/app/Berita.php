<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = ['judul', 'deskripsi', 'poster', 'tahun', 'penulis', 'kategori_id'];
    
    public function kategori(){
        return $this->belongsTo('App\Kategori','kategori_id');
    }
    public function liked(){
        return $this->hasMany('App\Liked');
    }
}
