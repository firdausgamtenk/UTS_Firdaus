<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Halaman Mahasiswa</title>
</head>

<body class="bg-dark">
    <?php
    session_start();
    require "./config.php";

    $username = $_SESSION['username'];


    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] == "") {
        header("location:index.php");

    }


    ?>
    <div class="card card-body m-5">
        <div class="container">
            <table class="table text-center table-hover" style="font-size: 15px;">
                <thead class="table-dark">
                    <tr>
                        <th scope="row">Nomer</th>
                        <th scope="row">Mahasiswa</th>
                        <th scope="row">Diskusi (14%)</th>
                        <th scope="row">Praktikum (26%)</th>
                        <th scope="row">Responsi (15%)</th>
                        <th scope="row">UTS (20%)</th>
                        <th scope="row">UAS (25%)</th>
                        <th scope="row">Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($sambung, "select * from user where username='$username'");
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
                        echo "</tr>";
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            <a href="login.php" class="btn btn-primary form-control">Log Out</a>
        </div>
    </div>
</body>

</html>