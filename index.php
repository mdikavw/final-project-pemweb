<?php
	session_start();
	if(!isset($_SESSION['nisn'])){
		header("Location: login.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css" />
		<script
			src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
			crossorigin="anonymous"
		></script>
		<title>Document</title>
	</head>
	<body class="sb-nav-fixed">
		<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
			<!-- Navbar Brand-->
			<a class="navbar-brand ps-3" href="index.php">SIPPDB</a>
			<!-- Sidebar Toggle-->
			<button
				class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
				id="sidebarToggle"
				href="#!"
			>
				<i class="fas fa-bars"></i>
			</button>
			<!-- Navbar Search-->
			<form
				class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"
			>
				<div class="input-group">
					<input
						class="form-control"
						type="text"
						placeholder="Search for..."
						aria-label="Search for..."
						aria-describedby="btnNavbarSearch"
					/>
					<button class="btn btn-primary" id="btnNavbarSearch" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</form>
			<!-- Navbar-->
			<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
				<li class="nav-item dropdown">
					<a
						class="nav-link dropdown-toggle"
						id="navbarDropdown"
						href="#"
						role="button"
						data-bs-toggle="dropdown"
						aria-expanded="false"
						><i class="fas fa-user fa-fw"></i
					></a>
					<ul
						class="dropdown-menu dropdown-menu-end"
						aria-labelledby="navbarDropdown"
					>
						<li><a class="dropdown-item" href="#!">Settings</a></li>
						<li><a class="dropdown-item" href="#!">Activity Log</a></li>
						<li><hr class="dropdown-divider" /></li>
						<li><a class="dropdown-item" href="logout-action.php">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<div id="layoutSidenav">
			<div id="layoutSidenav_nav">
				<nav class="sb-sidenav accordion sb-sidenav-dark">
					<div class="sb-sidenav-menu">
						<div class="nav">
							<a class="nav-link" href="beranda.html">
								<div class="sb-nav-link-icon">
									<i class="fa-solid fa-house"></i>
								</div>
								Beranda
							</a>
							<a
								class="nav-link collapsed"
								href="beranda.html"
								data-bs-toggle="collapse"
								data-bs-target="#collapseLayouts"
								aria-expanded="false"
								aria-controls="collapseLayouts"
							>
								<div class="sb-nav-link-icon">
									<i class="fa-solid fa-square-pen"></i>
								</div>
								Pendaftaran
								<div class="sb-sidenav-collapse-arrow">
									<i class="fas fa-angle-down"></i>
								</div>
							</a>
							<div
								class="collapse"
								id="collapseLayouts"
								aria-labelledby="headingOne"
								data-bs-parent="#sidenavAccordion"
							>
								<nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link" href="form-pendaftaran.html"
										>Pendaftaran Peserta Didik Baru</a
									>
									<a class="nav-link" href="edit-pendaftaran.html"
										>Edit Pendaftaran</a
									>
									<a class="nav-link" href="cek-status.html">Cek Status Pendaftaran</a>
								</nav>
							</div>
							<a class="nav-link" href="peringkat.html">
								<div class="sb-nav-link-icon">
									<i class="fa-solid fa-ranking-star"></i>
								</div>
								Peringkat
							</a>
							<a class="nav-link" href="#">
								<div class="sb-nav-link-icon">
									<i class="fa-solid fa-circle-info"></i>
								</div>
								Informasi
							</a>
						</div>
					</div>
				</nav>
			</div>
			<div id="layoutSidenav_content">
				<?php
					include('module.php');
				?>
			</div>
		</div>
	</body>
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		crossorigin="anonymous"
	></script>
	<script src="script.js"></script>
</html>
