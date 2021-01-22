<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "latihan";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
    die("gagal Koneksi" . mysqli::$connect_errno);
}
$data = $mysqli->query("select * from user");
$datas = $data->fetch_array();
echo $datas["nama_user"];
echo "koneksi berhasil";
