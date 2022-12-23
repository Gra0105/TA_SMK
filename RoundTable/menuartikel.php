<?php
require_once("auth.php");
//require_once("koneksi.php");

//$username = $_SESSION['username'];
//$query = "select * from userrt where username = ? limit 1";
//$stmt = $mysqli->stmt_init();
//$stmt->prepare($query);
//$stmt->bind_param('s', $username);
//$stmt->execute();
//$result = $stmt->get_result();
//$user = $result->fetch_array(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Menu Artikel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' type='text/css' href='style.css' />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		a:link {
			color: white;
			background-color: transparent;
			text-decoration: none
		}

		a:visited {
			color: white;
			background-color: transparent;
			text-decoration: none
		}
	</style>
</head>

<body>
	<div class="navbar">
		<a href="menuartikel.php" class="logo"> Round Table </a>
		<div class="header-right">
			<a href="menuartikel.php"><i class="fa fa-fw fa-home"></i> Home</a>
			<a href="logout.php"><i class="fa fa-fw fa-user"></i> Log out</a>
		</div>
	</div>
	<table width="100%" align="center">
		<!--<tr>
            <td rowspan="6" style="background-color: #2E4053;color: white;border-radius: 5px;padding: 10px;" width="2%" valign="top">
				<p align="center" style="font-family: 'Raleway', sans-serif;">Selamat Datang, <?php echo @$user['username'] ?></p> 
                </td>
                </tr> -->
		<tr style="font-family: 'Rubik', sans-serif;">
			<td style=" width: 10%;height: 70%; text-align: justify;background-color: #B91646;border-radius: 5px;padding: 10px;color: white">
				<img src="html.jpg" alt="Gambar HTML" width="190" height="120" align="left" align="top" style="padding: 10px;">
				<p style="color: white;">
					<a href="content1.php">
						<h3>Apa Itu HTML?</h3>
						Berbicara soal HTML tidak hanya terbatas pada pengertiannya saja. Anda harus tahu seluk-beluknya jika ingin mahir bahasa markup yang satu ini. HTML adalah singkatan dari Hypertext Markup Language.
				</p></a>
			</td>
		</tr>

		<tr style="font-family: 'Rubik', sans-serif;">
			<td style=" width: 10%;height: 70%; text-align: justify;background-color: #B91646;border-radius: 5px;padding: 10px;color: white">
				<img src="css.jpg" alt="Gambar CSS" width="190" height="120" align="left" align="top" style="padding: 10px;">
				<p style="color: white;">
					<a href="content2.php">
						<h3>Apasih CSS itu?</h3>
						Ingin mulai belajar CSS tetapi bingung harus memulai dari mana? Kamu bisa memulainya dengan membaca artikel ini. Di sini akan dibahas segala sesuatu tentang CSS.
				</p></a>
			</td>
		</tr>

		<tr style="font-family: 'Rubik', sans-serif;">
			<td style=" width: 10%;height: 70%; text-align: justify;background-color: #B91646;border-radius: 5px;padding: 10px;color: white">
				<img src="java.jpg" alt="Gambar logo Java" width="190" height="120" align="left" align="top" style="padding: 10px;">
				<p style="color: white;">
					<a href="content3.php">
						<h3>Pengertian bahasa pemrograman Java</h3>
						Bahasa Java merupakan sebuah bahasa pemrograman yang legendaris. Hampir semua mahasiswa IT pernah belajar dan membuat program menggunakan bahasa Java.
				</p></a>
			</td>
		</tr>

		<tr style="font-family: 'Rubik', sans-serif;">
			<td style="width: 10%;height: 70%;  text-align: justify;background-color: #B91646;border-radius: 5px;padding: 10px;color: white">
				<img src="bitcoin.jpg" alt="Gambar Bitcoin" width="190" height="120" align="left" align="top" style="padding: 10px;">
				<p style="color: white;">
					<a href="content4.php">
						<h3>Apa itu Bitcoin?</h3>
						Simak Penjelasan Lengkap Mengenai Bitcoin! – Sudah lama nama bitcoin terdengar dan orang-orang dengan antusiasnya bertransaksi atau berinvestasi pada salah satu jenis cryptocurrency ini.
				</p></a>
			</td>
		</tr>

		<tr style="font-family: 'Rubik', sans-serif;">
			<td style="width: 10%;height: 70%;  text-align: justify;background-color: #B91646;border-radius: 5px;padding: 10px;color: white">
				<img src="covid.jpg" alt="Tulisan COVID-19" width="190" height="120" align="left" align="top" style="padding: 10px;">
				<p style="color: white;">
					<a href="content5.php">
						<h3>Corona Virus (COVID-19)</h3>
						COVID-19 (coronavirus disease 2019) adalah jenis penyakit baru yang disebabkan oleh virus dari golongan coronavirus, yaitu SARS-CoV-2 yang juga sering disebut virus Corona.
				</p></a>
			</td>
		</tr>
	</table>
</body>

</html>