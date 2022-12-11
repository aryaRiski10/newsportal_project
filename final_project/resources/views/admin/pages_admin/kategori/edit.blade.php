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
                            <h3 class="card-title">Edit Kategori</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <form action="/kategori/{{$kategori->id}}" method="POST">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label for="nama">Kategori Berita</label>
                                            <input type="text" class="form-control" name="nama" id="nama" value="{{$kategori->nama}}" placeholder="Masukkan Nama Kategori">
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
                                                    @if ($item->id == $kategori->tag_id)
                                                        <option value="{{$item->id}}" selected>{{$item->nama}}</option>
                                                    @else
                                                        <option value="{{$item->id}}">{{$item->nama}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('tag_id')
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