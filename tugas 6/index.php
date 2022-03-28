<?php
//variabel bandara awal
$awal = array(
    // bandara awal => pajak
    "Sultan Hasanuddin (UPG)" => 40000,
    // bandara awal => pajak
    "Cibereum (TSY)" => 20000,
    // bandara awal => pajak
    "Dobo (DOB)" => 30000,
    // bandara awal => pajak
    "El Tari (KOE)" => 50000
);
// array
$keberangkatan = array(
    // bandara akhir => pajak
    "Soekarno-Hatta (CGK)" => 90000,
    // bandara akhir => pajak
    "Berau (BEJ)" => 80000,
    // bandara akhir => pajak
    "Binaka (GNS)" => 85000,
    // bandara akhir => pajak
    "Frans Kaisiepo (BIK)" => 75000
);

//function
function getPajakDatang($awal, $akhir)
{
    $pjk = $awal[$akhir];
    return $pjk;
}
function getPajakBerangkat($keberangkatan, $akhir)
{
    $pjk = $keberangkatan[$akhir];
    return $pjk;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Study Kasus 1</title>
</head>

<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-light text-white">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        </li>      
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </section>

    <section id="logo">
      <img class="d-block mx-auto mt-0 mb-lg-5" id="icon" src="assets/logo.png" alt="" width="auto" height="auto" style="min-width: 150px; max-width: 200px;">
    </section>

    <section class="daftar">
    <div class="background">
        <img src="assets/bg2.jpg" alt="">
        </div>
        <div class="container">
        <div class="row">
        </div>
        <div class="container">
            <div class="formpendaftaran">
                <div class="row d-flex justify-content-center box-bg">
                    <div class="col-md-6">
                        <form action="" method="POST">
                            <div class="mb-3">
                         <label for="mkp" class="form-label">Maskapai Penerbangan</label>
                      <input type="text" class="form-control" id="mkp" name="mkp">
                    </div>
                    <label for="berangkat" class="form-label">Keberangkatan</label>
                    <select class="form-select mb-3" name="berangkat" id="berangkat">
                        <option selected>Pilih Bandara</option>
                        <?php foreach ($keberangkatan as $bdr => $pjk) : ?>
                            <option value="<?= $bdr ?>"><?= $bdr; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="datang" class="form-label">Kedatangan</label>
                    <select class="form-select mb-3" name="datang" id="datang">
                        <option selected>Pilih Bandara</option>
                        <?php foreach ($awal as $bdr => $pjk) : ?>
                            <option value="<?= $bdr ?>"><?= $bdr; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Tiket</label>
                        <input type="text" class="form-control" name="harga" id="harga">
                    </div>
                    <button class="btn btn-primary" name="submit">Simpan Data</button>
                </form>
            </div>
        </div>
        </div>
        </div>
        </section>
        <?php
        $file = 'dataphp/penerbangan.json';
        $data_mkp = array();

        $file_json = file_get_contents($file);

        $data_mkp = json_decode($file_json, true);

        if (isset($_POST['submit'])) {
            $pjk = getPajakDatang($awal, $_POST['datang']) + getPajakBerangkat($keberangkatan, $_POST['berangkat']);
            $total = $pjk + $_POST['harga'];

            $inputUser = array(
                "Maskapai" => $_POST['mkp'],
                "Asal_penerbangan" => $_POST['berangkat'],
                "tujuan_penerbangan" => $_POST['datang'],
                "Harga_tiket" => $_POST['harga'],
                "Pajak" => $pjk,
                "Total_harga" => $total
            );

            array_push($data_mkp, $inputUser);

            $data_json = json_encode($data_mkp, JSON_PRETTY_PRINT);
            file_put_contents($file, $data_json);
        }

        ?>
        <div class="container tabel">
        <div class="row">
            <table class="table">
                <thead>
                    <tr> 
                        <th scope="col">Maskapai</th>
                        <th scope="col">Keberangkatan</th>
                        <th scope="col">Kedatangan</th>
                        <th scope="col">Harga Tiket</th>
                        <th scope="col">Pajak</th>
                        <th scope="col">Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data_mkp as $data => $value) : ?>
                        <tr>
                            <td><?= $data_mkp[$data]['Maskapai']; ?></td>
                            <td><?= $data_mkp[$data]['Asal_penerbangan']; ?></td>
                            <td><?= $data_mkp[$data]['tujuan_penerbangan']; ?></td>
                            <td><?= $data_mkp[$data]['Harga_tiket']; ?></td>
                            <td><?= $data_mkp[$data]['Pajak']; ?></td>
                            <td><?= $data_mkp[$data]['Total_harga']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>