<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Silabus Pelatihan Perkaderan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <form action={{ URL::asset('/silabus/jenis') }} method="get">

            <div class="input-group mb-6">
                <select class="form-select" aria-label="Default select example" name="jenis">
                    <option selected>Pilih Silabus</option>
                    <option value="LDPR">LDPR</option>
                    <option value="TM1">TM1</option>
                    <option value="TM2">TM2</option>
                    <option value="TM3">TM3</option>
                    <option value="PFP1">PFP1</option>
                    <option value="PFP2">PFP2</option>
                    <option value="FORTASI">FORTASI</option>


                </select>
                <button class="btn btn-primary" type="submit" id="button-addon2">Pilih</button>
            </div>

        </form>



        {{-- table --}}
        <table class="table mt-4 table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Standar Kompetensi</th>
                    <th scope="col">Kompetensi Dasar</th>
                    <th scope="col">Indikator</th>
                    <th scope="col">Materi</th>
                    <th scope="col">Strategi Pembelajaran</th>
                    <th scope="col">Sks</th>
                    <th scope="col">Referensi Acuan</th>
                    <th scope="col">Penilaian</th>
                </tr>
            </thead>




            <tbody>

                @if ($jenisSilabus == 'LDPR' && $silabus == true)
                    <h1>LDPR</h1>

                    <tr>
                        <td>{{ $silabus->standar_kompetensi }}</td>
                        <td>{{ $silabus->kompetensi_dasar }}</td>
                        <td>{{ $silabus->indikator }}</td>
                        <td>{{ $silabus->nm_materi }} - {{ $silabus->materi_pokok }}</td>
                        <td>{{ $silabus->strategi_pembelajaran }}</td>
                        <td>{{ $silabus->sks }}</td>
                        <td>{{ $silabus->referensi_acuan }}</td>
                        <td>{{ $silabus->penilaian }}</td>
                    </tr>
                @elseif($jenisSilabus == 'TM1' && $silabus == true)
                    <tr>
                        <td>{{ $silabus->standar_kompetensi }}</td>
                        <td>{{ $silabus->kompetensi_dasar }}</td>
                        <td>{{ $silabus->indikator }}</td>
                        <td>{{ $silabus->nm_materi }} - {{ $silabus->materi_pokok }}</td>
                        <td>{{ $silabus->strategi_pembelajaran }}</td>
                        <td>{{ $silabus->sks }}</td>
                        <td>{{ $silabus->referensi_acuan }}</td>
                        <td>{{ $silabus->penilaian }}</td>
                    </tr>
                @elseif($jenisSilabus == 'TM2' && $silabus == true)
                    <tr>
                        <td>{{ $silabus->standar_kompetensi }}</td>
                        <td>{{ $silabus->kompetensi_dasar }}</td>
                        <td>{{ $silabus->indikator }}</td>
                        <td>{{ $silabus->nm_materi }} - {{ $silabus->materi_pokok }}</td>
                        <td>{{ $silabus->strategi_pembelajaran }}</td>
                        <td>{{ $silabus->sks }}</td>
                        <td>{{ $silabus->referensi_acuan }}</td>
                        <td>{{ $silabus->penilaian }}</td>
                    </tr>
                @elseif($jenisSilabus == 'TM3' && $silabus == true)
                    <tr>
                        <td>{{ $silabus->standar_kompetensi }}</td>
                        <td>{{ $silabus->kompetensi_dasar }}</td>
                        <td>{{ $silabus->indikator }}</td>
                        <td>{{ $silabus->nm_materi }} - {{ $silabus->materi_pokok }}</td>
                        <td>{{ $silabus->strategi_pembelajaran }}</td>
                        <td>{{ $silabus->sks }}</td>
                        <td>{{ $silabus->referensi_acuan }}</td>
                        <td>{{ $silabus->penilaian }}</td>
                    </tr>
                @elseif($jenisSilabus == 'PFP1' && $silabus == true)
                    <tr>
                        <td>{{ $silabus->standar_kompetensi }}</td>
                        <td>{{ $silabus->kompetensi_dasar }}</td>
                        <td>{{ $silabus->indikator }}</td>
                        <td>{{ $silabus->nm_materi }} - {{ $silabus->materi_pokok }}</td>
                        <td>{{ $silabus->strategi_pembelajaran }}</td>
                        <td>{{ $silabus->sks }}</td>
                        <td>{{ $silabus->referensi_acuan }}</td>
                        <td>{{ $silabus->penilaian }}</td>
                    </tr>
                @elseif($jenisSilabus == 'PFP2' && $silabus == true)
                    <tr>
                        <td>{{ $silabus->standar_kompetensi }}</td>
                        <td>{{ $silabus->kompetensi_dasar }}</td>
                        <td>{{ $silabus->indikator }}</td>
                        <td>{{ $silabus->nm_materi }} - {{ $silabus->materi_pokok }}</td>
                        <td>{{ $silabus->strategi_pembelajaran }}</td>
                        <td>{{ $silabus->sks }}</td>
                        <td>{{ $silabus->referensi_acuan }}</td>
                        <td>{{ $silabus->penilaian }}</td>
                    </tr>
                @elseif($jenisSilabus == 'FORTASI' && $silabus == true)
                    <tr>
                        <td>{{ $silabus->standar_kompetensi }}</td>
                        <td>{{ $silabus->kompetensi_dasar }}</td>
                        <td>{{ $silabus->indikator }}</td>
                        <td>{{ $silabus->nm_materi }} - {{ $silabus->materi_pokok }}</td>
                        <td>{{ $silabus->strategi_pembelajaran }}</td>
                        <td>{{ $silabus->sks }}</td>
                        <td>{{ $silabus->referensi_acuan }}</td>
                        <td>{{ $silabus->penilaian }}</td>
                    </tr>
                @else
                    <h1></h1>
                @endif


            </tbody>
        </table>
        {{-- akhir table --}}
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>





</body>

</html>
