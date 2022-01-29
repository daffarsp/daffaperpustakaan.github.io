<?php
           
        
    if(isset($_GET['hapus'])){
        $id_petugas = $_GET['id'];
        $query_delete = mysqli_query($koneksi,"DELETE FROM petugas WHERE id_petugas = '$id_petugas'");
       if ($query_delete) {
        // header('refresh:1 URL=http://localhost/8_mywebsite_12RPL2/admin.php?page=anggota');
          ?>
                <!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Berhasil Di Hapus
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> -->
                <script>
                alert("Data Berhasil Di Delete");
                window.location.href='http://localhost/8_mywebsite_12RPL2/admin.php?page=petugas';
            </script>
                <?php
       }
       }
?>