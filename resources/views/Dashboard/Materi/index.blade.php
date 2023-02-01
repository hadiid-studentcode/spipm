@extends('layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">




                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-primary" type="button" data-toggle="modal"
                        data-target="#modal-default">Silabus</button>

                    {{-- modal --}}
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-body text-center bg-dark">
                                    <a href={{ URL::asset('/silabus/create') }} target="_blank">
                                        <button class="btn btn-primary">Create Silabus</button>
                                    </a>

                                    <a href={{ URL::asset('/silabus') }} target="_blank">
                                        <button class="btn btn-primary">Views Silabus</button>
                                    </a>
                                </div>

                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    {{-- akhir modal --}}
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#materi">Kelola Rowndown
                    </button </div>


                </div>
            </h3>
            {{-- modal --}}
            <div class="modal fade" id="materi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="{{ URL::asset('/materi') }}" method="post">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pilih Materi</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="hari" class="form-label">Hari</label>
                                    <input type="date" class="form-control" name="hari">
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label class="col-form-label"> Waktu
                                                    Pelaksanaan,<br>Dari:
                                                    <b style="color: red">*</b></label>
                                                <input type="time" class="form-control" name="wdari" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label"> Waktu
                                                    Pelaksanaan,<br>Sampai:
                                                    <b style="color: red">*</b>
                                                    <input type="time" class="form-control" name="wsampai" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="Materi" class="form-label">Materi / Kegiatan <b
                                            style="color: red">*</b></label>
                                    <select class="form-select" aria-label="Default select example" name="materi"required>
                                        <option selected>Pilih Materi / Kegiatan</option>
                                        @foreach ($silabus as $m)
                                            <option value="<?php echo $m->id; ?>"><?php echo $m->materi; ?></option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="Materi" class="form-label">Penanggung Jawab <b
                                            style="color: red">*</b></label>

                                    <select class="form-select" aria-label="Default select example" name="pj"required>
                                        <option selected>Pilih Penanggung Jawab</option>

                                        @foreach ($pj as $p)
                                            <option value="{{ $p->jabatan }}">{{ $p->jabatan }}</option>
                                        @endforeach
                                        <option value="Panitia">Panitia</option>
                                        <option value="ALL">ALL</option>
                                        <option value="Fasilitator">Fasilitator</option>

                                    </select>

                                </div>
                                <div class="mb-3">
                                    <label for="Materi" class="form-label">Fasilitator Pemateri </label>

                                    <select class="form-select" aria-label="Default select example" name="pemateri">
                                        <option selected>Pilih Fasilitator Pemateri</option>
                                        @foreach ($pemateri as $p)
                                            <option value="<?php echo $p->nama; ?>"><?php echo $p->nama; ?></option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="mb-3">
                                    <label for="Materi" class="form-label">Fasilitator Pendamping</label>
                                    <select class="form-select" aria-label="Default select example" name="pendamping">
                                        <option selected>Pilih Fasilitator Pendamping</option>
                                        @foreach ($pendamping as $pen)
                                            <option value="<?php echo $pen->nama; ?>"><?php echo $pen->nama; ?></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                    </form>
                </div>
            </div>
            {{-- akhir modal --}}

        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Hari/Tanggal</th>
                    <th>Waktu</th>
                    <th>Materi</th>
                    <th>Penanggung Jawab</th>
                    <th>Fasilitator Pemateri</th>
                    <th>Fasilitator Pendamping</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($materi as $m)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ date('d F Y', strtotime($m->hari)) }}</td>
                        <td>{{ $m->waktu_dari }} - {{ $m->waktu_sampai }}</td>
                        <td><?php echo $m->BankMateri->materi; ?></td>
                        <td>{{ $m->PenanggungJawab }}</td>
                        <td>{{ $m->fasilitator_pemateri }}</td>
                        <td>{{ $m->fasilitator_pendamping }}</td>





                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>

                    <th>Total Materi : {{ $jumlah }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
    </div>

    <script>
        function Silabus() {
            let silabus = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
width=0,height=0,left=-1000,top=-1000`;

            open('{{ URL::asset('/materi/create') }}', 'silabus', silabus);
        }
    </script>
@endsection
