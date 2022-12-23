<?php 
require_once("auth.php"); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pengertian Bahasa Java </title>
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
			<header><h3 style="font-size: 25px;text-align: center;padding: 6px">Pengertian Bahasa Pemrograman Java<br><br><img src="java.jpg" alt="Gambar logo Java" width="640px" height="360px" style="float: center;padding: 6px;"></h3></header>
			<p style="padding: 6px;font-size: 17px">
				<b>Pengertian Bahasa Java</b>
				<br><br>Mengutip wikipedia, bahasa pemrograman Java adalah <i>“general-purpose computer-programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible”.</i> Terjemahan bebasnya, Java adalah “bahasa pemrograman umum (general-purpose) yang konkuren (menjalankan banyak hal secara bersamaan), berbasis class, berorientasi object dan dirancang secara khusus agar tidak bergantung pada sistem tertentu“.
				<br><br>Dari pengertian ini kita bisa melihat fitur-fitur terpenting dalam bahasa Java:
				<br><br><b># General-purpose computer-programming language #</b>
				<br><br>Java dirancang sebagai bahasa pemrograman umum yang bisa dipakai untuk membuat berbagai aplikasi, mulai untuk aplikasi desktop, website, aplikasi mobile, hingga embedded device seperti microprocessor atau perangkat pintar.<br><br>Ini berbeda dengan bahasa pemrograman yang secara khusus dipakai untuk pembuatan aplikasi tertentu. Sebagai contoh, bahasa pemrograman PHP secara khusus dipakai untuk membuat website saja.
				<br><br><b># Concurrent #</b>
				<br><br>Dalam teori komputasi, concurrent programming adalah fitur di sebuah bahasa pemrograman yang bisa menjalankan banyak hal dalam satu waktu. Lawan dari kata concurrent adalah sequential programming, dimana alur pemrograman di proses secara berurutan dari awal hingga akhir. Secara umum, <i>concurrent programming</i>  akan meningkatkan performa dari aplikasi yang dibuat.
				<br><br><b># Class-based, object-oriented #</b>
				<br><br>Mungkin inilah fitur paling terkenal di bahasa Java, yakni pemrograman berbasis object. Berbeda dengan kebanyakan bahasa pemrograman yang mendukung pemrograman prosedural dan object sekaligus (seperti C++, PHP, atau Python), bahasa Java hanya menyediakan konsep object saja.<br><br> Fitur pemrograman object ini memang akan memudahkan dalam pembuatan aplikasi yang kompleks, namun di sisi lain ini juga membuat bahasa Java relatif lebih susah dipelajari terutama bagi pemula.<br><br> Saya sendiri menyarankan tidak menjadikan bahasa Java sebagai bahasa pemrograman pertama. Konsep pemrograman object baru pas dipelajari jika sebelumnya anda sudah pernah belajar bahasa pemrograman procedural, seperti bahasa Pascal, C, atau C++.
				<br><br><b># Designed to have as few implementation dependencies as possible #</b>
				<br><br>Bahasa Java memiliki moto “Write once, run anywhere“, yang menekankan bahwa satu kode kode program Java yang kita tulis, bisa langsung berjalan di banyak perangkat dan berbagai sistem informasi, tanpa perlu di-compile ulang.<br><br> Untuk mendapatkan fitur seperti ini, bahasa Java menggunakan konsep byte code dan JVM (Java Virtual Machine).<br><br></p>
			<p style="padding: 6px">Source: <a href="https://www.duniailkom.com/tutorial-belajar-java-pengertian-bahasa-pemrograman-java/" target="_blank">Duniailkom</a></p></p>
		</article>
	</section>
        </body>
</html>