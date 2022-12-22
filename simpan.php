<?php
  $koneksi=mysqli_connect("localhost","root","","rsud");
  $nama_pasien=$_POST['nama_pasien'];
  $alamat=$_POST['alamat'];
  $sakit=$_POST['sakit'];
$keterangan=$_POST['keterangan'];
$nohp=$_POST['nohp'];
$query=mysqli_query($koneksi,"insert into data_pasien (nama_pasien,alamat,sakit,keterangan,nohp) values('$nama_pasien','$alamat','$sakit','$keterangan','$nohp')");
if($query){
    echo"Query OK";
}else{
    echo"Query Tidak Ok";
}
?>