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
                            <h3 class="card-title">Post Berita Baru</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <form action="/berita" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="title">Judul</label>
                                            <input type="text" class="form-control" name="judul" id="title" placeholder="Masukkan Title">
                                            @error('judul')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="50"></textarea>

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
                                                    <option value="{{$item->id}}">{{$item->nama}}</option>
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
                                                    <input type="text" class="form-control" name="penulis" id="penulis" placeholder="Masukkan Nama Penulis">
                                                    {{-- <input type="text" class="form-control" name="bio" id="title" placeholder="Masukkan Bio"> --}}
                                                    @error('penulis')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-4">
                                                    <label for="tahun">Tahun</label>
                                                    <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Masukkan Tahun">
                                                    {{-- <input type="text" class="form-control" name="bio" id="title" placeholder="Masukkan Bio"> --}}
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
                                    
                                        <button type="submit" class="btn btn-primary">Tambah</button>
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