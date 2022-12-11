<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Liked;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home = Berita::all();
        return view('home.index',compact('home'));
    }

    public function show($id)
    {
        $home = Berita::find($id);
        $komentar = Liked::all();
        return view('home.show', compact('home','komentar'),['id'=>$id]);
    }

    public function insertComment(Request $request, $id){
        $home = Berita::find($id);
        $user = new Liked;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->reaksi = $request->reaksi;
        $user->komentar = $request->komentar;
        $user->berita_id = $request->id;

        $user->save();
        return redirect()->action('HomeController@show',['id'=>$id]);
    }
    
}
