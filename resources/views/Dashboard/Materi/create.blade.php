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
        <select class="form-select mt-4" aria-label="Default select example">
            <option selected>Pilih Silabus</option>
            <option value="tm1">TM 1</option>

        </select>


        {{-- table --}}
        <table class="table mt-4 table-hover table-bordered">
            <thead>
                <tr>
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
                @foreach ($silabus as $s)
                    <tr>
                        <td><?php echo $s->kompetensi_dasar; ?></td>
                        <td><?php echo $s->indikator; ?></td>
                        <td><b><?php echo $s->materi; ?> </b> <br> <?php echo $s->detailMateri; ?> </td>
                        <td><?php echo $s->strategi_pembelajaran; ?></td>
                        <td><?php echo $s->sks; ?></td>
                        <td><?php echo $s->referensi_acuan; ?></td>
                        <td><?php echo $s->penilaian; ?></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{-- akhir table --}}
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>





</body>

</html>
