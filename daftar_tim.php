<?php
include('db.php');

// Mengambil semua tim yang terdaftar
$sql_teams = "SELECT * FROM teams";
$stmt_teams = $pdo->prepare($sql_teams);
$stmt_teams->execute();
$teams = $stmt_teams->fetchAll();

// Mengambil pemain untuk setiap tim
$sql_players = "SELECT * FROM players WHERE team_id = ?";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link rel="icon" href="image/favicon.jpg" type="image/x-icon">

    <title>Daftar Tim</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<style>
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
        <h2>Daftar Tim</h2>

        <?php if ($teams): ?>
            <div class="row">
                <?php foreach ($teams as $team): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?php echo $team['team_logo']; ?>" class="card-img-top" alt="<?php echo $team['team_name']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($team['team_name']); ?></h5>
                                <h6>Anggota Tim:</h6>
                                <ul class="list-group">
                                    <?php
                                    $stmt_players = $pdo->prepare($sql_players);
                                    $stmt_players->execute([$team['id']]);
                                    $players = $stmt_players->fetchAll();
                                    foreach ($players as $player): ?>
                                        <li class="list-group-item">
                                            <strong><?php echo htmlspecialchars($player['player_name']); ?></strong> 
                                            (ID Game: <?php echo htmlspecialchars($player['game_id']); ?>)
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>Tidak ada tim yang terdaftar.</p>
        <?php endif; ?>
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
