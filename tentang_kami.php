<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link rel="icon" href="image/favicon.jpg" type="image/x-icon">

    <title>Tentang Kami</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .section-title {
            font-size: 2rem;
            margin-top: 20px;
            text-align: center;
        }
        .section-content {
            margin-bottom: 30px;
        }
        .team-member {
            margin-bottom: 20px;
        }
        .team-member img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .team-member .name {
            font-weight: bold;
            font-size: 1.2rem;
        }
        .team-member .role {
            font-size: 1rem;
            color: gray;
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
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="section-title">Tentang Kami</h1>

        <div class="section-content">
            <h2 class="section-title">Visi dan Misi</h2>
            <p>
                .............
            </p>
            <p>
			..................
			</p>
        </div>

        <div class="section-content">
            <h2 class="section-title">Tim Pengembang</h2>
            <div class="row">
                <!-- Anggota Tim 1 -->
                <div class="col-md-4 team-member text-center">
                    <img src="https://via.placeholder.com/100" alt="Anggota Tim 1">
                    <div class="name">John Doe</div>
                    <div class="role">Lead Developer</div>
                    <p>John adalah pengembang utama yang bertanggung jawab dalam pengembangan backend dan frontend situs ini.</p>
                </div>

                <!-- Anggota Tim 2 -->
                <div class="col-md-4 team-member text-center">
                    <img src="https://via.placeholder.com/100" alt="Anggota Tim 2">
                    <div class="name">Jane Smith</div>
                    <div class="role">UI/UX Designer</div>
                    <p>Jane bertanggung jawab dalam mendesain tampilan dan pengalaman pengguna yang menarik dan mudah digunakan.</p>
                </div>

                <!-- Anggota Tim 3 -->
                <div class="col-md-4 team-member text-center">
                    <img src="https://via.placeholder.com/100" alt="Anggota Tim 3">
                    <div class="name">Alice Johnson</div>
                    <div class="role">Content Writer</div>
                    <p>Alice menulis semua konten untuk website ini, termasuk halaman tentang kami dan informasi penting lainnya.</p>
                </div>
            </div>
        </div>

        <div class="section-content">
            <h2 class="section-title">Kontak Kami</h2>
            <p>
                Jika Anda memiliki pertanyaan atau ingin bekerja sama dengan kami, silakan hubungi kami melalui email di <strong>support@gameplatform.com</strong> atau melalui media sosial kami.
            </p>
            
        </div>

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
