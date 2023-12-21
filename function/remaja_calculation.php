<?php
$koneksi = mysqli_connect ("localhost", "root", "", "gizi");

// Mengambil Data Dari Form
$umur = $_POST['umur'];
$umur = explode(',', $umur);
$tahun = $umur[0];
$bulan = $umur[1];

$bb = $_POST['bb'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tinggi = $_POST['tinggi'] * $_POST['tinggi'];

$hasil = $bb / $tinggi;

$module = "laki_remaja";
if($jenis_kelamin == 'Laki - Laki'){
    $query = mysqli_query($koneksi, "SELECT * FROM laki_remaja_2 WHERE tahun = $tahun AND bulan = $bulan");
}else{
    $module = "perempuan_remaja";
    $query = mysqli_query($koneksi, "SELECT * FROM wanita_remaja_2 WHERE tahun = $tahun AND bulan = $bulan");
}

$result = mysqli_fetch_assoc($query);

$value = ($hasil - $result['median']) / ($result['median'] - $result['min1sd']);

if($hasil > $result['median']){
    $value = ($hasil - $result['median']) / ($result['plus1sd'] - $result['median']);
}

$status = "Obesitas";

if($value <= -2){
    $status = 'Kurang';
}else if($value <= 1){
    $status = 'Normal';
}else if($value <= 2){
    $status = 'Lebih';
}

$url = "http://localhost/goceting/?module=$module&result=$status";

header("location: $url");
exit;
?>