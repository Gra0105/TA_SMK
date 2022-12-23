<?php
require_once("koneksi.php");

if (isset($_POST['submit'])) {
    //filter data yang diinputkan
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    //enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    //menyiapkan query
    $sql = "INSERT INTO userrt (username, email, password) 
    VALUES (:username, :email, :password)";
    $stmt = $db->prepare($sql);

    //bind parameter ke query
    $params = array(
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );
    //eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    //jika query simpan berhasil, maka user sudah terdaftar
    //maka alihkan ke halaman login
    if ($saved) header("Location: loginpage.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sign Up Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>

<body class="signup" align=center>

    <div>
        <h2 style="color:#B91646;">Sign Up</h2>

        <form action="" method="POST">
            <input class="formtext" type="text" name="username" placeholder="Masukkan Username" required>
            <br>
            <br>
            <input class="formtext" type="email" name="email" placeholder="Masukkan Alamat Email" required>
            <br>
            <br>
            <input class="formtext" type="password" name="password" placeholder="Masukkan Password" required>
            <br>
            <br>
            <input class="submit" type="submit" name="submit" value="Daftar">
        </form>
    </div>
</body>

</html>