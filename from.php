<?php

$proses = $_GET['proses'];
$nama_lengkap= $_GET['nama_lengkap'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas_praktikum=$_GET['nilai_tugas_praktikum'];

if (!empty ($proses)) {
    echo 'Proses : ' .$proses;
    echo '<br/>Nama : ' .$nama_lengkap;
    echo '<br/>Mata Kuliah : ' .$mata_kuliah;
    echo '<br/>Nilai UTS : ' .$nilai_uts;
    echo '<br/>Nilai UAS : ' .$nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : ' .$nilai_tugas;
}
?>
