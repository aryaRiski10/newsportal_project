@extends('master')
@section('content')   
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <section class="content">
                        <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Data kategori</h3>
                            </div>
                            <div class="card-body">
                                 
                              <a href="/kategori/create" class="btn btn-primary" style="margin-bottom:.5rem;">Tambah</a>
                              <table class="table">
                                  <thead class="thead-light">
                                  <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Nama</th>
                                      <th scope="col">Actions</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                      @forelse ($kategori as $key=>$value)
                                          <tr>
                                              <td>{{$key + 1}}</th>
                                              <td>{{$value->nama}}</td>
                                              <td>
                                                  <a href="/kategori/{{$value->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
                                                  <form action="/kategori/{{$value->id}}" method="POST" style="display:inline-block">
                                                      @csrf
                                                      @method('DELETE')
                                                      <input type="submit" class="btn btn-sm btn-danger my-1" value="Delete">
                                                  </form>
                                              </td>
                                          </tr>
                                      @empty
                                          <tr colspan="3">
                                              <td>No data</td>
                                          </tr>  
                                      @endforelse              
                                  </tbody>
                              </table>
                               
                          
                            </div>
                            <!-- /.card-body -->
                      
                          </div>
                          <!-- /.card -->
                      

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