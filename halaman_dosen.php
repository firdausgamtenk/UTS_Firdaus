<?php

session_start();

$username = @$_SESSION['username'];
$password = @$_SESSION['password'];

$akses = @$_SESSION["akses"];

require "./config.php";

?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Halaman Dosen</title>
    <script language="JavaScript" type="text/javascript">
        function Hapus() {
            return confirm('Apakah anda yakin ingin menghapus?');
        }
    </script>
    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #D3D3D3, #808080); /* Gradient background */
            margin-top: 5vh;
        }

        .card {
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            background-color: #808080;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
        }

        .text-center h4, .text-center h5 {
            color: #fff;
            font-weight: 600;
        }

        .btn-warning, .btn-primary {
            border-radius: 25px;
            font-weight: 600;
            padding: 12px 28px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .btn-warning:hover, .btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        /* Button Styles */
        .btn-warning {
            background-color: #fd7e14;
            border: none;
        }

        .btn-warning:hover {
            background-color: #e06b00;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0069d9;
        }

        /* Table Styles */
        .table {
            font-size: 14px;
            color: #333;
        }

        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }

        .table thead {
            background-color: #4e73df;
            color: white;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Edit and Delete buttons */
        .tombol-edit, .tombol-hapus {
            border-radius: 15px;
            padding: 8px 16px;
            font-size: 14px;
            color: #fff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .tombol-edit {
            background-color: #28a745;
        }

        .tombol-hapus {
            background-color: #dc3545;
        }

        .tombol-edit:hover {
            background-color: #218838;
        }

        .tombol-hapus:hover {
            background-color: #c82333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .mt-3 {
            text-align: center;
        }

        .card-body {
            padding: 2rem;
        }

        .d-flex.justify-content-between {
            margin-bottom: 1rem;
        }

        /* Footer */
        .footer {
            background-color: #333;
            padding: 10px 0;
            color: white;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="text-center mb-4">
            <h4>REKAPITULASI NILAI KULIAH</h4>
            <h5>SELAMAT DATANG DI HALAMAN DOSEN</h5>
        </div>

        <div class="card card-body m-4">
            <div class="d-flex justify-content-between mb-3">
                <a href="halaman_tambah_mhs.php" class="btn btn-warning">Tambah Mahasiswa</a>
            </div>

            <?php
            $sql = "select * from user";
            $query = mysqli_query($sambung, $sql);
            ?>
            <div class="container mt-3">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Mahasiswa</th>
                            <th scope="col">Diskusi (14%)</th>
                            <th scope="col">Praktikum (26%)</th>
                            <th scope="col">Responsi (15%)</th>
                            <th scope="col">UTS (20%)</th>
                            <th scope="col">UAS (25%)</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($sambung, "SELECT * FROM user WHERE level = 'mahasiswa'");
                        $i = 1;
                        while ($db_uts_5035 = mysqli_fetch_array($query)) {
                            $total_nilai =
                                ($db_uts_5035['diskusi'] * 0.14) +
                                ($db_uts_5035['praktikum'] * 0.26) +
                                ($db_uts_5035['responsi'] * 0.15) +
                                ($db_uts_5035['uts'] * 0.20) +
                                ($db_uts_5035['uas'] * 0.25);

                            echo "<tr>";
                            echo "<td>$i</td>";
                            echo "<td>" . $db_uts_5035["username"] . "</td>";
                            echo "<td>" . $db_uts_5035["diskusi"] . "</td>";
                            echo "<td>" . $db_uts_5035["praktikum"] . "</td>";
                            echo "<td>" . $db_uts_5035["responsi"] . "</td>";
                            echo "<td>" . $db_uts_5035["uts"] . "</td>";
                            echo "<td>" . $db_uts_5035["uas"] . "</td>";
                            echo "<td>" . number_format($total_nilai, 2) . "</td>";
                            echo "<td><a class='tombol-edit' href=./update.php?username=$db_uts_5035[username]>Edit</a>";
                            echo "<a class='tombol-hapus' href=./delete.php?username=$db_uts_5035[username] onclick='return Hapus()'>Hapus</a></td>";
                            echo "</tr>";
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                <a href="logout.php" class="btn btn-primary">Log Out</a>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Rekapitulasi Nilai Kuliah</p>
    </div>
</body>
