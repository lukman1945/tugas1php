<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Nilai</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h3>Form Nilai</h3>
            </div>
        </div>
        <form method="POST" action="">
        <div class="row">
            <div class="col-md-4">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control mb-2">
                <label for="umur">Umur</label>
                <input type="text" name="umur" class="form-control mb-2">
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" class="form-control mb-2">
                <label for="nilai1">Nilai 1</label>
                <input type="text" name="nilai1" class="form-control mb-2">
                <label for="nilai2">Nilai 2</label>
                <input type="text" name="nilai2" class="form-control mb-2">
                <label for="nilai3">Nilai 3</label>
                <input type="text" name="nilai3" class="form-control mb-2">
                <button type="submit" class="btn btn-block btn-primary">Simpan</button>
            </div>
            <div class="col-md-8">
                <?php 
                    $nama = ($_POST['nama']);
                    $umur = ($_POST['umur']);
                    $kelas = ($_POST['kelas']);
                    $nilai1 = ($_POST['nilai1']);
                    $nilai2 = ($_POST['nilai2']);
                    $nilai3 = ($_POST['nilai3']);

                    // $gajianfull = $gajiHarian * $totalMasuk;
                    // if($gajianfull <= 4000000 ){
                    //     $statusgaji = "Belum UMR";
                    // }else if($gajianfull >= 5000000){
                    //     $statusgaji = "STANDART";
                    // }

                    $totalNilai = $nilai1 + $nilai2 + $nilai3;
                    $nilaiRata = $totalNilai / 3;
                    if($nilaiRata >= 6 && $nilaiRata < 8 ){
                        $statusNilai = "LULUS";
                        $statusLulus = "MASUK PTS";
                    }else if($nilaiRata < 6 ){
                        $statusNilai = "TIDAK LULUS";
                        $statusLulus = "MASUK PEGAWAI";
                    }else if($nilaiRata >= 8 ){
                        $statusNilai = "LULUS LUAR BIASA";
                        $statusLulus = "MASUK PTN";
                    }

                    echo "<h3>Nama = ".$nama. "</h3><br/>";
                    echo "<h3>Umur = " .$umur. "</h3><br/>";
                    echo "<h3>Kelas = " .$kelas. "</h3><br/>";
                    echo "<h3>Nilai Rata Rata = " .$nilaiRata. "</h3><br/>";
                    echo "<h3>Status Nilai = " .$statusNilai. "</h3><br/>";
                    echo "<h3>Status Lulus = " .$statusLulus. "</h3><br/>";
                ?>
            </div>
        </div>
        </form>
    </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>