@extends('home.master1')
@section('content')
    <div class="banner-area banner-inner-1 bg-black" id="banner">
        <div class="container" style="margin: 0 auto;">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-12">
                    <div class="card card-berita">
                        <div class="card-header">{{'Home/'.$home->kategori->nama}}</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-12">
                                    <h3>{{$home->judul}}</h3>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-12">
                                    <i class="fa fa-clock-o"></i><span class="ml-2">{{$home->updated_at->toDayDateTimeString()}}</span>
                                </div>
                            </div>
                            <div class="row justify-content-center py-2">
                                <div class="col-md-8 col-12">
                                    <img src="{{asset('poster/'.$home->poster)}}" alt="Gambar {{$home->judul}}">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-8">
                                    <p class="pt-4">Penulis : {{$home->penulis}}</p>
                                </div>
                                <div class="col-md-8 col-12">
                                    <p class="">{{$home->deskripsi}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-12">
                                    <div class="comment-title">
                                        <h5>Comment</h5>
                                    </div>
                                    <div class="comment-post">
                                        <div class="comment-body">
                                            @foreach($komentar as $k)
                                                @if ($k->berita_id == $id)
                                                    <div class="comment-heading">
                                                        <i class="bi bi-person-circle"></i>
                                                        <h6 class="d-inline">{{$k->nama}}</h6>
                                                        <p class="mb-0" style="font-size:14px;">{{$k->created_at->format('Y/m/d')}}</p>
                                                    </div>
                                                    <p class="mb-0">{{$k->komentar}}</p>
                                                    <div class="comment-footer mb-3">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center py-4">
                                <div class="col-md-8 col-12">
                                    <div class="comment-title">
                                        <h5>Leave your comment</h5>
                                    </div>
                                    <form action="/home/{{$home->id}}" method="post">
                                        @csrf
                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                                                    @error('nama')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                                    @error('email')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <label for="reaksi">Reaksi</label>
                                            <select class="form-control" name="reaksi" id="reaksi" required>
                                                <option value="">--Pilih Reaksi--</option>
                                                    <option value="Suka">Suka</option>
                                                    <option value="Tidak Suka">Tidak Suka</option>
                                            </select>
                                            @error('reaksi')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>                                       
                                    
                                        <div class="form-group">
                                            <textarea class="form-control" name="komentar" id="komentar" cols="30" rows="10" placeholder="Masukkan komentar" required></textarea>
                                            @error('komentar')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <button class="btn btn-success btn-sm">Kirim</button>
                                    </form>
                                </div>
                            </div>
                            {{-- <div class="row justify-content-center">
                                <div class="col-md-8 col-12">
                                    
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection