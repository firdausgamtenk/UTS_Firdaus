<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tambah Mahasiswa</title>
</head>

<body class="bg-dark">
    <div class="card card-body bg-secondary  m-5 mb-5">
        <?php
        session_start();
        require "./config.php";

        // cek apakah yang mengakses halaman ini sudah login
        if ($_SESSION['level'] == "") {
            header("location:login.php?pesan=gagal");
        }

        ?>
        <h1 class="text-center">Tambah Mahasiswa</h1>
        <form action="./ctrl_tambah_data.php" method="POST">
            <div class="fw-bold">
                <div>
                    <label for="username" class="form-label">Mahasiswa</label>
                    <input type="text" class="form-control" id="username" name="username"
                        placeholder="Masukkan Nama">
                </div>
                <div class="mt-3">
                    <label for="username" class="form-label">Diskusi (14%)</label>
                    <input type="number" class="form-control" id="diskusi" name="diskusi"
                        placeholder="Masukkan Nilai Diskusi">
                </div>
                <div class="mt-3">
                    <label for="username" class="form-label">Praktikum (26%)</label>
                    <input type="number" class="form-control" id="praktikum" name="praktikum"
                        placeholder="Masukkan Nilai Praktikum">
                </div>
                <div class="mt-3">
                    <label for="username" class="form-label">Responsi (15%)</label>
                    <input type="number" class="form-control" id="responsi" name="responsi"
                        placeholder="Masukkan Nilai Responsi">
                </div>
                <div class="mt-3">
                    <label for="username" class="form-label">UTS (20%)</label>
                    <input type="number" class="form-control" id="uts" name="uts"
                        placeholder="Masukkan Nilai UTS">
                </div>
                <div class="mt-3">
                    <label for="username" class="form-label">UAS (25%)</label>
                    <input type="number" class="form-control" id="uas" name="uas"
                        placeholder="Masukkan Nilai UAS">
                </div>
            </div>
            <div class="mt-4">
                <input type="submit" name="submit" value="Add" class="btn btn-primary">
                <a href="halaman_dosen.php" style="text-decoration: none;" class="btn btn-danger">Kembali</a>
            </div>
        </form><br>
    </div>
</body>

</html>