<?php
        $id_petugas     = $_POST['id_petugas'];
        $nama           = $_POST['nama'];
        $jabatan        = $_POST['jabatan'];
        $no_telepon     = $_POST['nomor_telepon'];
        $alamat         = $_POST['alamat'];
        $username       = $_POST['username'];
        $password        = $_POST['password'];

    $query_update = mysqli_query($koneksi,"UPDATE petugas
    SET nama = '$nama', jabatan = '$jabatan', nomor_telepon = $no_telepon, alamat = '$alamat', username = '$username', password = '$password' WHERE id_petugas='$id_petugas' ");

    //$query_update = mysqli_query($koneksi,"UPDATE anggota
    //SET nis ='$nis', nama ='$nama', jk='$jenis_kelamin', tempat_lahir ='$tempat_lahir', tanggal_lahir ='$tanggal_lahir', id_kelas ='$kelas', id_jurusan ='$jurusan', nomor_telepon ='$nomor_telepon', alamat ='$alamat'
    //WHERE id_anggota='$id_anggota'
   // ");
    if ($query_update) {
        ?>
        <script>
            alert('data berhasil di ubah');
            window.location.href='http://localhost/8_mywebsite_12RPL2/admin.php?page=petugas';
        </script>
        <?php
        
    }else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Diupdate !!!!!!!!!
            </div>
        <?php
    }


?>