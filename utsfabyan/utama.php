<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS FABYAN</title>
    <style>

        body {
            font-family: inherit;
            margin: 0;
            padding: 0;
            background-color: #5392bb;
        }

        .header {
            background-color: #5392bb;
            text-align: center;

        }

        .header h1 {
            margin: 0;
            font-size: 36px;
        }

        .header p {
            margin: 10px 0 0;
            font-size: 18px;
            color: #555;
        }

        .content {
            display: flex;
            justify-content: center;
            gap: 30px;
            padding: 60px;
        }

        .card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .card h3 {
            margin: 70px 0 10px;
            font-size: 22px;
        }

        .card p {
            margin: 0;
            font-size: 16px;
            color: black;
        }

        .card .footer {
            padding: 20px;
            font-size: 16px;
            background-color: #f4f4f9;
            color: black;
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
            margin-left: 633px;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #2A4365;
            color: white;
            border-radius: 5px;
        }
    </style>

</head>

<body>
<nav class="navbar" style="background-color: #e3f2fd;">
<div class="header">
    <img src="img/th.png" alt="" width="55" height="50" class="d-inline-block align-text-center" />
        <h1>UTS - Pemograman Web 2</h1>
</div>
</nav>
    <div class="content">
        <div class="card">
            <img src="img/byan.jpg" alt="Profile Fabyan Rafi Syuja Ismail">
            <h3>Profil Fabyan Rafi Syuja Ismail</h3>
            <p>Mahasiswa Prodi Informatika Angakatan 2022</p>
            <div class="footer">
                Fakultas Teknologi dan Informatika</div>
            <br>
            <a href="profile.php" style="display: inline-block; margin-bottom : 17px; text-decoration: none; padding: 10px 20px;
             background-color: #2A4365; color: white; border-radius: 5px;">View Profile</a>
        </div>
        <div class="card">
            <img src="img/unibi.jpg" alt="UTS Pemrograman Web 2">
            <h3>UTS FABYAN</h3>
            <p>Pemrograman Web 2</p>
            <div class="footer">Universitas Informatika dan Bisnis Indonesia</div>
            <a href="uts.php" style="display: inline-block; margin-top: 10px; text-decoration: none; padding: 10px 20px;
             background-color: #2A4365; color: white; border-radius: 5px;">View UTS</a>
        </div>
    </div>


    <div class="center-container">
    <a href="login.php" class="back-btn">Logout</a>
</div>
</body>

</html>