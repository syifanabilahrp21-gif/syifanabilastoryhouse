<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Looping - Sa-Na Public Library</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">

    <style>
        *{margin:0;padding:0;box-sizing:border-box;}
        body{
            font-family:'Playfair Display', serif;
            background:#fdfdfd;
        }

        /* NAVBAR (COPY STYLE ASLI) */
        .navbar{
            position:fixed;top:0;width:100%;
            display:flex;justify-content:space-between;align-items:center;
            padding:15px 5%;background:#800020;z-index:1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .logo{color:white;font-weight:600;}

        .nav-links a{
            text-decoration:none;color:white;
            margin:0 10px;font-size:14px;
            transition:0.3s;
        }
        .nav-links a:hover{opacity:0.7;}

        /* SECTION */
        .section{
            padding:120px 5% 60px;
            background:#800020;
            min-height:100vh;
        }

        .section h2{
            text-align:center;
            color:white;
            font-size:32px;
            margin-bottom:40px;
        }

        /* GRID (SEPERTI BOOK CARD) */
        .grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
            gap:25px;
        }

        /* CARD */
        .card{
            background:white;
            padding:20px;
            border-radius:15px;
            text-align:center;
            color:#333;
            transition:0.3s;
            box-shadow:0 5px 15px rgba(0,0,0,0.1);
        }

        /* HOVER ANIMATION 🔥 */
        .card:hover{
            transform:translateY(-10px) scale(1.03);
            box-shadow:0 15px 35px rgba(0,0,0,0.3);
        }

        .card h3{
            color:#800020;
            font-size:18px;
            margin-bottom:8px;
        }

        .card p{
            font-size:14px;
            color:#666;
        }

    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="logo">Sa-Na Public Library</div>
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="index.php#collection">Koleksi</a>
        <a href="index.php#about">About Us</a>
        <a href="admin.html">Admin</a>
        <a href="looping.php">Looping</a>
    </div>
</nav>

<!-- LOOPING SECTION -->
<section class="section">
    <h2>Looping Belajar PHP</h2>

    <div class="grid">
        <?php
        for ($i = 1; $i <= 1000; $i++) {
            echo "
            <div class='card'>
                <h3>Hari ke-$i</h3>
                <p>Belajar PHP</p>
            </div>
            ";
        }
        ?>
    </div>
</section>

</body>
</html>
