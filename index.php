<!-- perulangan foreach khusus untuk membaca array -->
<?
// array carousel

$carousel=array(
	(object)array(
		"carousel_item"=>"active",
		"gambarCarousel"=>"img/carousel/carousel-1.jpg",
		"judul"=>"Jong Kreatif Academy",
		"text"=>"berita teraktual dan terkini akan kami sajikan dengan penuh tanggung jawab"
	),
	(object)array(
		"carousel_item"=>" ",
		"gambarCarousel"=>"img/carousel/carousel-2.jpg",
		"judul"=>"Dapatkan Berita Setiap Hari",
		"text"=>"Nikmati artikel-artikel yang kami suguhkan dengan gratis kapanpun dan dimanapun"
	),
	(object)array(
		"carousel_item"=>" ",
		"gambarCarousel"=>"img/carousel/carousel-3.jpg",
		"judul"=>"Salau Satu Media Berita Online yang Ada di Indonesia",
		"text"=>"Jadikan Kami Sebagai Media Berita Online terbaik Untuk Anda"
	),
);

// array fitur
$fitur=array(
	(object)array(
		"icon"=>"bi bi-person-circle",
		"judul"=>"Profile",
		"text"=>"Your Name"
	),
	(object)array(
		"icon"=>"bi bi-envelope-fill",
		"judul"=>"Mail",
		"text"=>"jongxx@xxxx.com"
	),
	(object)array(
		"icon"=>"bi bi-telephone-fill",
		"judul"=>"Contact",
		"text"=>"021-93xxxxxx"
	),
);

// array artikel

$artikel=array(
	(object)array(
		"gambarArtikel"=>"img/artikel/berita-1.jpg",
		"judul"=>"Akhir Pilu Lumba-Lumba 5 Meter yang Terdampar di Pantai Minahasa Selatan",
		"text"=>"Seekor lumba-lumba terdampar di pesisir pantai Desa Lopana, Kecamatan Amurang Timur, Kabupaten Minahasa Selatan, Sulut, Rabu (6/10/2021)."
	),
	(object)array(
		"gambarArtikel"=>"img/artikel/berita-2.jpg",
		"judul"=>"Upaya BSSN Jaga Keamanan Siber Saat PON XX Papua 2021",
		"text"=>"Badan Siber dan Sandi Negara (BSSN) menyatakan bahwa secara umum, kondisi Papua aman untuk menyelenggarakan Pekan Olahraga Nasional atau PON XX tahun 2021."
	),
	(object)array(
		"gambarArtikel"=>"img/artikel/berita-3.jpg",
		"judul"=>"HUT ke-76 TNI, Bendera Merah Putih Raksasa Berkibar di Langit Jakarta",
		"text"=>"TNI AU mengerahkan enam helikopter yang membawa bendera Merah Putih serta bendera Trimatra raksasa dalam rangka memperingati HUT ke-76 TNI di langit Jakarta."
	),
	(object)array(
		"gambarArtikel"=>"img/artikel/berita-4.jpg",
		"judul"=>"Infografis Ada Kandungan Parasetamol di Perairan Teluk Jakarta",
		"text"=>"Adanya kandungan parasetamol di Teluk Jakarta diungkapkan pada Sabtu 2 Oktober 2021. Berdasarkan riset awal Badan Riset dan Inovasi Nasional atau BRIN bersama University of Brighton, Inggris."
	),
	(object)array(
		"gambarArtikel"=>"img/artikel/berita-5.jpg",
		"judul"=>"Transaksi Saham CASA Sentuh Rp 1,1 Triliun di Pasar Negosiasi",
		"text"=>"Transaksi harian di Bursa Efek Indonesia (BEI) sentuh Rp 21,8 triliun pada perdagangan Rabu (6/10/2021).
Mengutip data RTI, saham  CASA menguat 6,52 persen ke posisi Rp 392 per saham di pasar negosiasi pada Rabu pekan ini."
	),
	(object)array(
		"gambarArtikel"=>"img/artikel/berita-6.jpg",
		"judul"=>"MU Izinkan Pemainnya Hengkang, Klub Rival Siap Tampung",
		"text"=>"Gelandang Manchester United atau MU, Donny van de Beek, dikabarkan akan diizinkan meninggalkan Old Trafford selama jendela transfer Januari. Van de Beek kemungkinan bisa pindah ke klub Liga Inggris lainnya."
	)
);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="icons/font/bootstrap-icons.css">

	<script type="text/javascript" src="bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<!--header-->	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid bg-light">

			<!--navbar brand-->
			<a class="navbar-brand" href="#">
				<img src="jong_koding_logo.png"/>
			</a>

			<!--navbar toggler-->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false" aria-label="Togglenavigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!--navbar collapse-->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Login</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#">Register</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!--carousel indicator-->
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		
		<!--carousel indicator-->
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>

		<!--carousel inner-->
		<div class="carousel-inner">
			<? foreach ($carousel as $data) {?>
			<div class="carousel-item <?=$data->carousel_item?>">
				<img src='<?=$data->gambarCarousel?>' class='d-block w-100'>
				<div class="carousel-caption d-none d-md-block">
					<h5><?=$data->judul?></h5>
					<p><?=$data->text?></p>
				</div>
			</div>
			<?}?>
		</div>

		<!--carousel navigation-->
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>

		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<!--grid system bagian 1-->
	<div id="features" class="py-5">
		<div class="container">
			<div class="row">
				
				<? foreach ($fitur as $data) {?>
				<!--box 1-->
				<div class="col col-12 col-lg-4 mb-2">
					<div class="card text-center py-3">
						<div class="card-body">
							<div class="icon mb-4">
								<i class='<?=$data->icon?>'></i>
							</div>
							<h5 class="card-title"><?=$data->judul?></h5>
							<p class="card-text"><?=$data->text?></p>
						</div>
					</div>
				</div>
				<?}?>

			</div>
		</div>
	</div>
	
	<!--grid system bagian 2-->
	<div id="blog" class="py-5">
		
		<div class="container">
			
			<div class="row">

				<!--box -->
				<? foreach ($artikel as $data) {?>
				
				<div class="col-12 col-lg-6 mb-2">

					<div class="card mb-3">
						<img src='<?=$data->gambarArtikel?>' class='card-img-top'>
						<div class="card-body">
							<h5 class="card-title"><?=$data->judul?></h5>
							<p class="card-text"><?=$data->text?></p>
							<p class="card-text"><small class="text-muted">Last update 3 mins ago</small></p>
						</div>
					</div>

				</div>
				<?}?>

			</div>

		</div>

	</div>
</body>
</html>
<!---->
