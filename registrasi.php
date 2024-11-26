<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $team_name = $_POST['team_name'];
    $team_logo = $_FILES['team_logo'];
    $players = $_POST['players'];  // Nama pemain
    $game_ids = $_POST['game_ids'];  // ID game pemain

    // Mendapatkan nama file logo dan memeriksa kecocokannya dengan nama tim
    $logo_file_name = basename($team_logo["name"]);
    $logo_file_extension = pathinfo($logo_file_name, PATHINFO_EXTENSION);
    $expected_logo_name = $team_name . '.' . $logo_file_extension;

    // Jika nama file logo tidak sesuai dengan nama tim
    if ($logo_file_name != $expected_logo_name) {
        $error_message = "Nama file logo harus sama dengan nama tim. Pastikan file logo tim Anda dinamai '$team_name'.";
    } else {
        // Menangani upload logo tim
        $logo_target_dir = "uploads/logos/";
        $logo_target_file = $logo_target_dir . $expected_logo_name;

        // Memindahkan file logo ke direktori tujuan
        if (move_uploaded_file($team_logo["tmp_name"], $logo_target_file)) {
            // Menyimpan data tim ke database
            $sql = "INSERT INTO teams (team_name, team_logo) VALUES (?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$team_name, $logo_target_file]);

            // Menyimpan data pemain dan ID game
            $team_id = $pdo->lastInsertId();
            foreach ($players as $index => $player) {
                $sql = "INSERT INTO players (team_id, player_name, game_id) VALUES (?, ?, ?)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$team_id, $player, $game_ids[$index]]);
            }

            $success_message = "Pendaftaran tim berhasil! <a href='beranda.php'>Kembali ke Beranda</a>";
        } else {
            $error_message = "Terjadi kesalahan saat mengunggah logo tim.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link rel="icon" href="image/favicon.jpg" type="image/x-icon">

    <title>Pendaftaran Tim</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<style>
	.logoname {
		font-weight: bold;
		color: #DF0000;
		font-size: 20px;
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
        <h2>Pendaftaran Tim</h2>

        <!-- Jika pendaftaran berhasil -->
        <?php if (isset($success_message)): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $success_message; ?>
        </div>
        <?php endif; ?>

        <!-- Jika ada kesalahan saat upload logo -->
        <?php if (isset($error_message)): ?>
        <div class="message text-danger">
            <?php echo $error_message; ?>
        </div>
        <?php endif; ?>

        <form method="POST" enctype="multipart/form-data" class="mt-4">
            <!-- Nama Tim -->
            <div class="form-group">
                <label for="team_name">Nama Tim</label>
                <input type="text" class="form-control" name="team_name" id="team_name" required>
            </div>

            <!-- Logo Tim -->
            <div class="form-group">
                <label for="team_logo" class=logoname>Logo Tim (Nama file harus sama dengan nama tim)</label>
                <input type="file" class="form-control-file" name="team_logo" id="team_logo" required>
            </div>

            <!-- Tabel Nama Pemain dan ID Game -->
            <h4>Anggota Tim</h4>
            <table class="table table-bordered" id="playersTable">
                <thead>
                    <tr>
                        <th>Nama Pemain</th>
                        <th>ID Game</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="players">
                    <tr class="player-entry"></tr>
                </tbody>
            </table>

            <!-- Tambah Pemain -->
            <button type="button" class="btn btn-secondary" id="addPlayerBtn">Tambah Pemain</button>
            <br><br>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Daftar Tim</button>
        </form>
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

    <!-- JavaScript untuk menambah dan menghapus input pemain -->
    <script>
        // Menambahkan pemain
        document.getElementById('addPlayerBtn').addEventListener('click', function() {
            const playersContainer = document.getElementById('players');
            const newPlayerEntry = document.createElement('tr');
            newPlayerEntry.classList.add('player-entry');
            
            newPlayerEntry.innerHTML = `
                <td>
                    <input type="text" class="form-control" name="players[]" required>
                </td>
                <td>
                    <input type="text" class="form-control" name="game_ids[]" required>
                </td>
                <td>
                    <button type="button" class="btn btn-danger remove-player-btn">Hapus</button>
                </td>
            `;
            playersContainer.appendChild(newPlayerEntry);
        });

        // Menghapus pemain
        document.getElementById('playersTable').addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-player-btn')) {
                e.target.closest('tr').remove();
            }
        });
    </script>
</body>
</html>
