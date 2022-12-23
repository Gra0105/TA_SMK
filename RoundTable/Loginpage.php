<?php
require_once("koneksi.php");

if(isset($_POST['masuk'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM userrt WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);

    //bind parameter ke query
    $params = array (
        ":username" =>$username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //jika user terdaftar
    if($user) {
        //verifikasi password
        if(password_verify($password, $user["password"])){
           //buat session
           session_start();
           $_SESSION["user"] = $user;
           //login sukses, alihkan ke halaman utama
           header("Location: menuartikel.php");
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel='stylesheet' type='text/css' href='style.css'/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="rt" align="center">
            <img src="logo2.png" width="300" height="150" alt="Logo Round Table">
            <h1 style="color:#B91646;">Round Table</h1>
			<form action="" method="POST">
					<input class="formtext" type="text" name="username" placeholder="Masukkan Username atau Email"><br><br>
					<input class="formtext" type="password" name="password" placeholder="Masukkan Password"><br><br>
					<input class="submit" type="submit" name="masuk" value="Masuk">
			</form>
			<p>
			Masih belum punya akun? <a class=daftar href="signup.php" target="_blank"> Daftar disini </a>
			</p>
        </div>
    </body>
</html>