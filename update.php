<?php

include "./config.php";

$username = @$_GET["username"];
$query = mysqli_query($sambung, "SELECT * from user where username='$username'");

$username = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>

<body class="container bg-dark fw-bold">
    <div class="card card-body m-5 bg-secondary">
        <form action="./ctrl_update.php" method="POST">
            <h2 class="text-center">Edit Nilai Mahasiswa</h2>
            <div class="">
                <label for="username">Mahasiswa</label><br>
                <input type="text" id="username" name="username" class="form-control form-label"
                    value="<?php echo $username['username']; ?>">
            </div>
            <div class="">
                <label for="diskusi">Diskusi (14%)</label>
                <input type="number" id="diskusi" name="diskusi" class="form-control form-label"
                    value="<?php echo $username['diskusi']; ?>">
            </div>
            <div class="">
                <label for="praktikum">Praktikum (26%)</label>
                <input type="number" id="praktikum" name="praktikum" class="form-control form-label"
                    value="<?php echo $username['praktikum']; ?>">
            </div>
            <div class="">
                <label for="responsi">Responsi (15%)</label>

                <input type="number" id="responsi" name="responsi" class="form-control form-label"
                    value="<?php echo $username['responsi']; ?>">
            </div>
            <div class="">
                <label for="uts">UTS (20%)</label>
                <input type="number" id="uts" name="uts" class="form-control form-label"
                    value="<?php echo $username['uts']; ?>">
            </div>
            <div class="">
                <label for="uas">UAS (25%)</label>
                <input type="number" id="uas" name="uas" class="form-control form-label"
                    value="<?php echo $username['uas']; ?>">
            </div>
            <input type="submit" value="Simpan" name="edit" class="btn btn-primary">
            <a href="halaman_dosen.php" style="text-decoration: none;" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</body>

</html>