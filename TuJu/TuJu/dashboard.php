<?php
    // Simulasi halaman PHP untuk pencarian jurusan Fakultas Teknik
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Jurusan Fakultas Teknik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ccc;
        }
        .container {
            text-align: center;
            padding: 20px;
            background-color: #ccc;
        }
        .header {
            background-color: #FF7517;
            padding: 15px;
            border-radius: 20px;
        }
        .title {
            background-color: #ccc;
            color: black;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
        }
        .title h1 {
            margin: 0;
            font-size: 28px;
        }
        .title h2 {
            margin: 5px 0 0;
            font-size: 18px;
            font-weight: normal;
        }
        .search-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 20px auto;
            width: 80%;
        }
        .search-box {
            flex-grow: 1;
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            background-color: white;
            border-radius: 5px;
            padding: 5px;
        }
        .search-box input {
            width: 100%;
            padding: 10px;
            border: none;
            outline: none;
        }
        .search-box button {
            background-color: #FF7517;
            border: none;
            padding: 10px;
            cursor: pointer;
            color: white;
        }
        .compare-button {
            background-color: #FF7517;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            color: white;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
        }
        .grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
            background-color: #ccc;
            border-radius: 10px;
        }
        .card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .card-header {
            background-color: #FF7517;
            color: white;
            padding: 10px;
            border-radius: 5px 5px 0 0;
            font-weight: bold;
        }
        .card button {
            background-color: #FF7517;
            border: none;
            color: white;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">  
        <div class="title">
            <h1>Pencarian Jurusan Fakultas Teknik</h1>  
            <h2>Temukan jurusan Teknik Idamanmu</h2> 
        </div>
    </div>  

    <!-- Search Box & Compare Button -->
    <div class="search-container">
        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Cari Jurusan Teknik" onkeyup="filterJurusan()">
            <button>🔍</button>
        </div>
        <button class="compare-button" onclick="location.href='../TuJu/perbandingan jurusan/bandingkan.php'">⚖ Bandingkan</button>
    </div>

    <!-- Kartu Jurusan -->
    <div class="grid" id="jurusanGrid">
        <div class="card">
            <div class="card-header">Teknik Informatika</div>
            <a href="informasi jurusan/teknik_informatika.php">  
                <button>Lihat Detail</button>  
            </a> 
        </div>
        <div class="card">
            <div class="card-header">Teknik Komputer</div>
            <a href="informasi jurusan/teknik_komputer.php">  
                <button>Lihat Detail</button>
            </a> 
        </div>
        <div class="card">
            <div class="card-header">Teknik Elektro</div>
            <a href="informasi jurusan/teknik_elektro.php">  
                <button>Lihat Detail</button>
            </a> 
        </div>
        <div class="card">
            <div class="card-header">Multimedia</div>
            <a href="informasi jurusan/teknik_multimedia.php">  
                <button>Lihat Detail</button>
            </a> 
        </div>
    </div>

    <script>
    function filterJurusan() {
        let input = document.getElementById('searchInput').value.toLowerCase();
        let cards = document.querySelectorAll('.grid .card');

        cards.forEach(card => {
            let title = card.querySelector('.card-header').textContent.toLowerCase();
            if (title.includes(input)) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }
    </script>
</body>
</html>
