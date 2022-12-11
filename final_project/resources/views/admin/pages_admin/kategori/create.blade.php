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
                            <h3 class="card-title">Tambah Kategori</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <form action="/kategori" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama">Kategori Berita</label>
                                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Kategori">
                                            @error('nama')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>                                       
                                        <div class="form-group">
                                            <label for="tag_id">Tag Mengenai Kategori</label>
                                            <select class="form-control" name="tag_id" id="tag_id">
                                                <option value="">--Pilih Tag--</option>
                                                @foreach($tag as $item)
                                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                                @endforeach
                                            </select>
                                            @error('tag_id')
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