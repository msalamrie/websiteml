<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link rel="icon" href="../image/favicon.jpg" type="image/x-icon">

    <title>Ringkasan Kegiatan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
		.card {
		margin-bottom: 2rem;
		box-shadow: 0 2px 2px rgba(0,0,0,0.8);
		}
		
        /* Menggunakan Flexbox untuk memastikan footer tetap di bawah */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
        }

        /* Footer agar tetap di bawah */
        footer {
            background-color: #6c757d;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 10rem; /* Agar footer tetap di bawah */
        }

        .sosial a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        .sosial a:hover {
            color: blue;
        }

        .fother {
            font-weight: bold;
        }
		.logo-size {
			width: 75px; /* Atur lebar logo */
			height: 75px; /* Atur tinggi logo */
			object-fit: cover; /* Pastikan gambar tidak terdistorsi */
			position: absolute;
			bottom: 10px;
			right: 20px;
		}
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="kegiatan1.php">Coffe Blends | Angkringan +62</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- Konten Halaman -->
    <div class="container mt-5">
        <h2>Ringkasan Kegiatan Season 1</h2>
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img src="kegiatan1/logoRK.jpg" class="card-img-top" alt="Juara 1">
					<div class="card-body">
						<h5 class="card-title">JUARA 1</h5>
						<p class="card-text">TIM Rumah Kopi (RK)</p>
					</div>
					<img src="kegiatan1/logoRK.jpg" class="rounded-circle logo-size" alt="Juara 1">
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="kegiatan1/j2.jpg" class="card-img-top" alt="Juara 2">
					<div class="card-body">
						<h5 class="card-title">JUARA 2</h5>
						<p class="card-text">TIM Mugiwara</p>
					</div>
					<img src="kegiatan1/logoMW.jpg" class="rounded-circle logo-size" alt="Juara 2">
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="kegiatan1/j3.jpg" class="card-img-top" alt="Juara 3">
					<div class="card-body">
						<h5 class="card-title">JUARA 3</h5>
						<p class="card-text">TIM Asyifa V9</p>
					</div>
					<img src="kegiatan1/logoV9.jpg" class="rounded-circle logo-size" alt="Juara 3">
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="kegiatan1/mvp.jpg" class="card-img-top" alt="mvp">
					<div class="card-body">
						<h5 class="card-title">MVP</h5>
						<p class="card-text">Blicii' x ERKA</p>
					</div>
					<img src="kegiatan1/logoRK.jpg" class="rounded-circle logo-size" alt="MVP">
				</div>
			</div>
		</div>
    </div>

    <!-- Footer -->
    <footer class="fother">
        <p class="mb-0">Coffe Blends | Angkringan +62 &copy; 2024</p>
        <p>Follow us on</p>
        <div class="sosial">
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
