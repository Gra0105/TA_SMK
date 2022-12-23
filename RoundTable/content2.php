<?php 
require_once("auth.php"); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pengertian CSS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
                .navbar {
        width: 100%;
        background-color: #B91646;
        overflow: auto;
        font-family: Helvetica;
      }
      
      /* Navbar links */
      .navbar a {
        float: left;
        text-align: center;
        padding: 20px;
        color: white;
        text-decoration: none;
        font-size: 16px;
      }
      
      /* Navbar links on mouse-over */
      .navbar .header-right a:hover {
        background-color: #FFFFFF;
        color: #B91646;
      }

      .header-right {
        float: right;
      }
      
      @media screen and (max-width: 500px) {
        .navbar a {
          float: none;
          display: block;
        }
      }
		h3{
			color: #B91646;
			text-align: center;
			border-radius: 8px;
			font-family: 'Roboto Condensed', sans-serif;
		}
		section{
			text-align: justify;
			color: black;
			padding: 17px;
			border-radius: 8px;
			font-family: 'Rubik', sans-serif;
			font-size: 15px;	
		}
		img {
			border-radius: 7px;
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

            <section>
            <article>
			<header><h3 style="font-size: 20px;text-align: center;padding: 6px">Apa Itu HTML? Pemahaman Dasar Tentang Bahasa Markup Hypertext<br><br><img src="css.jpg" alt="Gambar CSS" width="640px" height="360px" style="float: center;padding: 6px;"></h3></header>
			<p style="padding: 6px;font-size: 17px"><b>Pengertian CSS</b>

				<br><br>
				Oke pertama-tama saat mulai belajar CSS kamu tentu harus paham betul pengertiannya. Sebenarnya apa itu CSS? CSS adalah singkatan dari Cascading Style Sheets. Jika diterjemahkan ke bahasa Indonesia secara harfiah, CSS berarti “lembar penataan menurun”. Namun secara konteks, Cascading Style Sheets adalah kumpulan perintah yang digunakan untuk menjelaskan tampilan sebuah halaman situs web dalam mark-up language. Mark-up language atau bahasa markah adalah bahasa pemrograman yang biasanya digunakan membuat website.

				<br><br> Kalau kamu sudah mengenal HTML, nah itulah salah satu contoh bahasa mereka. HTML atau Hypertext Mark Up Language tergolong sebagai bahasa pemrograman yang paling standar dan lazim digunakan dalam pembuatan halaman web. HTML ini istilahnya ada di “balik layar” tampilan halaman web yang kamu akses. Tatanan sebuah situs web akan berantakan tanpa adanya bahasa pemrograman seperti HTML.<br><br>

				<b>Cara Kerja CSS</b>

				<br><br>Untuk cara kerjanya sendiri kamu bisa melihat pada Gambar 1. CSS beroperasi melalui tag style dengan atribut class warna. Dengan adanya CSS pada HTML tersebut maka pengaturan warna teks akan menjadi lebih mudah. Saat kamu ingin mengganti warna teks cukup mengetikkan tag span tanpa harus menulis ulang perintah. Jadi bisa disimpulkan bahwa CSS akan menghemat waktumu dengan perintah yang efisien.

				<br><br>Hal ini bisa terjadi karena CSS sendiri dikembangkan untuk bisa mengubah tampilan laman website tanpa harus mengganti isi konten. Jika kembali pada perumpamaan manusia dan pakaian di poin sebelumnya, dengan CSS kamu tidak mengubah bentuk manusianya tapi hanya mengganti pakaiannya. Dengan begitu untuk mengubah dan memprogram ulang tampilan website pun bisa dilakukan dalam waktu cepat.<br><br>
				<b>Peran CSS</b>
				<br><br>Dari sini kamu bisa menyimpulkan bahwa peran CSS untuk website sangatlah penting. Tanpa adanya CSS, tampilan website akan membosankan atau bahkan membutuhkan waktu lama untuk loading. Bayangkan saja kamu hanya bisa bergantung pada HTML untuk membuat sebuah situs. Bukan cuma tampilan situs akan “hambar” tapi kamu juga butuh waktu lebih lama karena harus berulang kali mengetikkan perintah.</p>
			<p style="padding: 6px">Source: <a href="https://www.dewaweb.com/blog/belajar-css-pengertian-peran-fungsi-dan-macamnya/" target="_blank">dewaweb</a></p></p>
		</article>
	</section>
        </body>
</html>