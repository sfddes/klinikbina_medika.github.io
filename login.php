<?php
include_once 'koneksi.php';
// Mencegah caching halaman
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

session_start();


// Menampilkan notifikasi logout
if (isset($_SESSION['logout'])) {
    echo '<script>
        window.onload = function() {
            alert("Anda telah logout dari akun Anda.");
        }
    </script>';
    unset($_SESSION['logout']);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/logincss.css">
    <style>
        .container form button{
    text-align: center;
    width: 100%;
    border-radius: 4px;
    padding: 5px 0;
    border: none;
    background-color:#f27641;
    font-size: 18px;
    color: #fafafa;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
.label {
    text-align: left;
    margin-left: 5px; /* Anda dapat menyesuaikan margin sesuai kebutuhan */
    font-weight: bold; /* Menjadikan tulisan label tebal */
    color: #323232;
}

    </style>
</head>
<body>
<?php

    ?>
    <div class="logo">
        <h1 class="heading-style-left-padding">BINA MEDIKA</h1>
	        <div class="container">

	        	<p class="tulisan_login">LOGIN</p>

	        	<form action = "proses-login-petugas.php" method ="post" id="login" class="input" style="text-align: left;">
	        		<label class="label">Username</label>
	        		<input type="text" name="username" class="form_login" placeholder="Username">
	        		<label class="label">Password</label>
	        		<input type="password" name="password" class="form_login" placeholder="Password">
                <button type="submit" value="LOGIN" >Login</button>
	        		<br/>
	        		<br/>   
	        		<center>
	        		</center>
	        	</form>
                <br/>
                <!-- <div class="bottom">
                    <a href="signup.php">Register</a>
                    <a href="#">Forgot Password</a>
                </div> -->
            </div>
    </div>
 
</body>
</html>