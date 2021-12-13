<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran

$nama=$_POST["nama"];
$instansi=$_POST["instansi"];
$email=$_POST["email"];
$no_hp=$_POST["no_hp"];


//Query input menginput data kedalam tabel anggota
   $sql="INSERT INTO anggota (nama,instansi,email,no_hp) values
    ('$nama','$instansi','$email','$no_hp')";


//Mengeksekusi/menjalankan query diatas 
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    echo "Berhasil simpan data anggota";
    exit;
  }
else {
    echo "Gagal simpan data anggota";
    exit;
}  

?>