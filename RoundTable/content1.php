<?php 
require_once("auth.php"); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pengertian HTML</title>
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
			<header><h3 style="font-size: 20px;text-align: center;padding: 6px">Apa Itu HTML? Pemahaman Dasar Tentang Bahasa Markup Hypertext<br><br><img src="html.jpg" alt="Gambar HTML" width="640px" height="360px" style="float: center;padding: 6px;"></h3></header>
			<p style="padding: 6px;font-size: 17px">Berbicara soal HTML tidak hanya terbatas pada pengertiannya saja. Anda harus tahu seluk-beluknya jika ingin mahir bahasa markup yang satu ini. HTML adalah singkatan dari Hypertext Markup Language. HTML memungkinkan seorang user untuk membuat dan menyusun bagian paragraf, heading, link atau tautan, dan blockquote untuk halaman web dan aplikasi.<br><br>HTML bukanlah bahasa pemrograman, dan itu berarti HTML tidak punya kemampuan untuk membuat fungsionalitas yang dinamis. Sebagai gantinya, HTML memungkinkan user untuk mengorganisir dan memformat dokumen, sama seperti Microsoft Word.<br><br>HTML dibuat oleh Tim Berners-Lee, seorang ahli fisika di lembaga penelitian CERN yang berlokasi di Swiss. Dia memiliki ide tentang sistem hypertext yang berbasis internet.Hypertext merujuk pada teks yang memuat referensi (link) ke teks lain yang bisa diakses langsung oleh viewer. Tim merilis versi pertama HTML pada tahun 1991, dan di dalamnya terdiri atas 18 HTML tag. Sejak saat itu, setiap kali bahasa HTML merilis versi teranyarnya, selalu ada tag dan attribute (tag modifier) terbaru.<br><br>Berdasarkan HTML Element Reference milik Mozilla Developer Network, untuk saat ini, ada 140 HTL tag meskipun sebagiannya sudah usang (tidak lagi didukung oleh versi terbaru browser).<br><br>Berkat popularitasnya yang terus meningkat, HTML kini dianggap sebagai web standard yang resmi. Spesifikasi HTML di-maintain dan dikembangkan oleh World Wide Web Consortiumm (W3C). Cek versi terbaru dari bahasa ini di website W3C.<br><br></p>
			<p style="padding: 6px">Source: <a href="https://www.hostinger.co.id/tutorial/apa-itu-html/" target="_blank">hostinger.co.id</a></p></p>
		</article>
	</section>
        </body>
</html>