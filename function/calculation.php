<?php
$koneksi = mysqli_connect ("localhost", "root", "", "gizi");

// Mengambil Data Dari Form
$jk = $_POST['jenis_kelamin'];
$umur = $_POST['umur'];
$bulan = $_POST['bulan'];
$tinggi = $_POST['tinggi'];

$module = "laki-laki";
if($jk == 'Laki - Laki'){
    if($bulan < 24){
        $query = mysqli_query($koneksi, "SELECT * FROM bayi_balita_laki_laki WHERE bulan = $bulan");
        $module = "laki_laki";
    }else{
        $query = mysqli_query($koneksi, "SELECT * FROM 2sampai5thn_laki_laki WHERE bulan = $bulan");
        $module = "2sampai5thn_laki_laki";
    }
}else{
    if($bulan < 24){
        $query = mysqli_query($koneksi, "SELECT * FROM bayi_balita_perempuan WHERE bulan = $bulan");
        $module = "perempuan";
    }else{
        $query = mysqli_query($koneksi, "SELECT * FROM 2sampai5thn_perempuan WHERE bulan = $bulan");
        $module = "2sampai5thn_perempuan";
    }
}

$result = mysqli_fetch_assoc($query);

$value = ($tinggi - $result['median']) / ($result['median'] - $result['min1sd']);

if($tinggi > $result['median']){
    $value = ($tinggi - $result['median']) / ($result['plus1sd'] - $result['median']);
}

$status = "Tinggi";

if($value < -3){
    $status = 'Sangat Pendek';
}else if($value < -2){
    $status = 'Pendek';
}else if($value <= 3){
    $status = 'Normal';
}

$url = "http://localhost/goceting/?module=$module&result=$status";

header("location: $url");
exit;
?>