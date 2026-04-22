<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login</title>

<style>
body{
font-family:Arial, sans-serif;
background:#800020;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
margin:0;
}

.container{
background:white;
padding:40px;
border-radius:15px;
width:300px;
text-align:center;
box-shadow:0 10px 30px rgba(0,0,0,0.3);
}

h2{
color:#800020;
}

input{
width:100%;
padding:10px;
margin:10px 0;
border-radius:5px;
border:1px solid #ccc;
}

button{
width:100%;
padding:10px;
background:#800020;
color:white;
border:none;
border-radius:20px;
cursor:pointer;
}

.hasil{
margin-top:15px;
font-weight:bold;
}

.sukses{color:green;}
.gagal{color:red;}
.kosong{color:orange;}
</style>
</head>

<body>

<div class="container">
<h2>Login</h2>

<form method="post">
<input type="text" name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password">

<button type="submit">Login</button>
</form>

<div class="hasil">
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        echo "<div class='kosong'>Input tidak lengkap!</div>";
    }
    elseif($username == "admin" && $password == "12345"){
        echo "<div class='sukses'>Login sukses!</div>";
    }
    else{
        echo "<div class='gagal'>Login gagal!</div>";
    }
}
?>
</div>

</div>

</body>
</html>
