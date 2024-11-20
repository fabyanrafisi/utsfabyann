<?php
session_start();
include 'koneksi.php';

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'")
        or die("Error pada query: " . mysqli_error($koneksi));

    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_array($query);
        $_SESSION['user'] = $data;
        echo '<script>
            alert("Selamat datang TerimaKasih sudah masuk, ' . $data['nama'] . '");
            location.href = "utama.php";
        </script>';
    } else {
        echo '<script>alert("Username atau Password tidak sesuai.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS FABYAN</title>
      <style>
        .header {
            text-align: center;

        }

        body {
        font-family: inherit;;
        background-color: #5392bb;
        color: white;
        margin: 0;
        font-size: 12px;
        }

        .form-container {
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
        }

        .form-box {
            max-width: 800px;
            background: white;
            margin: 50px auto;
            padding: 20px 40px;
            color: #222831;
            border-radius: 5px;
        }

        h2 {
            font-size: 32px;
            color: #333;
            margin-bottom: 30px;
        }

        h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }

        label {
            font-size: 14px;
            color: #222831;
            text-align: left;
            display: block;
            margin-bottom: 12px;
        }

        input {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 18px;
            font-family: inherit;
        }

        input[type="password"] {
            font-family: inherit;
        }

        button {
            background-color: #2A4365;
            font-family: inherit;
            color: white;
            border: none;
            padding: 15px 25px;
            border-radius: 6px;
            width: 100%;
            cursor: pointer;
            font-size: 20px;
        }

        button:hover {
            background-color: #222831;
        }

        p {
            font-size: 16px;
            color: #222831;
        }

        a {
            color: #5392bb;
            text-decoration: none;
            font-size: 18px;
        }

        a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .form-container {
                flex-direction: column;
                align-items: center;
            }

            .form-box {
                width: 90%;
                margin-bottom: 30px;
            }
        }
    </style>
</head>

<body>
<div class="header">
    <img src="img/th.png" alt="" width="55" height="50" class="d-inline-block align-text-center" />
        <h1>UTS - Pemograman Web 2</h1>
</div>

    <div class="form-container">
        <div class="form-box">
            <h3>Login</h3>
            <form method="post">
                <label for="username">Username</label>
                <input type="text" name="username" required>

                <label for="password">Password</label>
                <input type="password" name="password" required>

                <button type="submit">Login</button>
                <p>Belum punya akun? <a href="register.php">Daftar hola atuh bos!</a></p>
            </form>
        </div>
    </div>
</body>

</html>