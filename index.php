<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>KKN ITERA 87 | Home</title>
</head>
<body>
    <!-- navbar -->
    <?php require "navbar.php"; ?>

    <!-- banner -->
    <div class="container-fluid banner2 d-flex align-items-center">
        <div class="container">
            <h1 class="text-white text-center">KKN ITERA Kelompok 87 Periode Ke-12</h1>
        </div>
    </div>

     <!-- tentang kami -->
     <div class="container-fluid warna3 py-5">
        <div class="container text-center">
            <h3>Kilas Singkat Kelompok 87</h3>
            <p class="fs5 mt-4">
            Kami kelompok Kuliah Kerja Nyata (KKN) 87 dari Institut Teknologi Sumatera (ITERA) adalah tim yang penuh semangat dan berkomitmen untuk 
            memberikan kontribusi positif kepada masyarakat. Kami berkomitmen untuk mengabdikan diri selama beberapa minggu 
            ke depan untuk memberikan dampak positif kepada komunitas sekitar di Desa Nunggal Rejo ini. Sebagai anggota Kelompok KKN 87 ITERA, 
            kami dengan penuh semangat mengimplementasikan proyek-proyek inovatif kami. Fokus utama kami adalah pembuatan briket tongkol jagung, pengembangan 
            Taman Obat Keluarga (TOGA), dan pelaksanaan program Eco Print. Kami merasa bangga dapat berkontribusi pada solusi-solusi yang berkelanjutan untuk komunitas setempat. 
            Dalam menjalankan tugas kami, kami tidak hanya mengandalkan keberagaman dan kreativitas tim, tetapi juga melibatkan masyarakat dalam setiap tahap proyek. 
            Kami percaya bahwa melalui upaya bersama, kami dapat menciptakan perubahan positif yang signifikan dan memberikan dampak jangka panjang bagi komunitas.
            </p>
            <p class="fs5 mt-4">
            Dengan program-program inovatif ini, Kelompok KKN 87 ITERA berkomitmen untuk tidak hanya meninggalkan jejak positif secara fisik, tetapi juga 
            meningkatkan kualitas hidup dan kesadaran masyarakat. Mari kita dukung mereka dalam perjalanan mereka untuk menciptakan perubahan yang berarti dan 
            berkelanjutan di komunitas setempat.
            </p>
        </div>
    </div>

    <!-- tentang briket -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Program Kerja Unggulan</h3>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highlighted-briket briket-tentang d-flex justify-content-center align-items-center">
                        <h4><a class="no-decoration" href="briket.php">Briket Jagung</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-briket briket-pembuatan d-flex justify-content-center align-items-center">
                        <h4><a class="no-decoration" href="toga.php">TOGA</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-briket briket-pembuatan d-flex justify-content-center align-items-center">
                        <h4><a class="no-decoration" href="eco.php">Eco Print</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- maps -->
    <div class="container-fluid py-5">
        <div class="container text-center justify-content-center">
            <h3>Lokasi Desa Nunggal Rejo</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15896.694953842623!2d105.26981629430837!3d-5.075572818418956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40bb0fa7ec6ff3%3A0x73aab47860ce1a80!2sNunggal%20Rejo%2C%20Punggur%2C%20Central%20Lampung%20Regency%2C%20Lampung!5e0!3m2!1sen!2sid!4v1704792156465!5m2!1sen!2sid"
            width="95%" height="450" class="py-5" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- display briket -->
    <div class="container-fluid py-5">
        <div class="container text-center justify-content-center">
            <h3>Dokumentasi Kegiatan</h3>
            <div class="row mt-5">
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="image-box">
                            <img src="image/pic3.jpeg" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="image-box">
                            <img src="image/pic3.jpeg" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="image-box">
                            <img src="image/pic3.jpeg" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php"; ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/fontawesome-free-6.4.2-web/js/all.min.js"></script>
</body>
</html>