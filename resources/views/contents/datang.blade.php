@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kedatangan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kedatangan</li>
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
                        <button class="nav-link active" id="konfirmasi-tab" data-bs-toggle="tab" data-bs-target="#konfirmasi" type="button" role="tab" aria-controls="konfirmasi" aria-selected="true">Konfirmasi</button>
                      </li>
                      
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="riwayat-tab" data-bs-toggle="tab" data-bs-target="#riwayat" type="button" role="tab" aria-controls="riwayat" aria-selected="false">Riwayat</button>
                      </li>

                    </ul>
                    <div class="tab-content pt-4" id="myTabContent">
                      <div class="tab-pane fade show active" id="konfirmasi" role="tabpanel" aria-labelledby="konfirmasi-tab">
                        <!-- Button trigger modal -->
                        <table id="kegiatan" class="table display dataTable" style="width:100%">
                          <thead>
                            <tr>
                              <th>Nama</th>
                              <th>Alasan</th>
                              <th>Kembali</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>John Doe</td>
                              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                              <td>11-7-2014</td>
                              <td>Konfirmasi</td>
                            </tr>
                          </tbody>
                        </table>                                
                      </div>
                    
                      <div class="tab-pane fade" id="riwayat" role="tabpanel" aria-labelledby="riwayat-tab">
                        <table id="riwayat" class="table display dataTable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Alasan</th>
                                    <th>Pergi-Kembali</th>
                                    <th>Telat</th>
                                    <th>Denda</th>
                                    <th>Lunas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jack Nixon</td>
                                    <td>Magang</td>
                                    <td>11/14/2023-12/14/2023</td>
                                    <td>2 hari</td>
                                    <td>Rp 20.000</td>
                                    <td>checkbox</td>
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