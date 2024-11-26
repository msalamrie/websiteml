<?php
// Pastikan pengguna sudah login, jika belum, arahkan ke halaman login.
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Menampilkan data pengguna yang sedang login
include('db.php');
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link rel="icon" href="image/favicon.jpg" type="image/x-icon">

    <title>Beranda</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<style>
	.card {
		margin-bottom: 2rem;
		box-shadow: 0 2px 2px rgba(0,0,0,0.8);
	}
	#logout {
		background-color: #800000;
		border-radius: 5px;
	}
	
	#logout:hover {
		background-color: #DF0000;
	}
	
	#logout-a {
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
	</style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="beranda.php">Coffe Blends | Angkringan +62</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="beranda.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registrasi.php">Registrasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="daftar_tim.php">Daftar Tim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tentang_kami.php">Tentang Kami</a>
                </li>
                <li class="nav-item" id=logout>
                    <a class="nav-link" id=logout-a href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Konten Beranda -->
    <div class="container mt-5">
        <h2>Selamat datang, <?php echo htmlspecialchars($user['username']); ?>!</h2>
        <p>Ini adalah halaman Untuk Mendaftarkan Tim-tim Anda dalam Pelaksanaan Turnamen yang kami buat, Sehingga untuk Peserta yang mendaftar diharapkan untuk mengisi data yang sesuai, karena ketika daata telah di daftarkan maka udah tidak dapat di rubah lagi, terimakasih atas perhatiannya.</p>

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
