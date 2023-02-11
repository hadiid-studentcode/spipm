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
                    </button>


                </div>
            </h3>
            <!-- /.modal -->

            <div class="modal fade" id="materi">
                <div class="modal-dialog">
                    <form action="{{ URL::asset('/materi') }}" method="post">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Pilih Materi</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hari</label>
                                    <input type="date" class="form-control" id="hari" name="hari">
                                </div>
                                <div class="form-group">
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
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectBorder">Materi</label>
                                    <select class="custom-select form-control-border" id="exampleSelectBorder"
                                        name="materi">
                                        <option selected>Pilih Materi</option>
                                        <option>Value 1</option>
                                        <option>Value 2</option>
                                        <option>Value 3</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="exampleSelectBorder">Fasilitator</label>
                                    <select class="custom-select form-control-border" id="exampleSelectBorder"
                                        name="pemateri">
                                        <option selected>Pilih Fasilitator</option>
                                        <option>Value 1</option>
                                        <option>Value 2</option>
                                        <option>Value 3</option>
                                    </select>
                                </div>


                            </div>
                            <!-- /.card-body -->




                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

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
                    <th>Fasilitator</th>


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






                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
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
