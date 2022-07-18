<!DOCTYPE html>
<html>
<head>
	<title>Bossnanny</title>
	<link rel="stylesheet" href="<?=url('_assets/css/style.css')?>">
	<link rel="shortcut icon" href="<?=url('_assets/img/logo/favicon.svg')?>" type="image/x-icon">
</head>
<body>

	<header>
		<nav>
			<div class="logo">
				<a href="<?=url()?>">
					<img src="<?=url('_assets/img/logo/nav-logo.svg')?>" alt="Rumah Laundry Logo">
				</a>
			</div>
			<ul class="nav-menu">
				<li>
					<span id=""><?= ucfirst($_SESSION['master']) ?></span>
					<ul class="dropdown-menu">
						
						<li><a href="<?=url('logout.php')?>">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<div id="nav-mini">
		<a href="<?=url('index.php')?>" class="link-nav">HOME</a>
			<a href="<?=url('riwayat_transaksi/riwayat.php')?>" class="link-nav">LOWONGAN</a>
			<a href="<?=url('karyawan/karyawan.php')?>" class="link-nav">TENTANG KAMI</a>
			<a href="<?=url('paket/paket.php')?>" class="link-nav">HUBUNGI KAMI</a>
		</div>
	</header>

    