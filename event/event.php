<?php
// Menghubungkan ke database dengan PDO
try {
    // Ganti 'localhost' dengan server database jika diperlukan
    $pdo = new PDO('mysql:host=localhost;dbname=mahabarata_advent', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Menangani error dengan exception
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
    exit;
}

// Query untuk mengambil semua data event dari database
$sql = "SELECT * FROM events ORDER BY event_date DESC"; 
$stmt = $pdo->prepare($sql);
$stmt->execute();
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Mahabarata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/mahabarata2.png" alt="Logo" width="40" height="40">
                <span class="ms-2" style="font-size: 24px; color: black;">Event Mahabarata</span>
            </a>
        </div>
    </nav>

    <!-- Konten utama -->
    <div class="container py-5">

        <!-- Menampilkan daftar event -->
        <h3 class="mb-4">Daftar Event</h3>

        <?php if (count($events) > 0): ?>
            <div class="row">
                <?php foreach ($events as $event): ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="img/event-placeholder.jpg" class="card-img-top" alt="Event Image"> <!-- Placeholder gambar event -->
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($event['title']); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars(substr($event['description'], 0, 100)) . '...'; ?></p>
                                <p class="text-muted">Tanggal: <?php echo date("d F Y", strtotime($event['event_date'])); ?></p>
                                <a href="event_detail.php?id=<?php echo $event['id']; ?>" class="btn btn-primary">Lihat Detail</a> <!-- Link untuk melihat detail event -->
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="alert alert-info" role="alert">
                Belum ada event yang tersedia.
            </div>
        <?php endif; ?>

    </div>

    <!-- Menyertakan script JavaScript untuk Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php
// Menutup koneksi PDO
$pdo = null;
?>
