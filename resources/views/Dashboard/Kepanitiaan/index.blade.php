@extends('layouts.main')
@section('container')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                    Tambah Panitia
                </button>

                <div class="modal fade" id="modal-primary">
                    <div class="modal-dialog">
                        <form action={{ URL::asset('/kepanitiaan') }} method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Panitia</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="nama">Nama lengkap <b style="color: red">*</b></label>
                                        <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap"
                                            required name="namap">
                                    </div>
                                    <div class="form-group">
                                        <label for="nba">Nomor Bangku Anggota IPM</label>
                                        <input type="text" class="form-control" id="nba" name="nbap"
                                            placeholder="00.00.00000">
                                    </div>
                                    <div class="form-group">
                                        <label for="nba">Nomor Wa <b style="color: red">*</b></label>
                                        <input type="number" class="form-control" id="wa" name="wap"
                                            placeholder="0000-0000-0000" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nba">Jenis Kelamin <b style="color: red">*</b></label>
                                        <select class="custom-select form-control-border" aria-label="jk" name="jkp"
                                            required>
                                            <option selected>Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki </option>
                                            <option value="Perempuan">Perempuan</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nba">Jabatan Kepanitiaan <b style="color: red">*</b></label>
                                        <select class="custom-select form-control-border" aria-label="jk" name="jp"
                                            required>
                                            <option selected="selected">Pilih Jabatan</option>
                                            <option value="Ketua Panitia">Ketua Panitia</option>
                                            <option value="Sekretaris Panitia">Sekretaris Panitia</option>
                                            <option value="Bendahara Panitia">Bendahara Panitia</option>
                                            <option value="Devisi Acara">Devisi Acara</option>
                                            <option value="Devisi Konsumsi">Devisi Konsumsi</option>
                                            <option value="Devisi Pendanaan">Devisi Pendanaan</option>
                                            <option value="Devisi Humas">Devisi Humas</option>
                                            <option value="Devisi Perlengkapan">Devisi Perlengkapan</option>
                                            <option value="Devisi Dokumentasi">Devisi Dokumentasi</option>
                                            <option value="Anggota Acara">Anggota Acara</option>
                                            <option value="Anggota Konsumsi">Anggota Konsumsi</option>
                                            <option value="Anggota Pendanaan">Anggota Pendanaan</option>
                                            <option value="Anggota Humas">Anggota Humas</option>
                                            <option value="Anggota Perlengkapan">Anggota Perlengkapan</option>
                                            <option value="Anggota Dokumentasi">Anggota Dokumentasi</option>



                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputgambar">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambarp"
                                                    name="gambarp">
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
                    @foreach ($panitia as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->nama }}
                            </td>
                            <td class="d-none">{{ $p->nba }}</td>
                            <td class="d-none">{{ $p->wa }}</td>
                            <td class="d-none">{{ $p->jk }}</td>
                            <td>{{ $p->jabatan }}</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a class="btn btn-info" data-toggle="modal"
                                        data-target="#view{{ $p->id }}"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-eye-fill"
                                            viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                        </svg></a>





                                </div>



                                <div class="btn-group btn-group-sm">
                                    <a class="btn btn-info" data-toggle="modal" <?php $ubah = encrypt($p->id); ?>
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
                                <div class="modal fade" id="view{{ $p->id }}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Data personal Panitia</h4>
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
                                                            <h3 class="widget-user-username text-right">{{ $p->nama }}

                                                            </h3>
                                                            <h5 class="widget-user-desc text-right">{{ $p->jabatan }}
                                                            </h5>
                                                        </div>
                                                        <div class="widget-user-image">
                                                            <img class="img-circle"
                                                                src={{ URL::asset('Assets/images/panitia/' . $p->foto) }}
                                                                alt="peserta">

                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="row">
                                                                <div class="col-sm-4 border-right">
                                                                    <div class="description-block">
                                                                        <?php $del = encrypt($p->id); ?>
                                                                        <form
                                                                            action={{ URL::asset('kepanitiaan/' . $del) }}
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
                                                                            <a href="https://api.whatsapp.com/send?phone={{ $p->wa }}&text=Assalamualaikum%20{{ $p->nama }}%2C%20{{ $p->jabatan }}"
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
                                                                        <dd>{{ $p->nama }} </dd>
                                                                        <dt>NBA</dt>
                                                                        <dd>{{ $p->nba }}</dd>

                                                                        <dt>No Wa</dt>
                                                                        <dd>{{ $p->wa }}
                                                                        </dd>
                                                                        <dt>Jenis Kelamin</dt>
                                                                        <dd>{{ $p->jk }}</dd>
                                                                        <dt>Jabatan</dt>
                                                                        <dd>{{ $p->jabatan }}</dd>
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
                                        <form action={{ URL::asset('/kepanitiaan/'.$p->id) }} method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Panitia</h4>
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
                                                            placeholder="Nama Lengkap" required name="namap"
                                                            value="{{ $p->nama }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nba">Nomor Bangku Anggota IPM</label>
                                                        <input type="text" class="form-control" id="nba"
                                                            name="nbap" placeholder="00.00.00000"
                                                            value="{{ $p->nba }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nba">Nomor Wa <b style="color: red">*</b></label>
                                                        <input type="text" class="form-control" id="wa"
                                                            name="wap" placeholder="0000-0000-0000" required
                                                            value="{{ $p->wa }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nba">Jenis Kelamin <b
                                                                style="color: red">*</b></label>
                                                        <select class="custom-select form-control-border" aria-label="jk"
                                                            name="jkp" required>

                                                            <option selected>Pilih Jenis Kelamin</option>


                                                            @switch($p->jk)
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
                                                        <label for="nba">Jabatan Kepanitiaan <b
                                                                style="color: red">*</b></label>
                                                        <select class="custom-select form-control-border" aria-label="jk"
                                                            name="jp" required>
                                                            <option selected value="{{ $p->jabatan }}">
                                                                {{ $p->jabatan }}</option>
                                                            <option value="Ketua Panitia">Ketua Panitia</option>
                                                            <option value="Sekretaris Panitia">Sekretaris Panitia</option>
                                                            <option value="Bendahara Panitia">Bendahara Panitia</option>
                                                            <option value="Devisi Acara">Devisi Acara</option>
                                                            <option value="Devisi Konsumsi">Devisi Konsumsi</option>
                                                            <option value="Devisi Pendanaan">Devisi Pendanaan</option>
                                                            <option value="Devisi Humas">Devisi Humas</option>
                                                            <option value="Devisi Perlengkapan">Devisi Perlengkapan
                                                            </option>
                                                            <option value="Devisi Dokumentasi">Devisi Dokumentasi</option>
                                                            <option value="Anggota Acara">Anggota Acara</option>
                                                            <option value="Anggota Konsumsi">Anggota Konsumsi</option>
                                                            <option value="Anggota Pendanaan">Anggota Pendanaan</option>
                                                            <option value="Anggota Humas">Anggota Humas</option>
                                                            <option value="Anggota Perlengkapan">Anggota Perlengkapan
                                                            </option>
                                                            <option value="Anggota Dokumentasi">Anggota Dokumentasi
                                                            </option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputgambar">File input</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input"
                                                                    id="gambarp" name="gambarp">
                                                                <label class="custom-file-label" for="inputgambar">
                                                                    {{ $p->foto }}</label>
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
                        <th>Total Kepanitiaan : {{ $total }} Orang</th>
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
