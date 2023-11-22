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
    <link rel="stylesheet" href="src/pembelian_ml.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Ngegame - Pembelian</title>
</head>

<body class="bg-light">
    <div class="container d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card p-5" style="width: 35%; box-shadow: 9px 10px 10px 4px #000;">
            <div class="text-center" id="head-card" style="font-family: 'Poppins', sans-serif;">
                <a href="home.php"><img src="assets/back.png" alt="back"></a>
                <h1>Riwayat Pembelian (ML)</h1>
                <div>
                    <a href="#">ML</a>
                    <a href="pembelian_valo.php">Valorant</a>
                    <a href="pembelian_gi.php">Genshin Impact</a>
                </div>
                <hr>
            </div>
            <?php
            include 'connect.php';
            include 'caesar_proses.php';
            $sql = "SELECT * FROM pembelian_ml pm INNER JOIN mobile_legends ml ON pm.id_diamond = ml.id_diamond INNER JOIN wallet w ON pm.id_metode = w.id_wallet";
            $query = mysqli_query($connect, $sql);

            $cipher = "AES-256-CBC";
            $key = 13;
            $key2 = 'akusukakripto';
            $option = 0;
            $iv = str_repeat("0", openssl_cipher_iv_length($cipher));
            while ($data = mysqli_fetch_array($query)) {
                $id = $data['game_id'];
                $nom = $data['no_wallet'];
                $ss = $data['ss_id'];
                $dekripsi1_id = openssl_decrypt($id, $cipher, $key, $option, $iv);
                $dekripsi1_no = openssl_decrypt($nom, $cipher, $key, $option, $iv);
                $superDekripsi_id = caesar_proses($dekripsi1_id, 26 - 13);
                $superDekripsi_no = caesar_proses($dekripsi1_no, 26 - 13);
                $dekripsi_ss = openssl_decrypt($ss, $cipher, $key2, $option, $iv);
            ?>
                <div class="card w-100 mt-2">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['jumlah'] ?> - Rp. <?= $data['harga'] ?></h5>
                        <p style="opacity: 0.5;">Id Game: <?= $superDekripsi_id ?></p>
                        <p style="opacity: 0.5;">Metode: <?= $data['nama'] ?> (<?= $superDekripsi_no ?>)</p>
                        <a href="assets/<?= $dekripsi_ss ?>">
                            <p>SS Akun</p>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>