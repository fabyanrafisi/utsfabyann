<?php
session_start();
include 'koneksi.php';
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
    <?php
    if (isset($_POST['username'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $query = mysqli_query($koneksi, "INSERT INTO user(nama,username,password) 
            VALUES('$nama','$username','$password')");
        if ($query) {
            echo '<script>alert("Selamat Anda telah  berhasil. Silahkan login.")</script>';
        } else {
            echo '<script>alert("Registrasi gagal.")</script>';
        }
    }
    ?>

<div class="header">
    <img src="img/th.png" alt="" width="55" height="50" class="d-inline-block align-text-center" />
        <h1>UTS - Pemograman Web 2</h1>
</div>

    <div class="form-container">
        <div class="form-box">
            <h3>Register</h3>
            <form method="post">
                <label for="nama">Nama</label>
                <input type="text" name="nama" required>

                <label for="username">Username</label>
                <input type="text" name="username" required>

                <label for="password">Password</label>
                <input type="password" name="password" required>

                <button type="submit">Daftar</button>
                <p>Sudah mempunyai akun? <a href="login.php">Login Duls Sini</a></p>
            </form>
        </div>
    </div>
</body>

</html>