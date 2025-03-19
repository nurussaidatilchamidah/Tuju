<?php
    // Simulasi halaman PHP untuk detail jurusan Teknik Informatika
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Jurusan - Teknik Informatika</title>
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
            <a href="../home1.php" class="back-button">←</a> 
            <h1>Temu Jurusan</h1>  
        </div>  
    <div class="container">
        <div class="info-box">
            <h2 style="color: #FF7517;">Teknik Informatika</h2>
            <p>Teknik Informatika adalah salah satu bidang studi yang fokus pada pengembangan dan penerapan teknologi informasi, termasuk perancangan, pengembangan, dan manajemen sistem informasi, perangkat lunak (software), serta jaringan komputer.</p>
        </div>
        <div class="section-title">Tentang Jurusan</div>
        <div class="detail-box">
            <p><b>1. Definisi dan Ruang Lingkup</b><br>
            • Teknik Informatika adalah disiplin ilmu yang menggabungkan prinsip-prinsip ilmu komputer, matematika, dan rekayasa.<br>
            • Ruang lingkupnya mencakup pengembangan perangkat lunak, kecerdasan buatan (AI), keamanan siber, dan sistem informasi.</p>
            
            <p><b>2. Tujuan Pendidikan</b><br>
            • Menghasilkan lulusan yang mampu merancang, mengembangkan, dan mengelola sistem informasi dan teknologi.<br>
            • Membekali mahasiswa dengan pemrograman, analisis data, dan pemecahan masalah menggunakan teknologi.</p>
            
            <p><b>3. Prospek Karir</b><br>
            Lulusan Teknik Informatika memiliki peluang karir seperti:<br>
            • Software Developer: Mengembangkan aplikasi dan sistem perangkat lunak.<br>
            • Data Scientist: Menganalisis data untuk pengambilan keputusan.<br>
            • Network Engineer: Membangun dan mengelola jaringan komputer.<br>
            • Cybersecurity Analyst: Melindungi sistem dari serangan siber.<br>
            • System Analyst: Merancang dan mengoptimalkan sistem informasi.</p>
            
            <p><b>4. Tantangan di Masa Depan</b><br>
            • Menghadapi isu keamanan siber yang semakin kompleks.<br>
            • Mengelola big data dan memanfaatkannya untuk keperluan bisnis.<br>
            • Mengembangkan teknologi yang ramah lingkungan.</p>
        </div>
    </div>
</body>
</html>