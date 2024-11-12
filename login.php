<?php

session_start();

$message = '';
if (isset($_SESSION["message"])) {
    $message = $_SESSION["message"];
    unset($_SESSION["message"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #D3D3D3;
        }

        .card {
            width: 30rem;
            padding: 2rem;
            border-radius: 15px;
            background-color: #696969;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h4 {
            font-family: 'Arial', sans-serif;
            color: #333;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .form-label {
            font-size: 1.1rem;
            font-weight: bold;
            color: #444;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
            padding: 0.75rem;
        }

        .form-control:focus {
            border-color: #007BFF;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn {
            background-color: #007BFF;
            border-color: #007BFF;
            color: white;
            padding: 0.75rem;
            border-radius: 8px;
            width: 100%;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .error-message {
            color: #d9534f;
            font-style: italic;
            text-align: center;
        }

        .mt-3 {
            text-align: center;
            margin-top: 1rem;
        }

        .mt-3 u {
            font-weight: bold;
        }

        .mt-3 a {
            text-decoration: none;
            color: #007BFF;
        }

        .mt-3 a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="card">
        <h4>Login</h4>
        <form action="./ctrl_login.php" method="POST">
            <div>
                <div class="mb-4">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                </div>
            </div>

            <?php if (isset($message)): ?>
                <p class="error-message"><?= htmlspecialchars($message) ?></p>
            <?php endif ?>

            <input type="submit" name="submit" value="Login" class="btn">

            <div class="mt-3">
                <!-- <u>Belum punya Akun? <a href="register.php">Register</a></u> -->
            </div>
        </form>
    </div>
</body>

</html>