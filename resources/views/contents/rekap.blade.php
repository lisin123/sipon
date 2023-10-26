@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rekap Absen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Rekap Absen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                  <div style="margin: 20px;">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="konfirmasi-tab" data-bs-toggle="tab" data-bs-target="#konfirmasi" type="button" role="tab" aria-controls="konfirmasi" aria-selected="true">Rekap absen</button>
                      </li>
                      
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="riwayat-tab" data-bs-toggle="tab" data-bs-target="#riwayat" type="button" role="tab" aria-controls="riwayat" aria-selected="false">Riwayat</button>
                      </li>

                    </ul>
                    <div class="tab-content pt-4" id="myTabContent">
                      <div class="tab-pane fade show active" id="konfirmasi" role="tabpanel" aria-labelledby="konfirmasi-tab">
                        <form action=""></form>
                        <!-- Button trigger modal -->
                        <div class="form-group mb-3">
                            <label>Tanggal:</label>
          
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="far fa-calendar-alt"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control float-right" id="reservation">
                            </div>
                            <!-- /.input group -->
                        </div>
                        
                        <div>
                            <button type="button" class="btn btn-primary">Rekap absen</button>                                
                        </div>
                      </form>    
                    </div>
                    
                      <div class="tab-pane fade" id="riwayat" role="tabpanel" aria-labelledby="riwayat-tab">
                        <table id="riwayat" class="table display dataTable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Periode</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>9/12/2023 - 10/27/2023</td>
                                    <td>Cetak | Hapus</td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                    </div>
                </div>
              </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection