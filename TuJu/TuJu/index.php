<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temu Jurusan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }
        .container {
            display: flex;
            height: 100vh;
        }
        .logo-container {
            color: white;
            font-weight: bold;
            border-radius: 12px;
            padding: 10px;
            display: flex;
            margin-bottom: 60px;
            width: 120px;
            height: 45px;
            align-items: center;
            justify-content: flex-start;
            gap: 10px;
            position: absolute;
            top: 40px;
            left: 40px;
        }
        .left {
            background: linear-gradient(to right, #d65a10, #f77924);
            color: white;
            flex: 1;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-top-right-radius: 180px; /* Melengkungkan bagian kanan atas */
            border-bottom-right-radius: 180px; /* Melengkungkan bagian kanan bawah */
        }
        .right {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('background-pattern.png') repeat;
            background-size: contain;
        }
        h1 {
            font-size: 2.5em;
        }
        p {
            font-size: 1.2em;
            margin-top: 10px;
        }
        .buttons {
            margin-top: 20px;
        }
        .button {
            background-color: #ff8400;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-right: 10px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #e37200;
        }
    </style>
</head>
<body>
    <div class="container">
            <div class="logo-container">
                <img src="" alt="" class="">
                <span class="logo-text">Temu Jurusan</span>
            </div>
        <div class="left">
            <h1>Yuk, <br> Cari jurusan yang tepat buat kamu!</h1>
            <p>Bingung memilih jurusan kuliah yang tepat? <br> Tenang, di sini kamu bisa menemukan 
            rekomendasi jurusan yang sesuai dengan minat, bakat, dan prospek karier di masa depan. 
            Yuk, jelajahi dan temukan jalan terbaik untuk meraih impianmu! 🚀📚
            </p>
            <div class="buttons">
            <button class="button" onclick="window.location.href='dashboard.php'">Masuk</button>
            <button class="button" onclick="window.location.href=' '">Daftar</button>
     
            </div>
        </div>
        <div class="right">
        <img src="illustration.png" alt="Ilustrasi" width="400px" style="border-radius: 50%;">
        </div>
    </div>
</body>
</html>
