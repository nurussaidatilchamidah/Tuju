<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temu Jurusan - Tambah Ilmu Jurusan Impian</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f5f5f5;
        }

        .header {
            background-color: #FF6B00;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            position: relative;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            font-weight: bold;
            padding: 8px 10px;
            border-radius: 8px;
        }

        .logo {
            width: 24px;
            height: 24px;
        }

        .logo-text {
            font-weight: bold;
            color: white;
            font-size: 16px;
        }

        .content {
            padding: 10px;
            background-color: #f0f0f0;
            min-height: calc(100vh - 56px);
            overflow-y: auto;
            transition: margin-right 0.3s ease;
            position: relative;
        }

        .content.sidebar-open {
            margin-right: 200px;
        }

        .main-banner {
            background-color: #FF6B00;
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 15px;
            position: relative;
        }

        .banner-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .banner-subtitle {
            font-size: 14px;
            opacity: 0.9;
        }

        .course-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .course-image {
            width: 100%;
            height: 130px;
            object-fit: cover;
        }

        .course-info {
            padding: 15px;
        }

        .course-title {
            font-size: 20px;
            font-weight: bold;
            color: #FF6B00;
            margin-bottom: 8px;
        }

        .course-description {
            font-size: 14px;
            color: #333;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .detail-button {
            background-color: #FF6B00;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            font-size: 14px;
        }

        
        .sidebar {
            position: fixed;
            right: -200px; /* Posisi awal di luar layar */
            top: 0;
            background-color: white;
            width: 200px;
            height: 100%;
            margin-top: 56px;
            padding: 15px;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
            transition: right 0.3s ease;
            z-index: 100;
        }

        .sidebar.open {
            right: 0; /* Posisi ketika sidebar terbuka */
        }

        .sidebar-title {
            color: #FF6B00;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .sidebar-list {
            list-style: none;
        }

        .sidebar-item {
            margin-bottom: 10px;
            font-size: 14px;
            color: #333;
            cursor: pointer;
        }

        .hamburger-menu {
            position: absolute;
            right: 20px;
            top: 16px;
            font-size: 24px;
            cursor: pointer;
            color: white;
            z-index: 200;
        }

        /* Overlay untuk menutup sidebar ketika diklik di luar */
        .overlay {
            position: fixed;
            top: 56px;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 90;
            display: none;
        }

        .overlay.active {
            display: block;
        }

    </style>

</head>

<body>
    <div class="header">
        <div class="logo-container">
            <img src="" class="" alt="">
            <span class="logo-text">Temu Jurusan</span>
        </div>
        <div class="hamburger-menu" id="hamburger-menu">&#9776;</div>
    </div>
    
    <div class="content" id="content">
        <div class="main-banner">
            <h1 class="banner-title">Tambah Ilmu Jurusan Impian</h1>
            <p class="banner-subtitle">Pelajari materi-materi tiap jurusan untuk menambah pengetahuan</p>
        </div>
        
        <div class="course-card">
            <img src="" class="course-image" alt="Teknik Informatika" style="background-color: #17a2b8; padding: 20px;">
            <div class="course-info">
                <h2 class="course-title">Teknik Informatika</h2>
                <p class="course-description">Materi seputar Teknik Informatika yang menyuguhkan dasar-dasar pemrograman, logika, sistem komputer, basis data, dll</p>
                <button class="detail-button" onclick="window.location.href='materi_teknik_informatika.php'">Lihat Detail</button>
            </div>
        </div>

        <div class="course-card">
            <img src="" class="course-image" alt="Teknik Elektro" style="background-color: #17a2b8; padding: 20px;">
            <div class="course-info">
                <h2 class="course-title">Teknik Elektro</h2>
                <p class="course-description">Materi seputar Teknik Elektro yang menyuguhkan dasar-dasar pemrograman, logika, sistem komputer, basis data, dll</p>
                <button class="detail-button" onclick="window.location.href='materi_teknik_elektro.php'">Lihat Detail</button>
            </div>
        </div>

        <div class="course-card">
            <img src="" class="course-image" alt="Teknik Komputer" style="background-color: #17a2b8; padding: 20px;">
            <div class="course-info">
                <h2 class="course-title">Teknik Komputer</h2>
                <p class="course-description">Materi seputar Teknik Komputer yang menyuguhkan dasar-dasar pemrograman, logika, sistem komputer, basis data, dll</p>
                <button class="detail-button" onclick="window.location.href='materi_teknik_komputer.php'">Lihat Detail</button>
                </div>
        </div>

        <div class="course-card">
            <img src="" class="course-image" alt="Teknik Multimedia" style="background-color: #17a2b8; padding: 20px;">
            <div class="course-info">
                <h2 class="course-title">Teknik Multimedia</h2>
                <p class="course-description">Materi seputar Teknik Multimedia yang menyuguhkan dasar-dasar pemrograman, logika, sistem komputer, basis data, dll</p>
                <button class="detail-button" onclick="window.location.href='materi_teknik_multimedia.php'">Lihat Detail</button>
            </div>
        </div>
    </div>
    
    <div class="overlay" id="overlay"></div>
    
    <div class="sidebar" id="sidebar">
        <h3 class="sidebar-title">Daftar Materi</h3>
        <ul class="sidebar-list">
            <li class="sidebar-item">Teknik Informatika</li>
            <li class="sidebar-item">Teknik Komputer</li>
            <li class="sidebar-item">Teknik Elektro</li>
            <li class="sidebar-item">Teknik Multimedia</li>
        </ul>
    </div>

    <script>
        // Mendapatkan elemen-elemen yang diperlukan
        const hamburgerMenu = document.querySelector('#hamburger-menu');
        const sidebar = document.querySelector('#sidebar');
        const content = document.querySelector('#content');
        const overlay = document.querySelector('#overlay');

        // Fungsi untuk toggle sidebar
        function toggleSidebar() {
            sidebar.classList.toggle('open');
            content.classList.toggle('sidebar-open');
            overlay.classList.toggle('active');
        }

        // Event listener untuk hamburger menu
        hamburgerMenu.addEventListener('click', toggleSidebar);

        // Event listener untuk menutup sidebar ketika overlay diklik
        overlay.addEventListener('click', toggleSidebar);
    </script>

</body>
</html>