@extends('layouts.main')
@section('container')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                    Tambah Peserta
                </button>

                <div class="modal fade" id="modal-primary">
                    <div class="modal-dialog">
                        <form action={{ URL::asset('/peserta') }} method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Peserta</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="nama">Nama lengkap <b style="color: red">*</b></label>
                                        <input type="text" class="form-control" id="namapes" placeholder="Nama Lengkap"
                                            required name="namapes">
                                    </div>
                                    <div class="form-group">
                                        <label for="nba">Utusan <b style="color: red">*</b></label>
                                        <select class="custom-select form-control-border" aria-label="jk" name="utusanpes"
                                            required>
                                            <option selected="selected">Pilih Utusan</option>
                                            <option value="smkmuti">SMK muti</option>
                                            <option value="smkmuda">smk muda</option>
                                            <option value="smkmutu">smk mutu</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nba">Nomor Wa <b style="color: red">*</b></label>
                                        <input type="number" class="form-control" id="wapes" name="wapes"
                                            placeholder="0000-0000-0000" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nba">Jenis Kelamin <b style="color: red">*</b></label>
                                        <select class="custom-select form-control-border" aria-label="jk" name="jkpes"
                                            required>
                                            <option selected>Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki </option>
                                            <option value="Perempuan">Perempuan</option>

                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputgambar">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambarpes"
                                                    name="gambarpes">
                                                <label class="custom-file-label" for="gambarpes">Choose file</label>
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
                        <th>Nama Peserta</th>
                        <th>Utusan</th>
                        <th class="d-none">No Wa</th>
                        <th class="d-none">Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peserta as $pes)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pes->nama }}
                            </td>
                            <td>{{ $pes->utusan }}</td>
                            <td class="d-none">{{ $pes->wa }}</td>
                            <td class="d-none">{{ $pes->jk }}</td>

                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a class="btn btn-info" data-toggle="modal" data-target="#view{{ $pes->id }}"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                        </svg></a>





                                </div>



                                <div class="btn-group btn-group-sm">
                                    <a class="btn btn-info" data-toggle="modal" <?php $ubah = encrypt($pes->id); ?>
                                        data-target="#ubah{{ $ubah }}"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-pencil-square"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></a>





                                </div>




                            </td>




                        </tr>

                        {{-- modal --}}
                        <div class="modal fade" id="view{{ $pes->id }}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Data personal Peserta</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                                    <h3 class="widget-user-username text-right">{{ $pes->nama }}

                                                    </h3>
                                                    <h5 class="widget-user-desc text-right">{{ $pes->utusan }}
                                                    </h5>
                                                </div>
                                                <div class="widget-user-image">
                                                    <img class="img-circle"
                                                        src={{ URL::asset('Assets/images/peserta/' . $pes->foto) }}
                                                        alt="peserta">

                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-sm-4 border-right">
                                                            <div class="description-block">
                                                                <?php $del = encrypt($pes->id); ?>
                                                                <form action={{ URL::asset('peserta/' . $del) }}
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
                                                                    <a href="https://api.whatsapp.com/send?phone={{ $pes->wa }}&text=Assalamualaikum%20{{ $pes->nama }}%2C%20{{ $pes->utusan }}"
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
                                                                <dd>{{ $pes->nama }} </dd>
                                                                <dt>NBA</dt>
                                                                <dd>{{ $pes->utusan }}</dd>

                                                                <dt>No Wa</dt>
                                                                <dd>{{ $pes->wa }}
                                                                </dd>
                                                                <dt>Jenis Kelamin</dt>
                                                                <dd>{{ $pes->jk }}</dd>

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
                                <form action={{ URL::asset('/peserta/' . $pes->id) }} method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Ubah Peserta</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="nama">Nama lengkap <b style="color: red">*</b></label>
                                                <input type="text" class="form-control" id="namapes"
                                                    placeholder="Nama Lengkap" required name="namapes"
                                                    value="{{ $pes->nama }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nba">Utusan <b style="color: red">*</b></label>
                                                <select class="custom-select form-control-border" aria-label="jk"
                                                    name="utusanpes" required>
                                                    <option value="{{ $pes->utusan }}" selected="selected">{{ $pes->utusan }}</option>
                                                    <option value="smkmuti">SMK muti</option>
                                                    <option value="smkmuda">smk muda</option>
                                                    <option value="smkmutu">smk mutu</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="nba">Nomor Wa <b style="color: red">*</b></label>
                                                <input type="text" class="form-control" id="wapes" name="wapes"
                                                    placeholder="0000-0000-0000" required value="{{ $pes->wa }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nba">Jenis Kelamin <b style="color: red">*</b></label>
                                                <select class="custom-select form-control-border" aria-label="jk"
                                                    name="jkpes" required>

                                                    <option selected>Pilih Jenis Kelamin</option>


                                                    @switch($pes->jk)
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
                                                <label for="inputgambar">File input</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="gambarpes"
                                                            name="gambarpes" value="{{ $pes->foto }}">

                                                        <label class="custom-file-label" for="inputgambar">
                                                            {{ $pes->foto }}</label>
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
                        <th>Total Peserta : {{ $total }} Orang</th>
                        <th class="d-none"></th>
                        <th class="d-none"></th>
                        <th class="d-none">/th>

                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
