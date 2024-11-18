<?php
// Koneksi ke database menggunakan PDO
try {
    $host = 'localhost'; // atau IP server database
    $dbname = 'mahabarata_advent'; // ganti dengan nama database Anda
    $username = 'root'; // ganti dengan username database Anda
    $password = ''; // ganti dengan password database Anda

    // Mengatur PDO untuk MySQL
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}

// Proses jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari form
    $metode_pembayaran = $_POST['metode_pembayaran'];
    $nominal = $_POST['nominal'];

    // Menyimpan data transaksi ke database
    try {
        // Query untuk memasukkan data transaksi
        $sql = "INSERT INTO transaksi (metode_pembayaran, nominal) VALUES (:metode_pembayaran, :nominal)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':metode_pembayaran', $metode_pembayaran);
        $stmt->bindParam(':nominal', $nominal);
        $stmt->execute();
        
        // Menampilkan pesan sukses dan instruksi pembayaran sesuai metode yang dipilih
        echo "<h2 class='text-center'>Pembayaran Berhasil!</h2>";
        echo "<div class='text-center'><p>Terima kasih telah memilih metode pembayaran: <strong>$metode_pembayaran</strong>.</p>";
        echo "<p>Jumlah yang harus dibayar: <strong>$nominal</strong>.</p>";

        // Menampilkan instruksi pembayaran sesuai dengan metode yang dipilih
        if ($metode_pembayaran == 'transfer_bank') {
            echo "<p>Silakan transfer ke rekening bank berikut:</p>";
            echo "<p><strong>Bank BCA:</strong> 123-456-789</p>";
        } elseif ($metode_pembayaran == 'ovo') {
            echo "<p>Silakan bayar melalui OVO ke nomor <strong>0812-3456-7890</strong></p>";
        } elseif ($metode_pembayaran == 'gopay') {
            echo "<p>Silakan bayar melalui GoPay ke nomor <strong>0812-3456-7890</strong></p>";
        } elseif ($metode_pembayaran == 'dana') {
            echo "<p>Silakan bayar melalui DANA ke nomor <strong>0812-3456-7890</strong></p>";
        }

        echo "</div>";
    } catch (PDOException $e) {
        echo "Gagal menyimpan data transaksi: " . $e->getMessage();
    }
} else {
    // Jika form belum disubmit, tampilkan form untuk memilih metode pembayaran
    ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Acara Mahabarata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Pembayaran Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center">Metode Pembayaran untuk Acara Pendakian</h2>
            <p class="text-center">Silakan pilih salah satu metode pembayaran berikut untuk mendaftar acara.</p>
            
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Pilih Metode Pembayaran</h5>
                            

                            <!-- Formulir Pembayaran -->
                            <form action="payment.php" method="POST">
                                <div class="form-group">
                                    <label for="metode_pembayaran">Metode Pembayaran:</label>
                                    <select class="form-control" id="metode_pembayaran" name="metode_pembayaran" required>
                                        <option value="transfer_bank">Transfer Bank</option>
                                        <option value="ovo">OVO</option>
                                        <option value="gopay">GoPay</option>
                                        <option value="dana">DANA</option>
                                    </select>
                                </div>
                                <div class="form-group mt-4">
                                    <label for="nominal">Jumlah Pembayaran:</label>
                                    <input type="text" class="form-control" id="nominal" name="nominal" value="Rp 300.000" readonly>
                                </div>
                                <div class="mt-4 text-center">
                                    <button type="submit" class="btn btn-success">Lanjutkan Pembayaran</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
}
?>
