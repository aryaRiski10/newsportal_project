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
                              <h3 class="card-title">Data Berita</h3>
                            </div>
                            <div class="card-body">
                              <a href="/berita/create" class="btn btn-primary" style="margin-bottom:.5rem;">Tambah</a>
  
                              <section class="content">
                                <div class="card">
                                    <div class="card-header">
                                    <h3 class="card-title">DataTable Berita</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Penulis</th>
                                            <th scope="col">Tahun</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @forelse ($berita as $key=>$value)
                                            <tr>
                                              <td>{{$key + 1}}</th>
                                              <td>{{$value->judul}}</td>
                                              <td>
                                                  {{$value->kategori->nama}}
                                                  
                                              </td>
                                              <td>{{$value->penulis}}</td>
                                              <td>{{$value->tahun}}</td>
                                            </tr>
                                            @empty
                                            <tr colspan="3">
                                              <td>No data</td>
                                            </tr>  
                                            @endforelse  
                                        </tfoot>
                                    </table>
                                    </div>
                                    <!-- /.card-body -->
                                </section>
                              </div>
                               
                          
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

  @push('scriptTable')
    <script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
    $(function () {
        $("#example1").DataTable();
    });
    </script>
    <script>
      Swal.fire({
          title: "Berhasil!",
          text: "Memasangkan script sweet alert",
          icon: "success",
          confirmButtonText: "Cool",
      });

      // console.log('hello');
  </script>
      
  @endpush
@endsection