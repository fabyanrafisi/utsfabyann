<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS FABYAN</title>
    <style>
        body {
        font-family: inherit;
        background-color: #5392bb;
        color: black;
        margin: 0;
        font-size: 14px;
        }

        .header {
            padding: 30px;
            text-align: center;

        }

        .header h1 {
            margin: 0;
            font-size: 36px;
        }

        .content {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 30px;
            text-align: center;
        }

        .content img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .content h2 {
            font-size: 28px;
            margin: 10px 0;
        }

        .content p {
            font-size: 18px;
            color: black;
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }

        form {
            margin-top: 20px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            margin: 5px;
            font-size: 16px;
            background-color: #2A4365;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: inherit;
        }

        button:hover {
            background-color: #2A4365;
        }

        a {
            background-color: #2A4365;
            text-decoration: none;
            font-size: 18px;
        }
    </style>
</head>

<body>
<div class="header">
    <img src="img/th.png" alt="" width="55" height="50" class="d-inline-block align-text-center" />
        <h1>UTS - Pemograman Web 2</h1>
</div>
    <div class="content">
        <img src="img/unibi.jpg" alt="UTS Pemrograman Web 2">
        <h2>UTS</h2>
        <p>Menghitung luas lingkaran:</p>
        <form method="POST">
            <label for="radius">Masukkan Jari-jari Lingkaran (r):</label>
            <input type="number" id="radius" name="radius" step="any" required>>
            <button type="submit" name="calculate">Hitung Luas Lingkaran</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calculate'])) {
            $radius = $_POST['radius'];
            $area = pi() * pow($radius, 2);
            echo "<p>Luas Lingkaran dengan jari-jari <b>$radius</b> adalah: <b>" . number_format($area, 2) . "</b></p>";
        }
        ?>
        <form method="POST">
            <label for="nilai">Masukkan Nilai Mahasiswa:</label>
            <input type="number" id="nilai" name="nilai" required>
            <button type="submit" name="cek_nilai">Cek Nilai</button>
        </form>
        <?php   
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cek_nilai'])) {
            $nilai = $_POST['nilai'];
            if ($nilai >= 80) {
                $grade = 'A';
                $status = 'Lulus';
            } elseif ($nilai >= 60) {
                $grade = 'B';
                $status = 'Lulus';
            } elseif ($nilai >= 50) {
                $grade = 'C';
                $status = 'Lulus';
            } elseif ($nilai >= 40) {
                $grade = 'D';
                $status = 'Tidak Lulus';
            } else {
                $grade = 'E';
                $status = 'Tidak Lulus';
            }

            echo "<p>Nilai: <b>$nilai</b></p>";
            echo "<p>Grade: <b>$grade</b></p>";
            echo "<p>Status: <b>$status</b></p>";
        }
        ?>
        <a href="utama.php" class="back-btn" style="background-color: #2A4365;">Back</a>
    </div>
</body>

</html>