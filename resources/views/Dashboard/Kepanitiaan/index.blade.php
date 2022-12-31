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
                                        placeholder="0000-0000-0000" value="">
                                </div>
                                <div class="form-group">
                                    <label for="nba">Jenis Kelamin <b style="color: red">*</b></label>
                                    <select class="custom-select form-control-border" aria-label="jk" name="jkp">
                                        <option selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki - laki">Laki - laki </option>
                                        <option value="Perempuan">Perempuan</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nba">Jabatan Kepanitiaan <b style="color: red">*</b></label>
                                    <select class="custom-select form-control-border" aria-label="jk" name="jp">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>



                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                name="gambarp">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save Data</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
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
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td class="d-none">Win 95+</td>
                        <td class="d-none">4</td>
                        <td class="d-none">X</td>
                        <td>s</td>
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
                                                            <h3 class="widget-user-username text-right">Elizabeth Pierce
                                                            </h3>
                                                            <h5 class="widget-user-desc text-right">Web Designer</h5>
                                                        </div>
                                                        <div class="widget-user-image">
                                                            <img class="img-circle"
                                                                src="Assets/dist/img/user3-128x128.jpg" alt="User Avatar">
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="row">
                                                                <div class="col-sm-4 border-right">
                                                                    <div class="description-block">
                                                                        <h5 class="description-header">
                                                                            <a href="#"><i class="fa-solid fa-delete-left"></i></a>
                                                                        </h5>
                                                                        <span class="description-text">DELETE</span>
                                                                    </div>
                                                                    <!-- /.description-block -->
                                                                </div>
                                                                <!-- /.col -->
                                                                <div class="col-sm-4 border-right">
                                                                    <div class="description-block">
                                                                        <h5 class="description-header">
                                                                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
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
                                                                        <dt>Description lists</dt>
                                                                        <dd>A description list is perfect for defining
                                                                            terms.</dd>
                                                                        <dt>Euismod</dt>
                                                                        <dd>Vestibulum id ligula porta felis euismod semper
                                                                            eget lacinia odio sem nec elit.</dd>
                                                                        <dd>Donec id elit non mi porta gravida at eget
                                                                            metus.</dd>
                                                                        <dt>Malesuada porta</dt>
                                                                        <dd>Etiam porta sem malesuada magna mollis euismod.
                                                                        </dd>
                                                                    </dl>
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
