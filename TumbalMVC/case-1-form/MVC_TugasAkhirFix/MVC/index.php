<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Sehat</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-4 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">KLINIK SEHAT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-black" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link text-black" href="#about">TENTANG KLINIK</a></li>
                    <li class="nav-item"><a class="nav-link text-black" href="#check-doctors">DAFTAR DOKTER POLI</a></li>
                    <li class="nav-item"><a class="nav-link text-black" href="#team">TEAM KAMI</a></li>
                    <?php if ($isLoggedIn) : ?>
                        <li class="nav-item"><a class="nav-link text-black" href="./controllers/logoutController.php">LOGOUT</a></li>
                    <?php else : ?>
                        <li class="nav-item"><a class="nav-link text-black" href="views/login.php">LOGIN</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section class="hero text-center py-5" id="hero">
            <div class="container">
                <img src="./public/logo.png" alt="Logo Klinik Sehat" width=300 height=300 class="hero-logo mb-3">
                <h1>KLINIK SEHAT</h1>
                <h2>Universitas Brawijaya - Sistem Informasi</h2>
            </div>
        </section>
        <section class="about py-5" id="about">
            <div class="container text-center">
                <h2>TENTANG KAMI</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit
                    arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut
                    in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse
                    dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut
                    blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia
                    dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus
                    vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget
                    luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula
                    lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent
                    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue
                    sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                    posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.
                    Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris.
                </p>
            </div>
        </section>
        <section class="check-doctors text-center py-5" id="check-doctors">
            <div class="container">
                <h2>CEK DAFTAR OBAT</h2>
                <a href="router.php" class="btn mt-3 bg-primary text-white">CEK DISINI</a>
            </div>
        </section>
        <section class="team py-5" id="team">
            <div class="container text-center">
                <h2>TEAM</h2>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="team-member mx-2 my-2">
                        <img width=250 height=250 src="./public/Achmad_Firdaus_Attalea_Yessa.jpeg" alt="Achmad Firdaus Attalea" class="rounded-circle mb-2">
                        <h3>Achmad Firdaus Attalea Yessa</h3>
                        <p>225150407111086</p>
                    </div>
                    <div class="team-member mx-2 my-2">
                        <img width=250 height=250 src="./public/Dicky_Surya_Darmawan.jpg" alt="Dicky Surya Darmawan" class="rounded-circle mb-2">
                        <h3>Dicky Surya Darmawan</h3>
                        <p>225150407111063</p>
                    </div>
                    <div class="team-member mx-2 my-2">
                        <img width=250 height=250 src="./public/Johanes_Paulus_Bernard_Purek.png" alt="Johanes Paulus Bernard Purek" class="rounded-circle mb-2">
                        <h3>Johanes Paulus Bernard Purek</h3>
                        <p>225150407111090</p>
                    </div>
                    <div class="team-member mx-2 my-2">
                        <img width=250 height=250 src="./public/Muhammad_Choliq_Alraf.jpg" alt="Muhammad Choliq Al-Raffi" class="rounded-circle mb-2">
                        <h3>Muhammad Choliq Al-Raffi</h3>
                        <p>225150407111065</p>
                    </div>
                    <div class="team-member mx-2 my-2">
                        <img width=250 height=250 src="./public/Syafiq.jpg" alt="Muhammad Syafiq Irzaky" class="rounded-circle mb-2">
                        <h3>Muhammad Syafiq Irzaky</h3>
                        <p>225150400111048</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section>
            php include 'router.php'; ?>
        </section> -->

    </main>
    <footer class="bg-primary text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>LOKASI</h3>
                    <p><a href="https://filkom.ub.ac.id" class="text-white">Fakultas Ilmu Komputer</a></p>
                </div>
                <div class="col-md-4">
                    <h3>MEDIA SOSIAL</h3>
                    <p><a href="https://instagram.com" class="text-white">Instagram</a></p>
                </div>
                <div class="col-md-4">
                    <h3>TENTANG KLINIK</h3>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link text-white" href="#about">TENTANG KLINIK</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#check-doctors">DAFTAR DOKTER POLI</a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-white" href="#team">TEAM KAMI</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-primary text-center">
            <p>Powered by Klinik sehat &copy; Universitas Brawijaya 2024</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>