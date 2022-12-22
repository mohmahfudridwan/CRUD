<?php

include("koneksi.php");
$con=conectar();

$id=$_POST['id'];
$nama_pasien=$_POST['nama_pasien'];
$alamat=$_POST['alamat'];
$sakit=$_POST['sakit'];
$keterangan=$_POST['keterangan'];
$nohp=$_POST['nohp'];


$sql="UPDATE data_pasien SET nama_pasien='$nama_pasien',alamat='$alamat',sakit='$sakit',keterangan='$keterangan',nohp='$nohp' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>