<?php
    // Simulasi halaman PHP untuk membandingkan jurusan
    $jurusan = ["Teknik Informatika", "Sistem Informasi", "Teknik Elektro", "Manajemen", "Akuntansi", "Psikologi"];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandingkan Jurusan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            text-align: center;
        }
        .header {
            background-color: #FF7517;
            color: white;
            padding: 15px;
            font-size: 26px;
            font-weight: bold;
        }
        .sub-header {
            background-color: #FF7517;
            color: white;
            font-size: 16px;
            padding: 15px;
            margin-top: -20px;
        }
        .container {
            background-color: white;
            width: 50%;
            margin: 50px auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }
        .title {
            color: black;
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .subtitle {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }
        .comparison-box {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin: 20px 0;
        }
        .versus {
            font-size: 20px;
            font-weight: bold;
            background-color: #FF7517;
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            display: flex;
            align-items: center;
        }
        .jurusan-box {
            width: 200px;
            height: 50px;
            font-size: 16px;
            border-radius: 8px;
            padding: 5px;
        }
        .buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        .button {
            background-color: #FF7517;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }
        .button:hover {
            background-color: #E66915;
        }
        .button.reset {
            background-color: red;
        }
        .button.reset:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <div class="header">Bandingkan Jurusan Pilihanmu</div>
    <div class="sub-header">Temukan jurusan kuliah yang sesuai dengan minat dan bakatmu</div>
    <div class="container">
        <div class="title">Bandingkan Jurusan, Temukan yang Terbaik!</div>
        <div class="subtitle">Temukan jurusan yang tepat dengan perbandingan cerdas dua jurusan untuk menemukan yang paling sesuai dengan minat dan karier impianmu!</div>
        <form method="POST" action="">
            <div class="comparison-box">
                <select name="jurusan1" class="jurusan-box">
                    <option value="">Pilih Jurusan</option>
                    <?php foreach ($jurusan as $j) { echo "<option value='$j'>$j</option>"; } ?>
                </select>
                <div class="versus">VS</div>
                <select name="jurusan2" class="jurusan-box">
                    <option value="">Pilih Jurusan</option>
                    <?php foreach ($jurusan as $j) { echo "<option value='$j'>$j</option>"; } ?>
                </select>
            </div>
            <div class="buttons">
                <button type="submit" class="button">Lihat Hasil</button>
                <button type="reset" class="button reset">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>
