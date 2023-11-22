<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngegame - Top Up Genshin Impact</title>
    <link rel="stylesheet" href="src/gi.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="mx-auto">
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
                            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Item</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </header>

    <main>
        <div id="home" class="container">
            <img id="background" src="assets/genshin_banner2.jpeg" alt="background">
            <div class="home-content">
                <br>
                <img src="assets/gi_logo2.png" alt="" width="120px" class="rounded-circle"> <span class="text-white fw-bold fs-2 border-bottom border-danger" style="font-family: 'Inter'; letter-spacing: 2px;">Top Up Genshin Impact</span>
            </div>
            <div id="home-form" class="row justify-content-center mt-3">
                <div class="col-3">
                    <div class="card text-white" style="background-color: rgba(0, 0, 0, 0.5);">
                        <div class="card-header" style="font-family: 'Poppins';">
                            Voucher Game Lain
                        </div>
                        <div class="card-body d-flex justify-content-evenly">
                            <div style="max-width: 100px;">
                                <a href="ml.php"><img src="assets/ml_logo2.png" class="img-fluid rounded" alt="Mobile Legends Logo"></a>
                            </div>
                            <div style="max-width: 100px;">
                                <a href="valo.php"><img src="assets/valorant_logo.png" class="img-fluid rounded" alt="Valorant Logo"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card text-white" style="background-color: rgba(0, 0, 0, 0.5);">
                        <div class="card-body">
                            <form action="gi_proses.php" method="POST">
                                <div class="mb-3">
                                    <label for="id" class="form-label" style="font-family: 'Montserrat'; font-size: 18px;">1. Masukkan Game ID Genshin Anda</label>
                                    <input type="text" class="form-control bg-dark text-white mb-2" placeholder="Silahkan Masukkan ID Anda" id="id" name="id" required>
                                    <input class="form-control bg-dark text-white" type="file" id="formFile" name="ss" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nominal" class="form-label" style="font-family: 'Montserrat'; font-size: 18px;">2. Pilih Jumlah Crystal Yang Ingin Anda Beli</label>
                                    <label for="nominal" class="form-label" style="color: grey;">Pilih berapa banyak yang ingin anda beli</label>
                                    <select class="form-select bg-dark text-white" aria-label="Default select example" id="nominal" name="nominal">
                                        <option selected>Pilih Crystal</option>
                                        <?php
                                        include 'connect.php';
                                        $sql = "SELECT * FROM genshin";
                                        $query = mysqli_query($connect, $sql);
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <option value="<?= $data['id_crystal'] ?>"><?= $data['jumlah'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="metode" class="form-label d-block" style="font-family: 'Montserrat'; font-size: 18px;">3. Pilih Metode Pembayaran</label>
                                    <label for="metode" class="form-label" style="color: grey;">Silahkan pilih metode</label>
                                    <select class="form-select bg-dark text-white" aria-label="Default select example" id="metode" name="metode">
                                        <option selected>Pilih Metode</option>
                                        <?php
                                        include 'connect.php';
                                        $sql = "SELECT * FROM wallet";
                                        $query = mysqli_query($connect, $sql);
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <option value="<?= $data['id_wallet'] ?>"><?= $data['nama'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <input type="text" class="form-control bg-dark text-white mt-3" placeholder="Masukkan Nomer" id="metode" name="no_metode" required>
                                </div>
                                <button type="submit" class="btn container-fluid btn-danger rounded" style="font-family: 'Poppins';">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div hidden></div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>