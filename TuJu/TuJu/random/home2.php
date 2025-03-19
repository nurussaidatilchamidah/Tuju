<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Pencarian Jurusan Fakultas Teknik</title>  
    <style>  
        body {  
            font-family: Arial, sans-serif;  
            background-color: #e0e0e0;  
            margin: 0;  
            padding: 20px;  
        }  
        .container {  
            background-color: white;  
            border-radius: 10px;  
            padding: 20px;  
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);  
        }  
        h1 {  
            color: #FF7517;  
            text-align: center;  
        }  
        .search {  
            text-align: center;  
            margin-bottom: 20px;  
        }  
        input[type="text"] {  
            padding: 10px;  
            width: 50%;  
            border-radius: 5px;  
            border: 1px solid #FF7517;  
        }  
        .majors {  
            display: grid;  
            grid-template-columns: repeat(3, 1fr);  
            gap: 20px;  
            margin: 20px 0;  
        }  
        .major {  
            background-color: #FF7517;  
            color: white;  
            border-radius: 10px;  
            padding: 15px;  
            text-align: center;  
        }  
        .button {  
            background-color: white;  
            color: #FF7517;  
            border: 1px solid #FF7517;  
            padding: 10px 20px;  
            border-radius: 5px;  
            text-decoration: none;  
            display: inline-block;  
            margin-top: 10px;  
        }  
        .compare-button {  
            background-color: #FF7517;  
            color: white;  
            padding: 12px 3px;  
            border: none;  
            border-radius: 10px;  
            cursor: pointer;  
            text-align: center;  
            display: block;  
            margin: 20px auto;  
            width: 20%;  
        }  
    </style>  
</head>  
<body>  

    <div class="container">  
        <h1>Pencarian Jurusan Fakultas Teknik</h1>  
        <div class="search">  
            <input type="text" placeholder="Cari Jurusan Teknik">  
        </div>  

        <div class="majors">  
            <div class="major">  
                <h2>Teknik Informatika</h2>  
                <a href="informasi jurusan/teknik_informatika.php" class="button">Lihat Detail</a>  
            </div>  
            <div class="major">  
                <h2>Teknik Komputer</h2>  
                <a href="informasi jurusan/teknik_komputer.php" class="button">Lihat Detail</a>  
            </div>  
            <div class="major">  
                <h2>Teknik Elektro</h2>  
                <a href="informasi jurusan/teknik_elektro.php" class="button">Lihat Detail</a>  
            </div>  
            <div class="major">  
                <h2>Multimedia</h2>  
                <a href="informasi jurusan/teknik_multimedia.php" class="button">Lihat Detail</a>  
            </div>  
            <div class="major">  
                <h2>Teknik Informatika</h2>  
                <a href="#" class="button">Lihat Detail</a>  
            </div>  
            <div class="major">  
                <h2>Teknik Informatika</h2>  
                <a href="#" class="button">Lihat Detail</a>  
            </div>  
        </div>  

        <a href="comparison.php" class="compare-button">Perbandingan Jurusan</a>  
    </div>  

</body>  
</html>  