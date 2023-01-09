@extends('layouts.main')
@section('container')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                    Tambah Fasilitator
                </button>

                <div class="modal fade" id="modal-primary">
                    <div class="modal-dialog">
                        <form action={{ URL::asset('/fasilitator') }} method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah fasilitator</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="nama">Nama lengkap <b style="color: red">*</b></label>
                                        <input type="text" class="form-control" id="namaf" placeholder="Nama Lengkap"
                                            required name="namaf">
                                    </div>
                                    <div class="form-group">
                                        <label for="nba">Nomor Bangku Anggota IPM</label>
                                        <input type="text" class="form-control" id="nba" name="nbaf"
                                            placeholder="00.00.00000">
                                    </div>
                                    <div class="form-group">
                                        <label for="nba">Nomor Wa <b style="color: red">*</b></label>
                                        <input type="number" class="form-control" id="wa" name="waf"
                                            placeholder="0000-0000-0000" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nba">Jenis Kelamin <b style="color: red">*</b></label>
                                        <select class="custom-select form-control-border" aria-label="jk" name="jkf"
                                            required>
                                            <option selected>Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki </option>
                                            <option value="Perempuan">Perempuan</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nba">Jabatan Fasilitator <b style="color: red">*</b></label>
                                        <select class="custom-select form-control-border" aria-label="jk" name="jf"
                                            required>
                                            <option selected="selected">Pilih Jabatan</option>
                                            <option value="Master Of Training">Master Of Training</option>
                                            <option value="As MOT">As.MOT ( Assisten MOT )
                                            </option>
                                            <option value="Imam Of Training">IOT ( Imam Of Training )
                                            </option>
                                            <option value="Master Of Game">MOG ( Master Of Game )</option>
                                            <option value="Tim Obeserver">Tim observer</option>
                                            <option value="Tim Notulis">Tim Notulis</option>
                                            <option value="Tim Moderator">Tim Moderator </option>
                                            <option value="Fasilitator Pemateri">Fasilitator Pemateri
                                            </option>
                                            <option value="Fasilitator Pendamping">Fasilitator Pendamping
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Fasilitator pendamping</label>
                                        <input type="text" class="form-control" id="pendampingf" placeholder="Nama Fasilitator pendamping"
                                             name="pendampingf">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputgambar">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambarf"
                                                    name="gambarf">
                                                <label class="custom-file-label" for="inputgambar">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save Data</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </form>
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </h3>


        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th class="d-none">NBA</th>
                        <th class="d-none">No Wa</th>
                        <th class="d-none">Jenis Kelamin</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fasilitator as $f)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $f->nama }}
                            </td>
                            <td class="d-none">{{ $f->nba }}</td>
                            <td class="d-none">{{ $f->wa }}</td>
                            <td class="d-none">{{ $f->jk }}</td>
                            <td>{{ $f->jabatan }}</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a class="btn btn-info" data-toggle="modal"
                                        data-target="#view{{ $f->id }}"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-eye-fill"
                                            viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                        </svg></a>





                                </div>



                                <div class="btn-group btn-group-sm">
                                    <a class="btn btn-info" data-toggle="modal" <?php $ubah = encrypt($f->id); ?>
                                        data-target="#ubah{{ $ubah }}"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor"
                                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></a>





                                </div>




                            </td>




                        </tr>

                         {{-- modal --}}
                                <div class="modal fade" id="view{{ $f->id }}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Data personal Fasilitator</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col">
                                                    <!-- Widget: user widget style 1 -->
                                                    <div class="card card-widget widget-user shadow-lg">
                                                        <!-- Add the bg color to the header using any of the bg-* classes -->
                                                        <div class="widget-user-header text-white"
                                                            style="background: url('Assets/dist/img/photo1.png') center center;">
                                                            <h3 class="widget-user-username text-right">{{ $f->nama }}

                                                            </h3>
                                                            <h5 class="widget-user-desc text-right">{{ $f->jabatan }}
                                                            </h5>
                                                        </div>
                                                        <div class="widget-user-image">
                                                            <img class="img-circle"
                                                                src={{ URL::asset('Assets/images/fasilitator/' . $f->foto) }}
                                                                alt="fasilitator">

                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="row">
                                                                <div class="col-sm-4 border-right">
                                                                    <div class="description-block">
                                                                        <?php $del = encrypt($f->id); ?>
                                                                        <form
                                                                            action={{ URL::asset('fasilitator/' . $del) }}
                                                                            method="post">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <h5 class="description-header">
                                                                                <button class="btn" type="submit"
                                                                                    onclick="return confirm('apakah Anda Yakin ?')"><i
                                                                                        class="fa-solid fa-delete-left"></i></button>
                                                                            </h5>
                                                                        </form>
                                                                        <span class="description-text">DELETE</span>
                                                                    </div>
                                                                    <!-- /.description-block -->
                                                                </div>
                                                                <!-- /.col -->
                                                                <div class="col-sm-4 border-right">
                                                                    <div class="description-block">
                                                                        <h5 class="description-header">

                                                                        </h5>
                                                                        <span class="description-text"></span>
                                                                    </div>
                                                                    <!-- /.description-block -->
                                                                </div>
                                                                <!-- /.col -->
                                                                <div class="col-sm-4 border-right">
                                                                    <div class="description-block">
                                                                        <h5 class="description-header">
                                                                            <a href="https://api.whatsapp.com/send?phone={{ $f->wa }}&text=Assalamualaikum%20{{ $f->namap }}%2C%20{{ $f->jp }}"
                                                                                target="_blank"><i
                                                                                    class="fa-brands fa-whatsapp"></i></a>
                                                                        </h5>
                                                                        <span class="description-text">CHAT</span>
                                                                    </div>
                                                                    <!-- /.description-block -->
                                                                </div>
                                                                <!-- /.col -->
                                                            </div>
                                                            <!-- /.row -->
                                                        </div>
                                                    </div>
                                                    <!-- /.widget-user -->
                                                </div>
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h3 class="card-title">
                                                                        <i class="fa-solid fa-circle-info"></i>
                                                                        Information
                                                                    </h3>
                                                                </div>
                                                                <!-- /.card-header -->
                                                                <div class="card-body">
                                                                    <dl>
                                                                        <dt>Nama Lengkap</dt>
                                                                        <dd>{{ $f->nama }} </dd>
                                                                        <dt>NBA</dt>
                                                                        <dd>{{ $f->nba }}</dd>

                                                                        <dt>No Wa</dt>
                                                                        <dd>{{ $f->wa }}
                                                                        </dd>
                                                                        <dt>Jenis Kelamin</dt>
                                                                        <dd>{{ $f->jk }}</dd>
                                                                        <dt>Jabatan</dt>
                                                                        <dd>{{ $f->jabatan }}</dd>
                                                                        </d>
                                                                </div>
                                                                <!-- /.card-body -->
                                                            </div>
                                                            <!-- /.card -->
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>

                                {{-- akhir modal --}}

                                 {{-- modal ubah --}}
                                <div class="modal fade" id="ubah{{ $ubah }}">
                                    <div class="modal-dialog">
                                        <form action={{ URL::asset('/fasilitator/' . $f->id) }} method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Fasilitator</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="nama">Nama lengkap <b
                                                                style="color: red">*</b></label>
                                                        <input type="text" class="form-control" id="nama"
                                                            placeholder="Nama Lengkap" required name="namaf"
                                                            value="{{ $f->nama }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nba">Nomor Bangku Anggota IPM</label>
                                                        <input type="text" class="form-control" id="nba"
                                                            name="nbaf" placeholder="00.00.00000"
                                                            value="{{ $f->nba }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nba">Nomor Wa <b style="color: red">*</b></label>
                                                        <input type="text" class="form-control" id="wa"
                                                            name="waf" placeholder="0000-0000-0000" required
                                                            value="{{ $f->wa }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nba">Jenis Kelamin <b
                                                                style="color: red">*</b></label>
                                                        <select class="custom-select form-control-border" aria-label="jk"
                                                            name="jkf" required>

                                                            <option selected>Pilih Jenis Kelamin</option>


                                                            @switch($f->jk)
                                                                @case('laki-laki')
                                                                    <option selected value="laki-laki">laki-laki</option>
                                                                    <option value="perempuan">perempuan</option>
                                                                @break

                                                                @case('perempuan')
                                                                    <option value="laki-laki">laki-laki</option>
                                                                    <option selected value="perempuan">Perempuan</option>
                                                                @break

                                                                @default
                                                            @endswitch







                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nba">Jabatan Fasilitator <b
                                                                style="color: red">*</b></label>
                                                        <select class="custom-select form-control-border" aria-label="jk"
                                                            name="jf" required>
                                                            <option selected value="{{ $f->jabatan }}">
                                                                {{ $f->jabatan }}</option>
                                                            <option value="Master Of Training">Master Of Training</option>
                                                            <option value="As MOT">As.MOT ( Assisten MOT )
                                                            </option>
                                                            <option value="Imam Of Training">IOT ( Imam Of Training )
                                                            </option>
                                                            <option value="Master Of Game">MOG ( Master Of Game )</option>
                                                            <option value="Tim Obeserver">Tim observer</option>
                                                            <option value="Tim Notulis">Tim Notulis</option>
                                                            <option value="Tim Moderator">Tim Moderator </option>
                                                            <option value="Fasilitator Pemateri">Fasilitator Pemateri
                                                            </option>
                                                            <option value="Fasilitator Pendamping">Fasilitator Pendamping
                                                            </option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputgambar">File input</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input"
                                                                    id="gambarf" name="gambarf" value="{{ $f->foto }}">

                                                                <label class="custom-file-label" for="inputgambar">
                                                                    {{ $f->foto }}</label>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">Upload</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">change Data</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </form>
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                {{-- akhir --}}


                    @endforeach


                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Total Fasilitator : {{ $total }} Orang</th>
                        <th class="d-none"></th>
                        <th class="d-none"></th>
                        <th class="d-none">/th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
