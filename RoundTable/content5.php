<?php 
require_once("auth.php"); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Corona Virus</title>
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
			<header><h3 style="font-size: 25px;text-align: center;padding: 6px">Corona Virus (COVID-19)<br><br><img src="covid.jpg" alt="Tulisan Covid" width="640px" height="360px" style="float: center;padding: 6px;"></h3></header>
			<p style="padding: 6px;font-size: 17px">COVID-19 adalah penyakit yang disebabkan oleh virus severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). COVID-19 dapat menyebabkan gangguan sistem pernapasan, mulai dari gejala yang ringan seperti flu, hingga infeksi paru-paru, seperti pneumonia.<br><br> Kasus pertama penyakit ini terjadi di kota Wuhan, Cina, pada akhir Desember 2019. Setelah itu, COVID-19 menular antarmanusia dengan sangat cepat dan menyebar ke puluhan negara, termasuk Indonesia, hanya dalam beberapa bulan.<br><br> Penyebarannya yang cepat membuat beberapa negara menerapkan kebijakan untuk memberlakukan lockdown untuk mencegah penyebaran virus Corona. Di Indonesia, pemerintah menerapkan kebijakan Pembatasan Sosial Berskala Besar (PSBB) untuk menekan penyebaran virus ini.<br><br> <b>Penyebab COVID-19</b><br><br>COVID-19 disebabkan oleh SARS-CoV-2, yaitu virus jenis baru dari coronavirus (kelompok virus yang menginfeksi sistem pernapasan). Infeksi virus Corona bisa menyebabkan infeksi pernapasan ringan sampai sedang, seperti flu, atau infeksi sistem pernapasan dan paru-paru, seperti pneumonia.<br><br>COVID-19 awalnya ditularkan dari hewan ke manusia. Setelah itu, diketahui bahwa infeksi ini juga bisa menular dari manusia ke manusia. Penularannya bisa melalui cara-cara berikut:
				<ul>
					<li>Tidak sengaja menghirup percikan ludah (droplet) yang keluar saat penderita COVID-19 bersin atau batuk</li>
					<li>Memegang mulut, hidung, atau mata tanpa mencuci tangan terlebih dulu, setelah menyentuh benda yang terkena droplet penderita COVID-19</li>
					<li>Kontak jarak dekat (kurang dari 2 meter) dengan penderita COVID-19 tanpa mengenakan masker</li>
				</ul> </p>

			<p style="font-size: 17px"><br>CDC dan WHO menyatakan COVID-19 juga bisa menular melalui aerosol (partikel zat di udara). Meski demikian, cara penularan ini hanya terjadi dalam prosedur medis tertentu, seperti bronkoskopi, intubasi endotrakeal, hisap lendir, dan pemberian obat hirup melalui nebulizer.<br><br><b>Gejala COVID-19</b><br><br>Gejala awal infeksi COVID-19 bisa menyerupai gejala flu, yaitu demam, pilek, batuk kering, sakit tenggorokan, dan sakit kepala. Setelah itu, gejala dapat hilang dan sembuh atau malah memberat. Penderita dengan gejala yang berat bisa mengalami demam tinggi, batuk berdahak atau berdarah, sesak napas, dan nyeri dada. Gejala-gejala tersebut di atas muncul ketika tubuh bereaksi melawan virus COVID-19.<br><br>Secara umum, ada 3 gejala umum yang bisa menandakan seseorang terinfeksi COVID-19, yaitu:
				<ul>
					<li>Demam (suhu tubuh diatas 38°C)</li>
					<li>Batuk kering</li>
					<li>Sesak napas</li>
				</ul>
				<p style="padding: 6px;font-size: 17px"><br>Selain gejala di atas, ada beberapa gejala lain yang jarang terjadi, tetapi juga bisa muncul pada infeksi COVID-19, yaitu:</p>
				<ul>
					<li>Mudah lelah</li>
					<li>Nyeri otot</li>
					<li>Nyeri dada</li>
					<li>Sakit tenggorokan</li>
					<li>Sakit kepala</li>
					<li>Mual atau muntah</li>
					<li>Diare</li>
					<li>Pilek atau hidung tersumbat</li>
					<li>Menggigil</li>
					<li>Bersin-bersin</li>
					<li>Hilangnya kemampuan mengecap rasa atau mencium bau</li>
				</ul></p>

				<p style="padding: 6px;font-size: 17px"><br>Gejala COVID-19 bisa muncul dalam 2 hari sampai 2 minggu setelah seseorang terinfeksi virus penyebabnya. Sebagian pasien COVID-19 pun ada yang mengalami penurunan oksigen tanpa adanya gejala apapun. Kondisi ini disebut happy hypoxia.<br><br>Untuk memastikan apakah gejala-gejala tersebut merupakan gejala dari virus Corona, diperlukan rapid test atau PCR. Untuk menemukan tempat melakukan rapid test atau PCR di sekitar rumah Anda, klik di sini.<br><br> Pada beberapa penderita, COVID-19 dapat tidak menimbulkan gejala sama sekali. Orang yang sudah terkonfirmasi positif COVID-19 melalui pemeriksaan RT-PCR namun tidak mengalami gejala disebut sebagai kasus konfirmasi asimptomatik. Penderita ini tetap bisa menularkan COVID-19 ke orang lain.<br><br> Pada bulan juli 2020, Kementerian Kesehatan Republik Indonesia mengganti istilah operasional lama pada COVID-19, seperti ODP, PDP, OTG menjadi istilah baru, yakni suspek, probable, dan konfirmasi.<br><br></p>
			<p style="padding: 6px">Source: <a href="https://www.alodokter.com/covid-19" target="_blank">Alodokter</a></p></p>
		</article>
	</section>
        </body>
</html>