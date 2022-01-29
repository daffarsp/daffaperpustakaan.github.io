<?php
        $id_anggota =$_GET['id'];
        $query = mysqli_query($koneksi,"SELECT * FROM anggota WHERE id_anggota ='$id_anggota'");
        foreach ($query as $row){
    ?>
    <script>
        $(document).ready(function(){
            $("#edit-modal").modal('show');
        });
    </script>
<div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form edit Data Anggota</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form  action="?page=anggota-edit-proses" method="post"> 
        <input type="hidden" name="id_anggota" value="<?php echo $row['id_anggota']; ?>">
        <div class="formm-group mb-2">
            <input value="<?php echo $row['nis']; ?>" class="form-control" type="text" name="nis" placeholder="NIS" required>
        </div>
        <div class="form-group mb-2">
            <input value="<?php echo $row['nama']; ?>" class="form-control" type="text" name="nama" placeholder="NAMA" required>
        </div>

        <div class="from-group ">
            <select value="<?php echo $row['jk']; ?>" class="form-control" name="jk" required >
            <option vvalue="<?php echo $row['jk']; ?>">
                <?php
                        if ($row['jk']=='l') {
                            echo "Laki-Laki";
                        }else  {
                            echo "Perempuan";
                        }
                ?>
            </option>
                <option value="l">Laki - Laki</option>
                <option value="p">Perempuan</option>
            </select>
        </div>

        <div class="from-group mb-2">
            <input value="<?php echo $row['tempat_lahir']; ?>" class="form-control" type="text" name="tempat_lahir" placeholder="TEMPAT LAHIR" required>
        </div>

        <div class="input-group mb-2">
        <span class="input-group-text">Tanggal Lahir</span>
            <input value="<?php echo $row['tanggal_lahir']; ?>" class="form-control" type="date" name="tanggal_lahir" placeholder="TANGGAL LAHIR" required>
        </div>

        <div class="form-group mb-2">
           <select value="<?php echo $row['id_kelas']; ?>" class="form-control" name="id_kelas" placeholder="KELAS" required>
           <option value="<?php echo $row['id_kelas']; ?>">
           <?php
           if ($row['id_kelas']=='x') {
               echo "X";
           }elseif ($row['id_kelas']=='xi') {
               echo "XI";
           }else{
               echo "XII";
           }
      ?>
      </option>
       <option value="X">X</option>
       <option value="XI">XI</option>
       <option value="XII">XII</option>
            </select>
        </div>
        <div class="form-group mb-2">
           <select  class="form-control" name="id_jurusan" placeholder="JURUSAN" required >
           <option value="<?php echo $row['id_jurusan']; ?>">
           <?php
                    if ($row['id_jurusan']=='RPL') {
                        echo "Rekayasa Perangkat Lunak";
                    }elseif ($row['id_jurusan']=='TKR') {
                        echo "Teknik Kendaraan Ringan";
                    }elseif ($row['id_jurusan']=='TITL') {
                        echo "Teknik Instalasi Tenaga Listrik";
                    }else {
                        echo "Teknik Audio Video";
                    }
            ?>
            </select>
        </div>
        
        <div class="from-group mb-2">
            <input value="<?php echo $row['nomor_telepon']; ?>" class="form-control" type="text" name="nomor_telepon" placeholder="NO TELEPON" required>
        </div>
        <div class="form-floating">
            <textarea  class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="alamat" required><?php echo $row['alamat']; ?></textarea>
            <label for="floatingTextarea2">Alamat</label>
        </div>
       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php
}

?>