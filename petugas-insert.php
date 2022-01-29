<?php

if (isset($_POST['save'])) {
     $nama           = $_POST['nama'];
     $jabatan        = $_POST['jabatan'];
     $no_telepon     = $_POST['nomor_telepon'];
     $alamat         = $_POST['alamat'];
     $username       = $_POST['username'];
     $password        = $_POST['password'];

     ////////////////////////////////

     $options = [
         'cost' => 12,
     ];
     $password_encrypt = password_hash($password, PASSWORD_BCRYPT ,$options);

    $query_insert = mysqli_query($koneksi,"INSERT INTO petugas VALUES('','$nama','$jabatan','$no_telepon','$alamat','$username','$password_encrypt')");



    if($query_insert)
    {
        ?>
            <script>
                alert("Data Berhasil Di tambah");
                window.location.href='http://localhost/8_mywebsite_12RPL2/admin.php?page=petugas';
            </script>
        <?php
       //header('refresh:3 URL=http://localhost/8_mywebsite_12RPL2/admin.php?page=anggota');
     }
    else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Disimpan !!!!!!!!!
            </div>
        <?php
    }
}

?>