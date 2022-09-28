<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 style="text-align: center;">Tugas PWL Bootstrap</h1>

        <div class="row" >
            <div class="col-6 col-md-4" style="background : red; text-align: center;" >
                Pemograman
            </div>
            <div class=" col-6 col-md-4" style="background : yellow; text-align: center;">
                Web
            </div>
            <div class="col-6 col-md-4" style="background : green; text-align: center;">
                Lanjut
            </div>
        </div>
        <br></br>
        <table class="table table-bordered">
            <thead>
                <tr style="text-align: center; background: cyan;">
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
                <?php
                    include "Database.php";

                   $tampil = mysqli_query($mysqli, " Select * from data");
                   $name = 1;
                   while($hasil = mysqli_fetch_array($tampil)){ 
                ?>

                <tr>
                    <td><?php echo $hasil['nama']; ?></td>
                    <td><?php echo $hasil['alamat'];?></td>
                    <td><?php echo $hasil['email'];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <br></br>
        
        <div class="row">
            <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                TAMBAH DATA
                </div>
                <div class="card-body">
                <form action="tambah.php" method="POST">
                    
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat"  rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email"  class="form-control">
                    </div>
                    <br>
                    <div class="d-grid gap-2">
                        <button class="btn btn-success" type="submit">Tambah</button>
                    </div>
                    
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>