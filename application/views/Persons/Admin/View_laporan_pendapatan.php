<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("Assets/css/login.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("Assets/css/jquery.dataTables.min.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("Assets/bootstrap/css/bootstrap.min.css")?>">

<script src="<?php echo base_url("Assets/js/jquery-2.2.3.min.js")?>"></script>
<script src="<?php echo base_url("Assets/js/jquery.dataTables.min.js")?>"></script>
<script src="<?php echo base_url("Assets/bootstrap/js/bootstrap.min.js")?>"></script>
<title> Hello Guys</title>

</head>
<body>
<div class="header">
	<ul>
		<li><a href="#">Logout</a></li>
		<li><a href="#">Hello </a></li>
	</ul>
</div>

<div class="container-fluid">
<ul class="nav nav-pills nav-justified">
	<li><a href="<?php echo site_url("Admin/Cont_laporan/index");?>"><span class="glyphicon glyphicon-phone-alt" style="font-size:35px;"></span>Penanganan</a></li>
	<li class="dropdown">
	<a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-bed" style="font-size:35px;"></span>Stok<span class="caret"></span></a>
	<ul class="dropdown-menu"> 
		<li><a href="<?php echo site_url("Admin/Cont_laporan/stok/kartustok");?>">Kartu Stok</a></li>
		<li><a href="<?php echo site_url("Admin/Cont_laporan/stok/pemakaian");?>">Pemakaian</a></li>
		<li><a href="<?php echo site_url("Admin/Cont_laporan/stok/pindahlokasi");?>">Pindah Lokasi</a></li>
		<li><a href="<?php echo site_url("Admin/Cont_laporan/stok/penyesuaian");?>">Penyesuaian</a></li>
		<li><a href="<?php echo site_url("Admin/Cont_laporan/stok/stokhabis");?>">Stok Habis</a></li>
	</ul>
	
	</li>
	<li class="dropdown">
	<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-briefcase" style="font-size:35px;"></span>Asset<span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li><a href="<?php echo site_url("Admin/Cont_laporan/asset/daftarAsset")?>">Daftar Asset</a></li>
		<li><a href="<?php echo site_url("Admin/Cont_laporan/asset/pembelianAsset")?>">Pembelian Asset</a></li>
		<li><a href="<?php echo site_url("Admin/Cont_laporan/asset/penyesuaianAsset")?>">Penyesuaian Asset</a></li>
	</ul>	
	</li>
	
	<li class="dropdown">
	<a class="dropdown-toggle" data-toggle="dropdown"  href="#"><span class="glyphicon glyphicon-piggy-bank" style="font-size:35px;"></span>Kas dan Bank<span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li ><a href="<?php echo site_url("Admin/Cont_laporan/kasDanBank/kasPeriodik")?>">Kas Periodik</a></li>
		<li ><a href="<?php echo site_url("Admin/Cont_laporan/kasDanBank/giro")?>">Giro</a></li>
		<li><a  href="<?php echo site_url("Admin/Cont_laporan/kasDanBank/arusKas")?>">Arus Kas</a></li>
		<li><a  href="<?php echo site_url("Admin/Cont_laporan/kasDanBank/uangMuka")?>">Uang muka</a></li>
	</ul>
	</li>
	
	<li class="active dropdown">
	<a class="dropdown-toogle" data-toggle="dropdown"  href="#"><span class="glyphicon glyphicon-credit-card" style="font-size:35px;"></span>Pendapatan / Piutang <span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li class="<?php echo $active1;?>" ><a href="#menu1" data-toggle="pill">Pendapatan</a></li>
		<li class="<?php echo $active2;?>"><a href="#menu2" data-toggle="pill">Piutang</a></li>
		<li class="<?php echo $active3;?>"><a href="#menu3" data-toggle="pill">Penjualan</a></li>
		<li class="<?php echo $active4;?>"><a href="#menu4" data-toggle="pill">Penyesuaian</a></li>
		<li class="<?php echo $active5;?>"><a href="#menu5" data-toggle="pill">Rekap</a></li>
	</ul>
	</li>
	<li class="dropdown">
	<a class="dropdown-toggle" data-toggle="dropdown"  href="#"><span class="glyphicon glyphicon-shopping-cart" style="font-size:35px;"></span>Pembelian / Hutang<span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li><a href="<?php echo site_url("Admin/Cont_laporan/pembelianHutang/pembelian")?>">Pembelian</a></li>
		<li><a href="<?php echo site_url("Admin/Cont_laporan/pembelianHutang/penyesuaian")?>">Penyesuaian</a></li>
		<li><a href="<?php echo site_url("Admin/Cont_laporan/pembelianHutang/hutang")?>">Hutang</a></li>
		<li><a href="<?php echo site_url("Admin/Cont_laporan/pembelianHutang/rekapHutang")?>">Rekap Hutang</a></li>
	</ul>
	</li>
	<li class="dropdown">
	<a class="dropdown-toggle" data-toggle="dropdown"  href="#"><span class="glyphicon glyphicon-yen" style="font-size:35px;"></span>General Ledger <span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li><a href="<?php echo site_url("Admin/Cont_laporan/generalLedger/labaRugi")?>">Laba Rugi</a></li>
		<li><a href="<?php echo site_url("Admin/Cont_laporan/generalLedger/neracaSaldo")?>">Neraca Saldo</a></li>
		<li><a href="<?php echo site_url("Admin/Cont_laporan/generalLedger/bukuBesar")?>">Buku Besar</a></li>
		<li><a href="<?php echo site_url("Admin/Cont_laporan/generalLedger/jurnalPenyesuaian")?>">Jurnal Penyesuaian</a></li>
	</ul>
	</li>
</ul>

</div>
	<div class="container-fluid">
		<div class="tab-content">
			<div id="menu1" class="tab-pane fade in active">
				<h3>ASDASDASD1</h3>
			</div>
			<div id="menu2" class="tab-pane fade in ">
				<h3>ASDASDASD2</h3>
			</div>
			<div id="menu3" class="tab-pane fade in ">
				<h3>ASDASDASD3</h3>
			</div>
			<div id="menu4" class="tab-pane fade in ">
				<h3>ASDASDASD4</h3>
			</div>
			<div id="menu5" class="tab-pane fade in ">
				<h3>ASDASDASD5</h3>
			</div>
		</div>
	</div>
</body>
</html>