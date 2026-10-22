<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR76PRx-4AzIHeiR8nvuGRE5IzJnuD3HRGydNF694A19Q&s=10"
                width="45" class="me-2" alt="logo">
            <div>
                <b>SMKS PGRI WLINGI</b>
                <small class="d-block">SMP/SMK/SMA</small>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 250px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/">beranda</a></li>
                            <li><a class="dropdown-item" href="/responsive">responsive</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Akademik
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/beranda">beranda</a></li>
                            <li><a class="dropdown-item" href="/responsive">responsive</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kesiswaan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/beranda">beranda</a></li>
                            <li><a class="dropdown-item" href="/responsive">responsive</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Berita
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/beranda">beranda</a></li>
                            <li><a class="dropdown-item" href="/responsive">responsive</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="true">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="true">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- carousel --}}
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTutvQ7EQdLecwxmgbjnhrZkRnJSRrm43eLOoowvsjbivgmx7yrfBXhkWY&s=10"
                    class="d-block w-100" style="height: 600px; object-fit: cover;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQggm2RmI3uEAgKa_1ywSCJlpaK2Bp0g8Jv3v0vV0rT6A&s=10"
                    class="d-block w-100" style="height: 600px; object-fit: cover;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.gamelab.id/uploads/modules/2%20(28).jpg?1640245441122" class="d-block w-100"
                    style="height: 600px; object-fit: cover;" alt="...">
            </div>
            <div class="carousel-caption">
                <h5>Selamat Datang Di Website Sekolah</h5>
                <p>Bersama Kita Wujudkan Generasi Yang Cerdas,Berakhlak dan Berprestasi</p>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- container+row --}}
    <div class="container">
        <div class="row mt-3">
            {{-- card 1 --}}
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h1>Sambutan Kepala Sekolah</h1>
                        <img src="https://i.ytimg.com/vi/XjmNoA9cb6s/maxresdefault.jpg" width="250"
                            class="float-start me-3 mb-2" alt="...">
                        <b>
                            <h4>Asalamu'alaikum Wr.Wb.</h4>
                        </b>
                        <p>
                            Puji syukur kita panjatkan ke hadirat Tuhan Yang Maha Esa atas segala rahmat dan
                            karunia-Nya, sehingga kita senantiasa diberikan kesehatan dan kesempatan untuk terus belajar
                            serta berkembang. Selamat datang di website resmi sekolah kami.

                            Website ini merupakan salah satu
                            sarana bagi sekolah untuk memberikan informasi dan menjalin komunikasi dengan seluruh warga
                            sekolah maupun masyarakat. Melalui website ini, berbagai informasi mengenai kegiatan
                            sekolah, program pendidikan, prestasi siswa, pengumuman, dan berbagai kegiatan lainnya dapat
                            diakses dengan lebih mudah.

                            Sebagai lembaga pendidikan, sekolah memiliki peran penting dalam membentuk generasi yang
                            tidak hanya memiliki pengetahuan dan keterampilan, tetapi juga memiliki karakter,
                            kedisiplinan, tanggung jawab, serta kepedulian terhadap lingkungan sekitar. Oleh karena itu,
                            kami terus berusaha memberikan pelayanan pendidikan yang baik dan menciptakan suasana
                            belajar yang aman, nyaman, dan menyenangkan bagi seluruh siswa.

                            Kami juga menyadari bahwa keberhasilan pendidikan tidak dapat dicapai oleh sekolah sendiri.
                            Dibutuhkan kerja sama yang baik antara kepala sekolah, guru, tenaga kependidikan, siswa,
                            orang tua, dan masyarakat. Dengan adanya kerja sama dan dukungan dari semua pihak, kami
                            berharap sekolah dapat terus berkembang dan memberikan pendidikan yang berkualitas.

                            Kami mengajak seluruh siswa untuk terus semangat dalam belajar, mengembangkan potensi dan
                            bakat, serta berani mencoba hal-hal baru yang positif. Jadikan setiap pengalaman di sekolah
                            sebagai bekal untuk meraih cita-cita dan menghadapi masa depan.

                            Akhir kata, kami mengucapkan terima kasih kepada seluruh pihak yang telah memberikan
                            dukungan kepada sekolah. Semoga website ini dapat menjadi media informasi yang bermanfaat
                            dan dapat mempererat hubungan antara sekolah dengan seluruh masyarakat.

                            <b>
                                <h6>Wassalamu'alaikum Wr.Wb.</h6>
                            </b>
                        <p>
                            Kepala Sekolah
                        </p>
                        </p>
                    </div>
                </div>
            </div>
            {{-- card 2 --}}
            <!-- card link -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">

                        <div class="card shadow-sm border-0">

                            <!-- Header -->
                            <div class="card-header bg-white border-0 pb-0">
                                <h5 class="fw-bold mb-0">Pengumuman Terbaru</h5>
                            </div>
                            <!-- Daftar Pengumuman -->
                            <div class="list-group list-group-flush">
                                <!-- Pengumuman 1 -->
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex align-items-start">

                                        <div class="me-3">
                                            <i class="bi bi-file-earmark-text fs-4"></i>
                                        </div>

                                        <div class="flex-grow-1">
                                            <h6 class="fw-bold mb-1">
                                                Pendaftaran Peserta Didik Baru
                                            </h6>

                                            <p class="mb-1 small">
                                                Tahun Ajaran 2025/2026
                                            </p>

                                            <small class="text-muted">
                                                📅 15 Apr 2025
                                            </small>
                                        </div>

                                        <div>
                                            →
                                        </div>

                                    </div>
                                </a>

                                <!-- Pengumuman 2 -->
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex align-items-start">

                                        <div class="me-3">
                                            <i class="bi bi-file-earmark-text fs-4"></i>
                                        </div>

                                        <div class="flex-grow-1">
                                            <h6 class="fw-bold mb-1">
                                                Jadwal Ujian Semester Genap
                                            </h6>

                                            <p class="mb-1 small">
                                                Tahun Ajaran 2024/2025
                                            </p>

                                            <small class="text-muted">
                                                📅 10 Apr 2025
                                            </small>
                                        </div>

                                        <div>
                                            →
                                        </div>

                                    </div>
                                </a>

                                <!-- Pengumuman 3 -->
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex align-items-start">

                                        <div class="me-3">
                                            <i class="bi bi-file-earmark-text fs-4"></i>
                                        </div>

                                        <div class="flex-grow-1">
                                            <h6 class="fw-bold mb-1">
                                                Informasi Libur Idul Fitri 1446 H
                                            </h6>

                                            <small class="text-muted">
                                                📅 25 Mar 2025
                                            </small>
                                        </div>

                                        <div>
                                            →
                                        </div>

                                    </div>
                                </a>

                            </div>

                            <!-- Footer -->
                            <div class="card-footer bg-white border-0 text-center">
                                <a href="#" class="text-decoration-none fw-bold">
                                    Lihat Semua Pengumuman →
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


            <!-- CSS Efek Hover -->
            <style>
                .list-group-item-action {
                    transition: background-color 0.2s ease,
                        color 0.2s ease;
                }

                .list-group-item-action:hover {
                    background-color: #f5f8ff;
                    color: #0d6efd;
                }

                .list-group-item-action h6 {
                    color: #495057;
                }

                .list-group-item-action:hover h6 {
                    color: #0d6efd;
                }

                .card-footer a:hover {
                    text-decoration: underline !important;
                }
            </style>



            <div class="container">
                <div class="col-9">
                    <h4 class="border-start border-primary border-4 ps-3 text-secondary fw-bold">
                        Kegiatan Terbaru</h4>
                </div>
                <div class="row align-items-start">
                    <div class="card" style="width: 18rem;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS19foifeYzV0n3lwNfQS31_SWd13xYLrBJBHpLZrF_pw&s"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Upacara Hari Pendidikan Nasional</h5>
                            <small class="text-muted">
                                📅 27 Mei 2025
                            </small>
                            <p class="card-text">Peringatan Hari Pendidikan Nasional (Hardiknas) di SMK
                                PGRI Wlingi
                                dilaksanakan melalui upacara bendera khidmat yang diikuti oleh seluruh
                                siswa, guru, dan
                                staf di lapangan sekolah. Momen tahunan setiap tanggal 2 Mei ini menjadi
                                wadah bagi
                                warga Hammer School untuk menghargai jasa para pahlawan pendidikan yang
                                telah
                                memperjuangkan hak belajar bangsa. Melalui amanat pembina upacara,
                                seluruh siswa.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAEbbf5wbGfoPjeJSxs_koojHCsR58RJuk2V4aa3Yc4Q&s=10"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kegiatan Ekstrakurikuler Pramuka</h5>
                            <small class="text-muted">
                                📅 28 Apr 2025
                            </small>
                            <p class="card-text">Ekstrakurikuler Pramuka di SMK PGRI Wlingi menjadi
                                salah satu wadah
                                utama pembentukan karakter siswa melalui berbagai program kepanduan
                                aktif yang dinaungi
                                oleh Gugus Depan (Gudep) 14.041–14.042 Ambalan Jendral Sudirman - Dewi
                                Sartika. Kegiatan
                                ini rutin menyelenggarakan agenda tahunan penting seperti Penerimaan
                                Tamu Ambalan (PTA)
                                bagi siswa baru di Bumi Perkemahan Puspa Jagad serta Diklat Bantara.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCPuCUtEOF6v4KkwCXrU3PSlnT4k8fFDFGtAXWxi4wmA&s=10"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lomba Seni dan Olahraga Antarkelas</h5>
                            <small class="text-muted">
                                📅 20 Apr 2025
                            </small>
                            <p class="card-text">SMK PGRI Wlingi aktif mewadahi bakat siswa di bidang
                                seni dan olahraga
                                melalui berbagai kegiatan ekstrakurikuler serta fasilitas yang memadai.
                                Pada bidang
                                seni, sekolah ini memiliki ekskul unggulan seperti Karawitan Hammer
                                Laras Madya, Hadroh,
                                Film Club, serta kegiatan kunjungan edukatif seni ke luar kota.
                                Sementara di bidang
                                olahraga, siswa dapat mengasah prestasi dan kebugaran fisik melalui tim
                                sepak
                                bola,futsal.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ704OfacapS42IQlLnCCyUP-4x9Cc-ejExW4-jL9m8OQ&s=10"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kunjungan Edukasi ke Museum</h5>
                            <small class="text-muted">
                                📅 15 Apr 2025
                            </small>
                            <p class="card-text">Hingga saat ini, tidak ada catatan resmi mengenai
                                agenda kunjungan
                                edukasi dari SMK PGRI Wlingi ke Museum Kata (seperti Museum Kata Andrea
                                Hirata di
                                Belitung), karena kegiatan studi kenal alam dan peninjauan seni sekolah
                                tersebut
                                biasanya difokuskan ke destinasi budaya dan sejarah regional seperti
                                Museum Penataran di
                                Blitar, Museum Ullen Sentalu dan pameran ARTJOG di Yogyakarta, serta
                                Museum Angkut di
                                Malang.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="bg-dark text-white mt-4">
                <div class="container-fluid py-3">

                    <div class="row align-items-center">

                        <!-- Kiri -->
                        <div class="col-md-4">
                            <h6 class="mb-1">Nama Sekolah</h6>
                            <small>SMP / SMK / SMA</small>
                        </div>

                        <!-- Tengah -->
                        <div class="col-md-4 border-start border-end">
                            <h6 class="mb-1">Website di Kembangkan oleh</h6>
                            <small>Kelompok Komputer dan Audio Video</small>
                        </div>

                        <!-- Kanan -->
                        <div class="col-md-4">
                            <small>© 2025 Nama Sekolah. All rights reserved.</small>
                            <br>
                            <small>Website Sekolah</small>
                        </div>

                    </div>

                </div>
            </footer>
        </div>
    </div>
    </div>
</body>

</html>
