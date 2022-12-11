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
                            <h3 class="card-title">Edit Tag</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <form action="/tag/{{$tag->id}}" method="POST">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label for="nama">Nama Tag</label>
                                            <input type="text" class="form-control" name="nama" id="nama" value="{{$tag->nama}}" placeholder="Masukkan Title">
                                            @error('judul')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="link">Link Tag</label>
                                            <input type="text" class="form-control" name="link" id="link" value="{{$tag->link}}" placeholder="Masukkan Title">
                                            @error('link')
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