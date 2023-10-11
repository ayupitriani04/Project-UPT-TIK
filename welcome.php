<?php
session_start(); // Start session nya

// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
	header("location: index.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>

<html>
<head>
	<title>Halaman Setelah Login</title>
	<link rel="stylesheet" href="stylee.css">
</head>
<body>
<h4>WELCOME TO WEBSITE</h4>
<h5>UNDIKSHA</h5>
<P style="text-align:center"><img class="img-fluid" src="img/fotoundiksa.jpeg" alt=""></P>

	

<h5>FAKULTAS</h5>
	<h1>1. FAKULTAS TEKNIK DAN KEJURUAN</h1>
	<img class="img-fluid" src="img/fakultastdk.jpg" width="500" height="300">
	<h2>Fakultas Teknik dan Kejuruan (FTK) adalah salah satu fakultas di Universitas Pendidikan Ganesha (UNDIKSHA). Fakultas Teknik dan Kejuruan (FTK) ini dirancang untuk menghasilkan tenaga kependidikan dan non kependidikan pada bidang teknologi dan kejuruan yang berkualitas dan berdaya saing tinggi yang berlandaskan Tri Hita Karana.</h2>

	<h1>2. FAKULTAS OLAHRAGA DAN KESEHATAN</h1>
	<img class="img-fluid" src="img/fakultasodk.jpg" width="500" height="300" alt="">
	<h2>Fakultas Olahraga dan Kesehatan (FOK) adalah salah satu fakultas di Universitas Pendidikan Ganesha (UNDIKSHA). Fakultas Olahraga dan Kesehatan (FOK) ini dirancang untuk menyelenggarakan pendidikan, penelitian, pengabdian dan pengajaran untuk menghasilkan sumber daya manusia yang berkualitas tinggi, di bidang Ilmu Keolahragaan.</h2>

	<h1>3. FAKULTAS MATEMATIKA DAN ILMU PENGETAHUAN ALAM</h1>
	<img class="img-fluid" src="img/fakultasmdipa.jpg" width="500" height="300" alt="">
	<h2>Fakultas Matematika dan Ilmu Pengetahuan Alam (MIPA) adalah salah satu fakultas di Universitas Pendidikan Ganesha (UNDIKSHA). Fakultas Matematika dan Ilmu Pengetahuan Alam (MIPA) ini dirancang untuk mengembangkan ilmu pengetahuan dan teknologi serta menghasilkan tenaga kependidikan dan non kependidikan dalam bidang Matematika dan Sains yang berkualitas dan berdaya saing tinggi.</h2>

	<h1>4. FAKULTAS ILMU PENDIDIKAN</h1>
	<img class="img-fluid" src="img/fakultasip.jpg" width="500" height="300" alt="">
	<h2>Fakultas Ilmu Pendidikan (FIP) adalah salah satu fakultas di Universitas Pendidikan Ganesha (UNDIKSHA). Fakultas Ilmu Pendidikan (FIP) ini dirancang untuk Menyelenggarakan Tri Dharma Perguruan Tinggi yang meliputi pendidikan, penelitian dan pengabdian kepada masyarakat untuk menghasilkan tenaga pendidik dan kependidikan yang cerdas dan berdaya saing tinggi dalam bidang akademik dan profesi.</h2>

	<h1>5. FAKULTAS HUKUM DAN ILMU SOSIAL</h1>
	<img class="img-fluid" src="img/fakultasip.jpg" width="500" height="300" alt="">
	<h2>Fakultas Hukum Ilmu Sosial (FHIS) adalah salah satu fakultas di Universitas Pendidikan Ganesha (UNDIKSHA). Fakultas Hukum Ilmu Sosial (FHIS) ini dirancang untuk Menyelenggarakan Tri Dharma Perguruan Tinggi di bidang Pendidikan Ilmu Pengetahuan Sosial, Ilmu Hakim, Perpustakaan, dan lingkungan untuk menghasilkan sumber daya manusia yang berkualitas dan berdaya saing tinggi dalam bidang akademik, profesi dan vokasi.</h2>

	<h1>6. FAKULTAS EKONOMI</h1>
	<img class="img-fluid" src="img/fakultase.jpg" width="500" height="300" alt="">
	<h2>Fakultas Ekonomi (FE) adalah salah satu fakultas di Universitas Pendidikan Ganesha (UNDIKSHA). Fakultas Ekonomi (FE) ini dirancang untuk menyelenggarakan program akademik, vokasi, dan profesi bidang pendidikan ekonomi dan bisnis, serta mengembangkan budaya kewirausahaan mandiri.</h2>

	<h1>7. FAKULTAS BAHASA DAN SENI</h1>
	<img class="img-fluid" src="img/fakultasbds.jpg" width="500" height="300" alt="">
	<h2>Fakultas Bahasa dan Seni (FBS) adalah salah satu fakultas di Universitas Pendidikan Ganesha (UNDIKSHA). Fakultas Bahasa dan Seni (FBS) ini dirancang untuk menghasilkan sumber daya manusia yang berkualitas tinggi dalam bidang akademik dan vokasi, baik dalam bidang kependidikan maupun non-kependidikan, yang berwawasan global, berbasis kearifan lokal yang humanis, berbudaya, dan peduli lingkungan.</h2>

	<h1>8. FAKULTAS KEDOKTERAN</h1>
	<img class="img-fluid" src="img/fakultaskde.jpg" width="500" height="300" alt="">
	<h2>Fakultas Kedokteran (FK) adalah salah satu fakultas terbaru di Universitas Pendidikan Ganesha (UNDIKSHA) bertujuan untuk mencapai program studi kedokteran unggul dalam bidang kedokteran pariwisata berlandaskan Falsafah Tri Hita Karana di Asia Tahun 2045</h2>

	

	<a href="logout.php">Logout</a>

</body>
</html>
