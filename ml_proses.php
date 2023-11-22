<?php
include 'connect.php';
include 'caesar_proses.php';

$id = $_POST['id'];
$ss = $_POST['ss'];
$nominal = $_POST['nominal'];
$metode = $_POST['metode'];
$no_metode = $_POST['no_metode'];

$enkripsi1_id = caesar_proses($id, 13);
$enkripsi1_no = caesar_proses($no_metode, 13);
$cipher = "AES-256-CBC";
$key = 13;
$option = 0;
$iv = str_repeat("0", openssl_cipher_iv_length($cipher));

$key2 = 'akusukakripto';

$superEnkripsi_id = openssl_encrypt($enkripsi1_id, $cipher, $key, $option, $iv);
$superEnkripsi_no = openssl_encrypt($enkripsi1_no, $cipher, $key, $option, $iv);
$enkripsi_ss = openssl_encrypt($ss, $cipher, $key2, $option, $iv);

$sql = "INSERT INTO pembelian_ml (id_diamond, id_metode, game_id, no_wallet, ss_id) VALUES ('$nominal','$metode','$superEnkripsi_id','$superEnkripsi_no','$enkripsi_ss')";
$query = mysqli_query($connect, $sql);

if ($query)
    header("location: home.php");
else
    echo ("Gagal Input Data");
