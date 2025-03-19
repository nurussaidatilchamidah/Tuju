<?php
    // Simulasi halaman PHP untuk detail jurusan Teknik Elektro
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Jurusan - Teknik Elektro</title>
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
        <a href="../dashboard.php" class="back-button">←</a> 
        <h1>Temu Jurusan</h1>  
    </div>  
    <div class="container">
        <div class="info-box">
            <h2 style="color: #FF7517;">Teknik Elektro</h2>
            <p>Teknik Elektro (Electrical Engineering) adalah salah satu cabang ilmu teknik yang fokus pada studi, desain, dan aplikasi peralatan, sistem, dan perangkat yang menggunakan listrik, elektronik, dan elektromagnetisme.</p>
        </div>
        <div class="section-title">Tentang Jurusan</div>
        <div class="detail-box">
            <p><b>1. Definisi dan Ruang Lingkup</b><br>
            • Teknik Elektro mencakup berbagai bidang, termasuk:<br>
            &nbsp;&nbsp;- Energi dan Tenaga Listrik: Pembangkit, transmisi, dan distribusi listrik.<br>
            &nbsp;&nbsp;- Elektronika: Desain sirkuit elektronik, komponen, dan perangkat.<br>
            &nbsp;&nbsp;- Telekomunikasi: Pengembangan sistem komunikasi seperti jaringan seluler, satelit, dan fiber optik.<br>
            &nbsp;&nbsp;- Kontrol dan Otomasi: Perancangan sistem kontrol industri dan robotika.<br>
            &nbsp;&nbsp;- Sinyal dan Sistem: Pengolahan sinyal untuk audio, video, dan komunikasi.<br>
            &nbsp;&nbsp;- Instrumentasi: Desain alat ukur dan sistem monitoring.</p>
            
            <p><b>2. Tujuan Pendidikan</b><br>
            • Menghasilkan lulusan yang mampu merancang, menganalisis, dan mengimplementasikan sistem elektrik dan elektronik.<br>
            • Membekali mahasiswa dengan pengetahuan dasar listrik, elektronika, dan aplikasinya dalam berbagai industri.</p>
            
            <p><b>3. Prospek Karir</b><br>
            Lulusan Teknik Elektro memiliki peluang karir yang luas, antara lain:<br>
            • Power Systems Engineer: Merancang sistem pembangkit dan distribusi listrik.<br>
            • Electronics Design Engineer: Mengembangkan perangkat elektronik seperti sensor, microcontroller, dan PCB.<br>
            • Telecommunication Engineer: Membangun dan mengelola jaringan komunikasi.<br>
            • Control Systems Engineer: Merancang sistem kontrol industri dan robotika.<br>
            • Renewable Energy Specialist: Mengembangkan sistem energi terbarukan seperti panel surya dan turbin angin.<br>
            • Research and Development (R&D): Bekerja di bidang riset dan pengembangan teknologi baru.</p>
        </div>
    </div>
</body>
</html>