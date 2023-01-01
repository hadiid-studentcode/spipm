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
                                        <select class="custom-select form-control-border" aria-label="jk" name="jkp" required>
                                            <option selected>Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki </option>
                                            <option value="Perempuan">Perempuan</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nba">Jabatan Kepanitiaan <b style="color: red">*</b></label>
                                        <select class="custom-select form-control-border" aria-label="jk" name="jp" required>
                                            <option selected="selected">Pilih Jabatan</option>
                                            <option value="Ketua Panitia">Ketua Panitia</option>
                                            <option value="Sekretaris Panitia">Sekretaris Panitia</option>
                                            <option value="Bendahara Panitia" >Bendahara Panitia</option>
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
                    <tr>
                        <td>1</td>
                        <td>Hadiid Andri Yulison
                        </td>
                        <td class="d-none">Win 95+</td>
                        <td class="d-none">4</td>
                        <td class="d-none">X</td>
                        <td>Ketua Panitia</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a class="btn btn-info" data-toggle="modal" data-target="#view"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg></a>

                                {{-- modal --}}
                                <div class="modal fade" id="view">
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
                                                            <h3 class="widget-user-username text-right">Hadiid Andri
                                                                Yulison
                                                            </h3>
                                                            <h5 class="widget-user-desc text-right">Ketua Panitia</h5>
                                                        </div>
                                                        <div class="widget-user-image">
                                                            <img class="img-circle"
                                                                src={{ URL::asset('Assets/images/peserta1.jpg') }}
                                                                alt="peserta">

                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="row">
                                                                <div class="col-sm-4 border-right">
                                                                    <div class="description-block">
                                                                        <h5 class="description-header">
                                                                            <a href="#"><i
                                                                                    class="fa-solid fa-delete-left"></i></a>
                                                                        </h5>
                                                                        <span class="description-text">DELETE</span>
                                                                    </div>
                                                                    <!-- /.description-block -->
                                                                </div>
                                                                <!-- /.col -->
                                                                <div class="col-sm-4 border-right">
                                                                    <div class="description-block">
                                                                        <h5 class="description-header">
                                                                            <a href="https://api.whatsapp.com/send?phone=6289620569613&text=Assalamualaikum%20Hadiid%20Andri%20Yulison%2C%20Ketua%20Panitia%2C"
                                                                                target="_blank"><i
                                                                                    class="fa-brands fa-whatsapp"></i></a>
                                                                        </h5>
                                                                        <span class="description-text">CHAT</span>
                                                                    </div>
                                                                    <!-- /.description-block -->
                                                                </div>
                                                                <!-- /.col -->
                                                                <div class="col-sm-4">
                                                                    <div class="description-block">
                                                                        <h5 class="description-header">
                                                                            <a href="#">
                                                                                <i class="fa-solid fa-star"></i>
                                                                            </a>
                                                                        </h5>
                                                                        <span class="description-text">RATING</span>
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
                                                                        <dd>Hadiid Andri Yulison </dd>
                                                                        <dt>NBA</dt>
                                                                        <dd>0000-0000-0000</dd>

                                                                        <dt>No Wa</dt>
                                                                        <dd>+6289620569613
                                                                        </dd>
                                                                        <dt>Jenis Kelamin</dt>
                                                                        <dd>Laki - Laki</dd>
                                                                        <dt>Jabatan</dt>
                                                                        <dd>Ketua Panitia</dd>
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
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>

                                {{-- akhir modal --}}

                            </div>


                        </td>
                    </tr>


                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Total Kepanitiaan : 20 Orang</th>
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
