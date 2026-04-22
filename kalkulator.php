<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator - Sa-Na Library</title>

    <style>
        body{
            font-family: 'Playfair Display', serif;
            background:#fdfdfd;
            margin:0;
        }

        /* NAVBAR */
        .navbar{
            position:fixed;
            top:0;
            width:100%;
            display:flex;
            justify-content:space-between;
            padding:15px 5%;
            background:#800020;
            color:white;
        }

        .nav-links a{
            color:white;
            text-decoration:none;
            margin:0 10px;
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
            width:300px;
            margin:auto;
            border-radius:15px;
            box-shadow:0 10px 30px rgba(0,0,0,0.2);
        }

        input, select{
            width:100%;
            padding:10px;
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
    <div>Sa-Na Public Library</div>
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="looping.php">Looping</a>
        <a href="kalkulator.php">Kalkulator</a>
    </div>
</div>

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
