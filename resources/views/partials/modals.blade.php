{{-- MODALS --}}

{{-- kegiatan modal --}}
<!-- Modal -->

<div class="modal fade" id="kegiatanModal"  tabindex="-1"  role="dialog" aria-labelledby="kegiatanModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Perizinan Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('izin.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- text input -->
                    <div class="form-group">
                        <label>NIS</label>
                        <br>
                        <select id="nis" class="form-control" name='nis' style="width: 100%">
                            <option value="">--pilih santri--</option>
                            @foreach ($santri as $row)
                                <option value="{{ $row['nis'] }}">{{ $row['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Jenis Kegiatan</label>
                        <select id="id_act" class="form-control" name='id_act' onchange="change()">
                            <option value="BD">Bandongan</option>
                            <option value="AQ">Ngaji Al-Qur'an</option>
                            <option value="MH">Mujahadah</option>
                            <option value="MD">Madrasah Diniyah</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tanggal:</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="date" name='date' id="datemask" class="form-control"
                                data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask=""
                                inputmode="numeric">
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label>Alasan</label>
                        <input type="text" name='reason' class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Pergi modal --}}
<!-- Modal -->
<div class="modal fade" id="pergiModal" tabindex="-1" role="dialog" aria-labelledby="pergiModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Perizinan Pergi 3 hari</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('izin.store2') }}" method="POST">
            <div class="modal-body">

                    {{ csrf_field() }}
                    <!-- text input -->
                    <div class="form-group">
                        <label>NIS</label>
                        <br>
                        <select id="nis2" class="form-control" name='nis' style="width: 100%">
                            <option value="">--pilih santri--</option>
                            @foreach ($santri as $row)
                                <option value="{{ $row['nis'] }}">{{ $row['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tanggal:</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                            </div>
                            <input type="text" name="daterange" class="form-control float-right" id="reservation2">
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label>Alasan</label>
                        <input name='reason' type="text" class="form-control">
                        <input type="hidden" name="type" class="form-control" value="P">
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- Cuti modal --}}
<!-- Modal -->
<div class="modal fade" id="cutiModal" tabindex="-1" role="dialog" aria-labelledby="cutiModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Perizinan Cuti</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('izin.store2') }}" method="POST">
                @csrf
            <div class="modal-body">
                    <!-- text input -->
                    <div class="form-group">
                        <label>NIS</label>
                        <br>
                        <select id="nis3" class="form-control" name='nis' style="width: 100%">
                            <option value="">--pilih santri--</option>
                            @foreach ($santri as $row)
                                <option value="{{ $row['nis'] }}">{{ $row['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tanggal:</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                            </div>
                            <input type="text" name="daterange" class="form-control float-right"
                                id="reservation">
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label>Alasan</label>
                        <input type="text" name="reason" class="form-control">
                        <input type="hidden" name="type" class="form-control" value="C">
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Libur Modal --}}
<div class="modal fade" id="liburModal" tabindex="-1" role="dialog" aria-labelledby="liburModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Libur Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <!-- text input -->
                    <div class="form-group">
                        <label>Jenis Kegiatan</label>
                        <select class="form-control">
                            <option>kegiatan 1</option>
                            <option>kegiatan 2</option>
                            <option>kegiatan 3</option>
                            <option>kegiatan 4</option>
                            <option>kegiatan 5</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tanggal:</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                            </div>
                            <input type="text" name="daterange" class="form-control float-right"
                                id="reservation">
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label>Alasan</label>
                        <input type="text" class="form-control">
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

{{-- Delete Modal --}}
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="liburModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('izin.destroy') }}" method="POST">
            <div class="modal-body">
                <p>Ingin menghapus data ini?</p>
                    @csrf
                    @method('delete')
                    <input id="id" name="id" value="" type="hidden">
                    <input id="tabel" name="tabel" value="" type="hidden">
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>


