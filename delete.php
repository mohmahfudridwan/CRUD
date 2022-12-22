<?php

include("koneksi.php");
$con=conectar();

$id=$_GET['id'];

$query="DELETE FROM data_pasien  WHERE id='$id'";
$query=mysqli_query($con,$query);

    if($query){
        Header("Location: index.php");
    }
?>
