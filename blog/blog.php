<?php
// Koneksi ke database
$servername = "localhost";  // Ganti dengan nama host Anda (misalnya, localhost)
$username = "root";         // Ganti dengan username database Anda
$password = "";             // Ganti dengan password database Anda
$dbname = "mahabarata";     // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil data blog
$sql = "SELECT id, title, description, image FROM blogs"; // pastikan nama tabel sesuai dengan yang ada di database
$result = $conn->query($sql);

// Menyimpan data blog dalam array
$blogs = [];
if ($result->num_rows > 0) {
    // Menyimpan setiap baris data blog ke dalam array
    while($row = $result->fetch_assoc()) {
        $blogs[] = $row;
    }
} else {
    echo "0 results";
}

$conn->close(); // Menutup koneksi
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Mahabarata</title>

    <!-- Menyertakan CSS Bootstrap dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Menyertakan ikon Bootstrap dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        /* Custom Style */
        .blog-title {
            color: #FFB74D;
            font-weight: bold;
        }
        .blog-card {
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .blog-img {
            height: 200px;
            object-fit: cover;
        }
        footer {
            background-color: #FFB74D;
            color: white;
        }
        /* Custom Button Style */
        .btn-outline-primary {
            color: white;
            border-color: #FFB74D;
            background-color: #FFB74D;
        }
        .btn-outline-primary:hover {
            background-color: white;
            color: #FFB74D;
            border-color: #FFB74D;
        }
        .pagination .page-link {
            color: #FFB74D;
        }
        .pagination .page-link:hover {
            background-color: #FFB74D;
            color: white;
        }
        .pagination .page-item.active .page-link {
            background-color: #FFB74D;
            border-color: #FFB74D;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <header class="bg-light py-5 text-center">
        <div class="container">
            <h1 class="blog-title">Blog Mahabarata</h1>
            <p class="lead">Cerita, pengalaman, dan tips menarik dari komunitas Mahabarata.</p>
        </div>
    </header>

    <!-- Blog Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($blogs as $blog): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card blog-card">
                            <img src="<?php echo $blog['image']; ?>" class="card-img-top blog-img" alt="Blog Image <?php echo $blog['id']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $blog['title']; ?></h5>
                                <p class="card-text"><?php echo $blog['description']; ?></p>
                                <a href="blog-detail.php?id=<?php echo $blog['id']; ?>" class="btn btn-outline-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-3">
        <div class="container text-center">
            <p>&copy; 2024 Mahabarata. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Menyertakan JavaScript Bootstrap dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
