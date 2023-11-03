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
                            @foreach ($konfirmasi as $row)
                            <tr>
                              <td>{{ $row -> santri -> name }}</td>
                              <td>{{ $row -> reason }}</td>
                              <td>{{ $row -> finish_date }}</td>
                              <td>
                                <button onclick="getIds({{ $row->id }})" class="btn btn-success" data-toggle="modal" data-target="#datangModal">konfirmasi</button>
                              </td>
                            </tr>    
                            @endforeach
                            
                          </tbody>
                        </table>                                
                      </div>
                    
                      <div class="tab-pane fade" id="riwayat" role="tabpanel" aria-labelledby="riwayat-tab">
                        <table id="riwayat" class="table display dataTable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Alasan</th>
                                    <th>Pergi</th>
                                    <th>Kembali</th>
                                    <th>Telat</th>
                                    <th>Denda</th>
                                    <th>Lunas</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($riwayat as $row)
                              <tr>
                                <td>{{ $row -> santri -> name }}</td>
                                <td>{{ $row -> reason }}</td>
                                <td>{{ $row -> start_date }}</td>
                                <td>{{ $row -> finish_date }}</td>
                                <td>{{ $row -> late }}</td>
                                <td>{{ $row -> charge}}</td>
                                <td></td>
                              </tr>
                              @endforeach
                                
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
{{-- Kedatangan Modal --}}
<div class="modal fade" id="datangModal" tabindex="-1" role="dialog" aria-labelledby="liburModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Kedatangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('izin.konfirmasi') }}" method="POST">
            <div class="modal-body">
                <p>Yakin???</p>
                    @csrf
                    @method('put')
                    <input id="id" name="id" value="" type="hidden">
                    <input id="date" name="date" value="" type="hidden" value="{{ date('Y-m-d') }}">
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">OK</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection