<?php
include('db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link rel="icon" href="image/favicon.jpg" type="image/x-icon">

    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<style>
	.card {
		margin-bottom: 2rem;
		box-shadow: 0 2px 2px rgba(0,0,0,0.8);
	}
	#login {
		
	}
	
	.masuk:hover {
		background-color: #98FB98;
		
	}
	
	#login-a {
		color: white;
		font-weight: bold;
	}
			.sosial a{
			color: white;
			text-decoration: none;
		}
		.sosial a:hover {
			color:blue;
		}
		.fother {
			color: white;
			font-weight: bold;
		}
		.masuk {
			padding: 0 5%;
			background-color: #DF0000;
			border-radius: 5px;
		}
	</style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="dashboard.php">Coffe Blends | Angkringan +62</a>

        <div class="masuk">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" id=login>
                    <a class="nav-link" id=login-a href="loginn.php">Masuk/Daftar</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Konten Dashboard -->
    <div class="container mt-5">
        <h1>SELAMAT DATANG,</h1>
        <p>Ini adalah pusat pengelolaan informasi untuk Angkringan +62.</p>

        <!-- Informasi Kegiatan -->
        <section class="mt-5">
            <h3>Kegiatan Terbaru</h3>
            <div class="row">
			<div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Turnamen MLBB Season 3 Angkringan +62</h5>
                            <p class="card-text">COMING SOON!!!</p>
                            <a href="beranda.php" class="btn btn-primary">COMING SOON!!!</a>
                        </div>
                    </div>
                </div>
			<div class="col-md-4">
                    <div class="card">
                        <img src="image/season2.jpg" class="card-img-top" alt="Kegiatan 2">
                        <div class="card-body">
                            <h5 class="card-title">Turnamen MLBB Season 2 Angkringan +62</h5>
                            <p class="card-text">Ikuti kegiatan ini untuk pengalaman yang seru!</p>
                            <a href="kegiatan/kegiatan2.php" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="card">
                        <img src="image/season1.jpg" class="card-img-top" alt="Kegiatan 1">
                        <div class="card-body">
                            <h5 class="card-title">Turnamen MLBB Season 1 Angkringan +62</h5>
                            <p class="card-text">Ikuti kegiatan ini untuk pengalaman yang seru!</p>
                            <a href="kegiatan/kegiatan1.php" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
	
	<!-- Footer -->
    <footer class="fother bg-secondary text-center py-3 mt-5">
        <p class="mb-0">Coffe Blends | Angkringan +62 &copy; 2024  </p>
        <p>Follow us on</p>
		<div class=sosial>
		    <a href="https://facebook.com" target="_blank">Facebook</a> | 
            <a href="https://twitter.com" target="_blank">Twitter</a> | 
            <a href="https://instagram.com" target="_blank">Instagram</a>
		</div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
