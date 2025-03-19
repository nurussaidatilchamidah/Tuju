<?php
    // Halaman detail untuk jurusan Teknik Komputer
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Jurusan - Teknik Komputer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e0e0e0;
            color: black;
        }
        .header {
            background-color: #FF7517;
            color: white;
            padding: 15px;
            display: flex;
            align-items: center;
        }
        .header img {
            width: 40px;
            margin-right: 10px;
        }
        .header h1 {
            margin: 0;
            font-size: 22px;
        }
        .container {
            padding: 20px;
        }
        .back-button {
            color: black;   
            font-size: 24px;   
            margin-right: 15px;   
            text-decoration: none; 
        }
        .info-box {
            background-color: #f5c99e;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .detail-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }
        .section-title {
            color: #FF7517;
            font-weight: bold;
            margin-bottom: 12px;
            border-bottom: 2px solid #FF7517;
            padding-bottom: 10px;
            display: inline-block;
            margin-left: 18px;
        }
    </style>
</head>
<body>
    <div class="header">  
        <a href="../dashboard.php" class="back-button">&#8592;</a> 
        <h1>Temu Jurusan</h1>  
    </div>  
    <div class="container">
        <div class="info-box">
            <h2 style="color: #FF7517;">Teknik Komputer</h2>
            <p>Teknik Komputer adalah bidang studi yang menggabungkan prinsip-prinsip ilmu komputer dan teknik elektro untuk merancang dan mengembangkan sistem berbasis komputer, termasuk perangkat keras (hardware), perangkat lunak (software), dan sistem embedded.</p>
        </div>
        <div class="section-title">Tentang Jurusan</div>
        <div class="detail-box">
            <p><b>1. Definisi dan Ruang Lingkup</b><br>
            • Teknik Komputer fokus pada desain dan implementasi sistem komputasi, mulai dari prosesor, memori, hingga perangkat IoT.<br>
            • Ruang lingkupnya meliputi desain sistem embedded, arsitektur komputer, pemrograman sistem tingkat rendah, serta jaringan komputer.</p>
            
            <p><b>2. Tujuan Pendidikan</b><br>
            • Menghasilkan lulusan yang mampu merancang dan mengembangkan sistem komputer.<br>
            • Membekali mahasiswa dengan keahlian teknologi digital, sistem operasi, dan pemrograman sistem.</p>
            
            <p><b>3. Prospek Karir</b><br>
            Lulusan Teknik Komputer memiliki peluang karir seperti:<br>
            • Embedded Systems Engineer: Merancang sistem embedded untuk IoT, robotik, atau otomotif.<br>
            • Hardware Engineer: Mengembangkan komponen sistem komputer.<br>
            • Firmware Engineer: Membuat dan mengoptimalkan firmware untuk perangkat elektronik.<br>
            • Network Engineer: Merancang dan mengelola infrastruktur jaringan.<br>
            • IoT Developer: Mengembangkan sistem Internet of Things (IoT).</p>
        </div>
    </div>
</body>
</html>
