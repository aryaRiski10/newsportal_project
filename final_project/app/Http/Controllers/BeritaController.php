<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Berita;
use App\Kategori;

// use File;
use Illuminate\Support\Facades\File;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        $kategori = Kategori::find(1);
        return view('admin.pages_admin.berita.index', compact('berita','kategori'));
        
    }
    public function list()
    {
        $berita = Berita::all();
        $kategori = Kategori::find(1);
        return view('admin.pages_admin.berita.list', compact('berita','kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $berita = DB::table('kategori')->get();
        // return view('admin.pages_admin.berita.create', compact('berita'));
        $kategori = Kategori::get();
        return view('admin.pages_admin.berita.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'deskripsi' => 'required',
            'tahun' => 'required',
            'penulis' => 'required',
            'kategori_id' => 'required',
            'poster' => 'mimes:jpg,jpeg,png|max:2200'
        ]);

        $poster=$request->poster;
        $new_poster=time() . ' - ' . $poster->getClientOriginalName();
 
        berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'poster' => $new_poster,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun,
            'kategori_id' => $request->kategori_id
        ]);
 
        $poster->move('poster/', $new_poster);

        return redirect('/berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::find($id);
        return view('admin.pages_admin.berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        $kategori = DB::table('kategori')->get();
        return view('admin.pages_admin.berita.edit', compact('berita', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'judul' => 'required',
            'deskripsi' => 'required',
            'tahun' => 'required',
            'penulis' => 'required',
            'kategori_id' => 'required',
            'poster' => 'mimes:jpg,jpeg,png|max:2200'
        ]);

        $berita = Berita::findorfail($id);

        if ($request->has('poster')) {
            // $post -> delete();
            $path = 'poster/';
            File::delete($path . $berita->poster);
            $poster = $request ->poster;
            $new_poster = time() . ' - ' . $poster->getClientOriginalName();
            $poster->move('poster/', $new_poster);
            $berita_data = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'poster' => $new_poster,
                'tahun' => $request->tahun,
                'penulis' => $request->penulis,
                'kategori_id' => $request->kategori_id
            ];
        } else {
            $berita_data = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'tahun' => $request->tahun,
                'penulis' => $request->penulis,
                'kategori_id' => $request->kategori_id
            ];
        }
        $berita->update($berita_data);
        return redirect ('/berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita =Berita::findorfail($id);
        $berita->delete();

        $path = 'poster/';
        File::delete($path . $berita->poster);

        return redirect ('/berita');
    }
}
?>