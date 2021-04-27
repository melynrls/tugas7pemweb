<?php
include 'konek.php';
// menyimpan data kedalam variabel
$nama				=$_POST['nama'];
$jkel				=$_POST['jkel'];
$email				=$_POST['email'];
$alamat				=$_POST['alamat'];
$kota				=$_POST['kota'];
$pesan				=$_POST['pesan'];
// query SQL untuk insert data
$query="INSERT INTO kontak SET nama='$nama',jkel='$jkel',email='$email',alamat='$alamat',kota='$kota',pesan='$pesan'";
mysqli_query($konek,$query);
//mengalihkan halaman ke index.php
header("location:index.php");
?>