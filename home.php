<?php
session_start();
if (empty($_SESSION['email'])) {
    header("location: login.php?message=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Ngegame - Home</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light sticky-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/game.png" alt="Logo" width="45" class="d-inline-block align-text-middle">
                    N G E G A M E
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#slideshow">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#item">Item</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="pembelian_ml.php" tabindex="-1" aria-disabled="true"><img src="assets/shopping-cart.png" alt="shopping-cart" width="30px"></a>
                        </li>
                        <li class="nav-item ms-3">
                            <a href="logout.php" class="btn btn-danger " tabindex="-1" role="button" aria-disabled="true">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="slideshow" class="bg-light">
            <div id="carouselExampleAutoplaying" class="carousel slide mx-auto mt-3" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/valorant_banner.jpg" class="d-block w-50 mx-auto rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/genshin_banner.jpg" class="d-block w-50 mx-auto rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/ml_banner2.jpg" class="d-block w-50 mx-auto rounded" alt="...">
                    </div>
                </div>
            </div>
        </section>

        <section id="item" style="margin-top: 30px;" class="mx-auto w-50">
            <img src="assets/lighting.png" alt="lighting" style="width: 35px;"> <span style="font-family: 'Poppins';" class="fw-bold fs-4">Game Tersedia!</span>
            <div class="row mt-3">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <a href="ml.php" class="text-decoration-none text-dark">
                        <div class="card">
                            <div class="card-body">
                                <img src="assets/ml_logo.png" alt="Logo ML" style="width: 200px;">
                                <p class="text-center fw-bold" style="font-family: 'Montserrat';">Mobile Legends</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="gi.php" class="text-decoration-none text-dark">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="assets/gi_logo.png" alt="Logo ML" style="width: 181px;" class="mx-auto">
                                <p class="fw-bold" style="font-family: 'Montserrat';">Genshin Impact</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="valo.php" class="text-decoration-none text-dark">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="assets/valorant_logo.png" alt="Logo ML" style="width: 106px;" class="mx-auto">
                                <p class="fw-bold mt-2" style="font-family: 'Montserrat';">Valorant</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section id="about" style="margin-top: 30px;" class="text-dark bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-4 p-4">
                        <center>
                            <img src="assets/game.png" width="200px" alt="" class="mb-3">
                            <h1>N G E G A M E</h1>
                        </center>
                    </div>
                    <div class="col-4 p-4">
                        <p class="mt-5" style="font-family: 'Poppins';">Top Up Game <br>Termurah, Ternyaman, dan Tercepat <br><br><span class="fw-bold">Metode Pembayaran</span></p>
                        <img src="assets/spay_logo.png" width="70px" class="my-2 mx-2">
                        <img src="assets/dana_logo.png" width="90px" class="my-2 mx-2">
                        <br>
                        <img src="assets/gopay_logo.png" width="90px" class="my-2 mx-2">
                        <img src="assets/ovo_logo.png" width="70px" class="my-2 mx-2">
                    </div>
                    <div class="col-4 p-4">
                        <p style="font-family: 'Poppins'; margin-top: 43px;">Contact</p>
                        <a href="https://www.instagram.com/haikal_mumtaz23/" target="_blank" class="mx-1"><img src="assets/instagram.png" width="30px"></a>
                        <a href="https://github.com/haikalmumtaz233" target="_blank" class="mx-1"><img src="assets/github.png" width="30px"></a>
                        <a href="https://www.linkedin.com/in/haikal-mumtaz-9274041b5/" target="_blank" class="mx-1"><img src="assets/linkedin.png" width="30px"></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="text-center p-3" style="font-family: 'Poppins'; opacity: 0.5;">&#169; 2023 NGEGAME - Haikal Mumtaz. <br>All Rights Reseverd.</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>