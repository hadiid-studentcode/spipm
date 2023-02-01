<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.link')
    <!-- BS Stepper -->
    <link rel="stylesheet" href={{ URL::asset('/assets/plugins/bs-stepper/css/bs-stepper.min.css') }}>

</head>

<body>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Tambahkan Silabus</h3>
                </div>
                <form action={{ URL::asset('/silabus') }} method="post">
                    @csrf
                    <div class="card-body p-0">
                        <div class="bs-stepper">
                            <div class="bs-stepper-header" role="tablist">
                                <!-- your steps here -->
                                <div class="step" data-target="#logins-part">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="logins-part" id="logins-part-trigger">
                                        <span class="bs-stepper-circle">1</span>
                                        <span class="bs-stepper-label">Create Silabus</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#information-part">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="information-part" id="information-part-trigger">
                                        <span class="bs-stepper-circle">2</span>
                                        <span class="bs-stepper-label">Various information</span>
                                    </button>
                                </div>
                            </div>
                            <div class="bs-stepper-content">
                                <!-- your steps content here -->
                                <div id="logins-part" class="content" role="tabpanel"
                                    aria-labelledby="logins-part-trigger">
                                    <div class="form-group">
                                        <label for="jenis">Silabus</label>
                                        <select class="form-control select2" style="width: 100%;" name="jenisslb"
                                            id="jenisslb">
                                            <option selected="selected">Pilih Jenis Silabus</option>
                                            <option value="LDPR">LDPR</option>
                                            <option value="TM1">TM1</option>
                                            <option value="TM2">TM2</option>
                                            <option value="TM3">TM3</option>
                                            <option value="PFP1">PFP1</option>
                                            <option value="PFP2">PFP2</option>
                                            <option value="FORTASI">FORTASI</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama Materi</label>
                                        <input type="text" class="form-control" id="nmmateri" name="nmmateri">
                                    </div>
                                    <div class="btn btn-primary" onclick="stepper.next()">Next</div>
                                </div>
                                <div id="information-part" class="content" role="tabpanel"
                                    aria-labelledby="information-part-trigger">
                                    <div class="form-group">
                                        <label for="skompensi">Standar Kompetensi</label>
                                        <textarea class="form-control" name="standkomp" id="standkomp" cols="1" rows="1" style="height: 77px"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="skompensi">Kompetensi Dasar</label>
                                        <textarea class="form-control" name="kompdasar" id="kompdasar" cols="1" rows="1" style="height: 77px"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="skompensi">Indikator</label>
                                        <textarea class="form-control" name="idkt" id="idkt" cols="1" rows="1" style="height: 77px"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="skompensi">Materi Pokok ( nama materi) </label>
                                        <textarea class="form-control" name="mpokok" id="mpokok" cols="1" rows="1" style="height: 77px"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="skompensi">Stategi Pembelajaran</label>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox1" name="stp1"
                                                value="Ceramah Bervariasi">
                                            <label for="customCheckbox1" class="custom-control-label">Ceramah
                                                Bervariasi</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox2" name="stp2"
                                                value="Metode Demontrasi">
                                            <label for="customCheckbox2" class="custom-control-label">Metode
                                                demontrasi</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox3" name="stp3"
                                                value="Metode Diskusi">
                                            <label for="customCheckbox3" class="custom-control-label">Metode
                                                diskusi</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox4" name="stp4"
                                                value="Metode Tugas dan Resitasi">
                                            <label for="customCheckbox4" class="custom-control-label">Metode tugas dan
                                                resitasi</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox5" name="stp5"
                                                value="Metode Tanya Jawab">
                                            <label for="customCheckbox5" class="custom-control-label">Metode tanya
                                                jawab</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox6" name="stp6"
                                                value="Metode Kerja Kelompok">
                                            <label for="customCheckbox6" class="custom-control-label">Metode kerja
                                                kelompok</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox7" name="stp7"
                                                value="Metode Problem Solving">
                                            <label for="customCheckbox7" class="custom-control-label">Metode problem
                                                solving
                                            </label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox8" name="stp8"
                                                value="Metode Sistem regu ( Team Teaching )">
                                            <label for="customCheckbox8" class="custom-control-label">Metode sistem
                                                regu (
                                                team teaching )

                                            </label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox9" name="stp9"
                                                value="Metode Karyawisata">
                                            <label for="customCheckbox9" class="custom-control-label">Metode
                                                karyawisata

                                            </label>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="skompensi">SKS </label>
                                        <textarea class="form-control" name="sks" id="sks" cols="1" rows="1" style="height: 77px"></textarea>
                                    </div>
                                      <div class="form-group">
                                        <label for="skompensi">Referensi / Acuan </label>
                                        <textarea class="form-control" name="referenc" id="sks" cols="1" rows="1" style="height: 77px"></textarea>
                                    </div>
                                      <div class="form-group">
                                        <label for="skompensi">Penilaian </label>
                                        <textarea class="form-control" name="nilai" id="sks" cols="1" rows="1" style="height: 77px"></textarea>
                                    </div>
                                    <div class="btn btn-primary" onclick="stepper.previous()">Previous</div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /.card-body -->
                <div class="card-footer">
                    Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a>
                    for more examples and information about the plugin.
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>



    @include('layouts.script')
    <!-- BS-Stepper -->
    <script src={{ URL::asset('/assets/plugins/bs-stepper/js/bs-stepper.min.js') }}></script>


    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })


            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
</body>

</html>
