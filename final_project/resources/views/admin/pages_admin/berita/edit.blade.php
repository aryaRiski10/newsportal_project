@extends('master')
@section('content')   
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <section class="content">
                        <!-- Default box -->
                        <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Berita {{$berita->id}}</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <form action="/berita/{{$berita->id}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label for="title">Judul</label>
                                            <input type="text" class="form-control" name="judul" id="title" value="{{$berita->judul}}" placeholder="Masukkan Title">
                                            @error('judul')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="50">{{$berita->deskripsi}}</textarea>

                                            @error('deskripsi')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="kategori_id">Kategori</label>
                                            <select class="form-control" name="kategori_id" id="kategori_id">
                                                <option value="">--Pilih Tag--</option>
                                                @foreach($kategori as $item)
                                                    @if ($item->id == $berita->kategori_id)
                                                        <option value="{{$item->id}}" selected>{{$item->nama}}</option>
                                                    @else
                                                        <option value="{{$item->id}}">{{$item->nama}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('kategori_id')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>   
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="penulis">Penulis</label>
                                                    <input type="text" class="form-control" name="penulis" id="penulis" value="{{$berita->penulis}}" placeholder="Masukkan Nama Penulis">
                                                    @error('penulis')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-4">
                                                    <label for="tahun">Tahun</label>
                                                    <input type="text" class="form-control" name="tahun" id="tahun" value="{{$berita->tahun}}" placeholder="Masukkan Tahun">
                                                    @error('tahun')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="poster">Poster Berita</label>
                                            <input type="file" class="form-control" name="poster" id="poster" placeholder="Masukkan Poster Film">
                                            @error('poster')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </form>
                                </div>
                        
                            </div>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                    
                    </section>
                    <!-- /.content -->
                </div>

                <div id="styleSelector">

                </div>
            </div>
        </div>
    </div>
  </div>
@endsection