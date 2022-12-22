<?php 
    include("koneksi.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM data_pasien WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Tambah</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                              
                                  <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                <input type="text" class="form-control mb-3" name="nama_pasien" placeholder="nama_pasien" value="<?php echo $row['nama_pasien']  ?>">
                                <input type="text" class="form-control mb-3" name="alamat" placeholder="alamat" value="<?php echo $row['alamat']  ?>">
                                <input type="text" class="form-control mb-3" name="sakit" placeholder="sakit" value="<?php echo $row['sakit']  ?>">
                                <input type="text" class="form-control mb-3" name="keterangan" placeholder="keterangan" value="<?php echo $row['keterangan']  ?>">
                                <input type="text" class="form-control mb-3" name="nohp" placeholder="nohp" value="<?php echo $row['nohp']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Simpan">
                    </form>
                    
                </div>
    </body>
</html>