<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator - Sa-Na Library</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family: 'Playfair Display', serif;
            background:#fdfdfd;
        }

        /* NAVBAR */
        .navbar{
            position:fixed;
            top:0;
            left:0;
            width:100%;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:15px 5%;
            background:#800020;
            color:white;
            box-shadow:0 2px 10px rgba(0,0,0,0.2);
        }

        .logo{
            font-weight:bold;
        }

        .nav-links{
            display:flex;
            align-items:center;
        }

        .nav-links a{
            color:white;
            text-decoration:none;
            margin-left:20px;
            transition:0.3s;
        }

        .nav-links a:hover{
            opacity:0.7;
        }

        /* CONTENT */
        .container{
            margin-top:120px;
            text-align:center;
        }

        h2{
            color:#800020;
            margin-bottom:20px;
        }

        .box{
            background:white;
            padding:30px;
            width:320px;
            margin:auto;
            border-radius:15px;
            box-shadow:0 10px 30px rgba(0,0,0,0.2);
        }

        input, select{
            width:100%;
            padding:12px;
            margin:10px 0;
            border-radius:8px;
            border:1px solid #ccc;
        }

        button{
            background:#800020;
            color:white;
            border:none;
            padding:12px;
            width:100%;
            border-radius:10px;
            cursor:pointer;
            transition:0.3s;
        }

        button:hover{
            background:#a00028;
        }

        .hasil{
            margin-top:20px;
            font-weight:bold;
            color:#800020;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">Sa-Na Public Library</div>
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="looping.php">Looping</a>
        <a href="kalkulator.php">Kalkulator</a>
    </div>
</div>

<!-- CONTENT -->
<div class="container">
    <h2>Kalkulator Sederhana</h2>

    <div class="box">
        <form method="post">
            <input type="number" name="a" placeholder="Angka pertama" required>
            <input type="number" name="b" placeholder="Angka kedua" required>

            <select name="op">
                <option value="+">Tambah (+)</option>
                <option value="-">Kurang (-)</option>
                <option value="*">Kali (×)</option>
                <option value="/">Bagi (÷)</option>
            </select>

            <button type="submit">Hitung</button>
        </form>

        <div class="hasil">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $a = $_POST['a'];
                $b = $_POST['b'];
                $op = $_POST['op'];

                if ($op == "+") {
                    $hasil = $a + $b;
                } elseif ($op == "-") {
                    $hasil = $a - $b;
                } elseif ($op == "*") {
                    $hasil = $a * $b;
                } elseif ($op == "/") {
                    if ($b != 0) {
                        $hasil = $a / $b;
                    } else {
                        $hasil = "Tidak bisa dibagi 0";
                    }
                }

                echo "Hasil: " . $hasil;
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>
