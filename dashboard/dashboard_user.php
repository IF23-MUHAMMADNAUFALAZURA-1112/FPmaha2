    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mahabarata</title>
        
        <!-- Menyertakan CSS Bootstrap dari CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Menyertakan ikon Bootstrap dari CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

        <!--font lemon-->
        <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">

        
        <style>
            /* Mengatur ukuran logo di navbar */
            .navbar-brand img {
                width: 100px;
                height: auto;
            }
            /* Mengatur gaya link navbar */
            .nav-link {
                color: black !important;
                font-weight: 500;
            }
            /* Mengatur gaya carousel */
            .carousel-item img {
                width: 100%;
                height: auto;
                object-fit: cover;
            }

            /* Media Queries untuk gambar carousel */
            @media (min-width: 992px) {
                .carousel-item img {
                    height: 500px;
                }
            }
            @media (min-width: 768px) and (max-width: 991px) {
                .carousel-item img {
                    height: 400px;
                }
            }
            @media (max-width: 767px) {
                .carousel-item img {
                    height: 300px;
                }
            }

            /* Mengatur tampilan tombol navbar di layar kecil */
            @media (max-width: 575.98px) {
                .btn-login, .btn-register {
                    width: 100%;
                    margin-left: 0;
                    margin-top: 10px;
                }
            }

            /* Gaya untuk nama anggota di carousel */
            .member-name {
                position: absolute;
                bottom: 20px;
                left: 50%;
                transform: translateX(-50%);
                color: white;
                background-color: rgba(0, 0, 0, 0.6);
                padding: 10px;
                border-radius: 5px;
                text-align: center;

        }
            .btn-daftar {
        background-color: #FFB74D; /* Warna latar belakang tombol daftar */
        border: 1px solid #FFB74D; /* Border tombol sesuai dengan warna latar */
        color: white; /* Warna teks tombol */
        font-weight: 500; /* Mengatur ketebalan font */
        margin-left: 10px; /* Jarak kiri tombol */
        }

        .btn-daftar:hover {
        background-color: #333; /* Warna latar belakang hitam saat hover */
         border-color: #333; /* Border berubah menjadi hitam saat hover */
        }
        /* Tombol accordion default */
        .accordion-button {
        background-color: transparent; /* Membuat latar belakang tombol transparan */
        color: black; /* Mengatur warna teks tombol menjadi hitam */
         }

        /* Tombol saat diperluas (accordion terbuka) */
        .accordion-button:not(.collapsed) {
        background-color: rgba(255, 183, 77, 0.5); /* Memberikan latar belakang oranye transparan saat tombol terbuka */
        color: black; /* Warna teks tetap hitam */
        }

        /* Warna saat hover */
        .accordion-button:hover {
            background-color: #FFB74D; /* Warna saat hover */
            color: white; /* Warna teks saat hover */
        }

        .navbar-brand span {
            font-size: 50px; /* Sesuaikan dengan tinggi logo Anda */
            color: #fff; /* Sesuaikan warna teks */
            margin-left: 10px; /* Menambahkan jarak antara logo dan teks */
            font-weight: bold; /* Menambah berat font jika diinginkan */
        }

        /* Gaya untuk navbar */
        .navbar-brand {
            display: flex; /* Menggunakan flexbox */
            align-items: center; /* Menyelaraskan item secara vertikal */
        }

        /* Gaya untuk teks di sebelah logo */
        .navbar-brand span {
            font-size: 40px; /* Sesuaikan dengan tinggi logo Anda */
            color: #000; /* Sesuaikan warna teks */
            margin-left: 5px; /* Menambahkan jarak antara logo dan teks */
            font-weight: bold; /* Menambah berat font jika diinginkan */
        }
        
    /* Mengatur sudut border dari elemen card agar terlihat melengkung dengan radius 15px */
    .card {
        border-radius: 15px; /* Sudut melengkung untuk card */
        overflow: hidden; /* Memastikan gambar mengikuti bentuk kartu */
        display: flex; /* Membuat card menjadi fleksibel */
        flex-direction: column; /* Mengatur elemen card secara vertikal */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan pada card */
        transition: transform 0.3s ease; /* Efek transisi saat card di-hover */
    }

    /* Menambahkan efek hover pada card */
    .card:hover {
        transform: translateY(-5px); /* Mengangkat card saat di-hover */
    }

    /* Mengatur card agar tampil penuh */
    .card {
    border-radius: 15px; /* Sudut melengkung untuk card */
    overflow: hidden; /* Memastikan gambar mengikuti bentuk kartu */
    display: flex; /* Membuat card menjadi fleksibel */
    flex-direction: column; /* Mengatur elemen card secara vertikal */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan pada card */
    transition: transform 0.3s ease; /* Efek transisi saat card di-hover */
    height: 100%; /* Membuat card mengisi seluruh container */
    }

    /* Menambahkan efek hover pada card */
    .card:hover {
    transform: translateY(-5px); /* Mengangkat card saat di-hover */
    }

    /* Mengatur gambar di bagian atas card agar gambar mengisi penuh */
    .custom-img {
    width: 100%; /* Memastikan gambar mengisi lebar card */
    height: 200px; /* Menetapkan tinggi gambar */
    object-fit: cover; /* Memastikan gambar tetap proporsional tanpa distorsi */
    border-top-left-radius: 15px; /* Membuat sudut gambar atas lebih lembut */
    border-top-right-radius: 15px; /* Membuat sudut gambar atas lebih lembut */
    }

    /* Mengatur body dari card */
    .card-body {
    font-family: Arial, sans-serif; /* Menggunakan font Arial */
    padding: 1.25rem; /* Memberikan padding sedikit lebih banyak agar lebih lega */
    flex-grow: 1; /* Membuat body card mengisi ruang yang tersedia */
    }

    /* Mengatur teks pada card */
    .card-title {
    font-size: 1.5rem; /* Ukuran font judul lebih besar agar lebih mencolok */
    color: #333; /* Warna teks judul */
    font-weight: 600; /* Memberikan ketebalan font */
    margin-bottom: 0.5rem; /* Memberikan jarak antara judul dan deskripsi */
    }

    /* Mengatur teks deskripsi di card */
    .card-text {
    color: #555; /* Warna teks deskripsi */
    font-size: 1rem; /* Ukuran font lebih besar agar mudah dibaca */
    line-height: 1.6; /* Memberikan jarak antar baris agar teks lebih nyaman dibaca */
    margin-bottom: 0.75rem; /* Memberikan jarak bawah antara deskripsi dan elemen lainnya */
    }

    /* Menambahkan sedikit efek bayangan pada card agar terlihat lebih modern */
    .card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan lembut pada card */
    border-radius: 15px; /* Memberikan sudut yang lebih lembut pada card */
    overflow: hidden; /* Membatasi elemen yang keluar dari batas card */
    }


    /* Responsif: Menyesuaikan gambar pada layar lebih kecil */
    @media (max-width: 767px) {
        .custom-img {
            height: 200px; /* Menyesuaikan tinggi gambar pada layar kecil */
        }
    }

        </style>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container-fluid">
        <!-- Logo -->
    <a class="navbar-brand" href="#">
        <img src="img/mahabarata2.png" alt="MahabarataLogo">
        <span class="ms-2" style="font-size: 24px; color: black;">Mahabarata</span> <!-- Menambahkan teks di sebelah kanan logo -->
    </a>
                <!-- Tombol toggle untuk tampilan mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Event</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
                    </ul>
               <!-- Dropdown Profile & Logout -->
               <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="../login/login_user.php" onclick="return confirmLogout()">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

        <!-- Carousel -->
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/bromo.jpg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="img/gunung1.jpg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="img/pendaki.jpg" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
            
            <!-- Kontrol untuk navigasi carousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Section Tentang Kami -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center">Tentang Kami</h2>
                <p class="text-center">Kami adalah komunitas pendaki gunung yang berdedikasi untuk berbagi pengalaman dan pengetahuan tentang alam dan pendakian. Bergabunglah bersama kami untuk menjelajahi keindahan alam Indonesia.</p>
            </div>
        </section>

        <!-- Section Acara Mendatang -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center">Acara Mendatang</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/gunung1.jpg" class="card-img-top" alt="Event 1">
                            <div class="card-body">
                                <h5 class="card-title">Pendakian Gunung Semeru</h5>
                                <p class="card-text">Tanggal: 15 November 2024<br>Lokasi: Gunung Semeru</p>
                                <a class="btn btn-outline-primary btn-sm btn-daftar" href="registrasi.php">Daftar Sekarang</a> <!-- Tombol untuk daftar -->

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/gunung2.jpg" class="card-img-top" alt="Event 2">
                            <div class="card-body">
                                <h5 class="card-title">Jelajah Alam Bali</h5>
                                <p class="card-text">Tanggal: 10 Desember 2024<br>Lokasi: Bali</p>
                                <a class="btn btn-outline-primary btn-sm btn-daftar" href="registrasi.php">Daftar Sekarang</a> <!-- Tombol untuk daftar -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/bromo.jpg" class="card-img-top" alt="Event 3">
                            <div class="card-body">
                                <h5 class="card-title">Festival Pendaki 2024</h5>
                                <p class="card-text">Tanggal: 20 Januari 2024<br>Lokasi: Jakarta</p>
                                <a class="btn btn-outline-primary btn-sm btn-daftar" href="registrasi.php">Daftar Sekarang</a> <!-- Tombol untuk daftar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    <!-- Section Anggota -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-3">Nama Pendiri Mahabarata</h2>
        <p class="text-center mb-5"><em>"Jelajahi Puncak dengan Aman, Nikmati Petualangan Tanpa Batas Bersama Mahabarata."</em></p>
        <div class="d-flex flex-wrap justify-content-center">
            <!-- Card 1 -->
            <div class="card text-center shadow-sm mx-2 mb-4" style="width: 180px; background-color: #FFB74D;">
                <img src="img/ketua.jpg" class="card-img-top custom-img mt-3" alt="ketua">
                <div class="card-body text-dark">
                    <h5 class="card-title">Dzikri Khairi Lutfi</h5>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card text-center shadow-sm mx-2 mb-4" style="width: 180px; background-color: #FFB74D;">
                <img src="img/admin.jpg" class="card-img-top custom-img mt-3" alt="admin">
                <div class="card-body text-dark">
                    <h5 class="card-title">Intan Maelani</h5>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card text-center shadow-sm mx-2 mb-4" style="width: 180px; background-color: #FFB74D;">
                <img src="img/abangdira.jpg" class="card-img-top custom-img mt-3" alt="abangdira">
                <div class="card-body text-dark">
                    <h5 class="card-title">Muhammad Lugina</h5>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="card text-center shadow-sm mx-2 mb-4" style="width: 180px; background-color: #FFB74D;">
                <img src="img/kumis.jpg" class="card-img-top custom-img mt-3" alt="kumis">
                <div class="card-body text-dark">
                    <h5 class="card-title">Ahmad Mulyana</h5>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- Section FAQ -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center">Pertanyaan yang Sering Diajukan (FAQ)</h2>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqAnswer1" aria-expanded="true" aria-controls="faqAnswer1">
                                Apa syarat untuk bergabung dengan komunitas ini?
                            </button>
                        </h2>
                        <div id="faqAnswer1" class="accordion-collapse collapse show" aria-labelledby="faq1">
                            <div class="accordion-body">
                                Kami terbuka untuk semua yang memiliki semangat berpetualang dan ingin menjelajahi alam dengan aman dan bertanggung jawab.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAnswer2" aria-expanded="false" aria-controls="faqAnswer2">
                                Bagaimana cara mendaftar acara pendakian?
                            </button>
                        </h2>
                        <div id="faqAnswer2" class="accordion-collapse collapse" aria-labelledby="faq2">
                            <div class="accordion-body">
                                Anda dapat mendaftar melalui halaman "Register" kami atau melalui tautan pendaftaran di setiap acara yang tercantum.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAnswer3" aria-expanded="false" aria-controls="faqAnswer3">
                                Apakah ada biaya untuk bergabung dengan komunitas ini?
                            </button>
                        </h2>
                        <div id="faqAnswer3" class="accordion-collapse collapse" aria-labelledby="faq3">
                            <div class="accordion-body">
                                Tidak ada biaya keanggotaan, tetapi beberapa acara mungkin memerlukan biaya pendaftaran untuk fasilitas dan perlengkapan.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Footer -->
    <footer class="bg-light text-dark text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-uppercase">Mahabarata</h5>
                    <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reiciendis magnam quaerat blanditiis cupiditate in unde ipsum accusamus ullam quia.

                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-uppercase">Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-dark">Home</a></li>
                        <li><a href="#" class="text-dark">Tentang Kami</a></li>
                        <li><a href="#" class="text-dark">Event</a></li>
                        <li><a href="#" class="text-dark">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-uppercase">Kontak Kami</h5>
                    <p>Email: <a href="mailto:info@mahabarata.com" class="text-dark">info@mahabarata.com</a></p>
                    <p>Telepon: <a href="tel:+62123456789" class="text-dark">+62 123 456 789</a></p>
                    
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-uppercase">Ikuti Kami</h5>
                    <a href="#" class="me-3 text-dark"><i class="bi bi-facebook" style="font-size: 24px;"></i></a>
                    <a href="#" class="me-3 text-dark"><i class="bi bi-instagram" style="font-size: 24px;"></i></a>
                    <a href="#" class="text-dark"><i class="bi bi-tiktok" style="font-size: 24px;"></i></a>

                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: #FFB74D;">
            &copy; 2024 Mahabarata. All rights reserved.
        </div>
    </footer>
    
    <script>
        function confirmLogout() {
            return confirm("Apakah Anda yakin ingin keluar?");
        }
    </script>


    <!-- Menyertakan JavaScript Bootstrap dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
