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
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-10 col-12">
                                    <form action="/profile/{{$profile->id}}" method="POST">
                                        @csrf
                                        @method('put')
                                        <div class="row">
                                            <div class="col-md-6 col-xl-4">
                                                <div class="form-group">
                                                    <label for="nama">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="nama" id="nama" value="{{$profile->user->nama}}" placeholder="Masukkan Nama" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" name="email" id="email" value="{{$profile->user->email}}" placeholder="Masukkan Email" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-4">
                                                <div class="form-group">
                                                    <label for="umur">Umur</label>
                                                    <input type="hidden" value="{{$profile->user_id}}"/>
                                                    <input type="number" class="form-control" name="umur" id="umur" value="{{$profile->umur}}" placeholder="Masukkan Umur">
                                                    @error('umur')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-8 col-12">
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5">{{$profile->alamat}}</textarea>
                                                    @error('alamat')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-8 col-12">
                                                <div class="form-group">
                                                    <label for="bio">Bio</label>
                                                    <textarea class="form-control" name="bio" id="bio" cols="30" rows="5">{{$profile->bio}}</textarea>
                                                    @error('bio')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
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