<?php 
    include("koneksi.php");
    $con=conectar();

    $sql="SELECT *  FROM data_pasien";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> RSUD KANJURUHAN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Masukkan Data</h1>
                                <form action="simpan.php" method="POST">

                                  
                                    <input type="text" class="form-control mb-3" name="nama_pasien" placeholder="nama_pasien">
                                    <input type="text" class="form-control mb-3" name="alamat" placeholder="alamat">
                                    <input type="text" class="form-control mb-3" name="sakit" placeholder="sakit">
                                    <input type="text" class="form-control mb-3" name="keterangan" placeholder="keterangan">
                                    <input type="text" class="form-control mb-3" name="nohp" placeholder="nohp">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>nama pasien</th>
                                        <th>alamat</th>
                                        <th>sakit</th>
                                        <th>keterangan</th>
                                        <th>No Hp</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nama_pasien']?></th>
                                                <th><?php  echo $row['alamat']?></th>
                                                <th><?php  echo $row['sakit']?></th> 
                                                <th><?php  echo $row['keterangan']?></th>   
                                                <th><?php  echo $row['nohp']?></th>   
                                                <th><a href="tambah.php?id=<?php echo $row['id'] ?>" class="btn btn-info">edit</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">hapus</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>