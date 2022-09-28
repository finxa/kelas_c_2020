<?php
    include "Database.php";

        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];

        $insert = "insert into data (nama, alamat, email) values ('$nama','$alamat','$email')";

        if($mysqli->query($insert)) {

            header("location:5520120065_NishaSriMulyani.php");
        
        } else {
        
            echo "Data Gagal Disimpan!";
        
        }
    
 ?>