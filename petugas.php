<center><h1>Input Data Petugas</h1></center>
<?php
if (isset($_POST['save'])) {


    $nama =$_POST['nama'];
    $jabatan=$_POST['jabatan'];
    $nomor_telepon=$_POST['nomor_telepon'];
    $alamat=$_POST['alamat'];

    $query_insert = mysqli_query($koneksi,"INSERT INTO petugas VALUES('','$nama','$jabatan','$nomor_telepon','$alamat')");

    if ($query_insert) {
        header('refresh:1 URL:http://localhost/08_PASGANJIL_12RPL2_DAFFARAMDHANSP/petugas.php');
        ?>
        <?php
    }
}
    if (isset($_GET['hapus'])) {
        $id =$_GET['id'];
        $query_delete = mysqli_query($koneksi,"DELETE FROM petugas WHERE id_petugas='$id'");

        if ($query_delete) {
        header('refresh:1 URL:http://localhost/08_PASGANJIL_12RPL2_DAFFARAMDHANSP/petugas.php');
        ?>
        <?php
        }
        }
?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  TAMBAH
</button>
<br>
<br>
<table class=" table table-striped ">
<tr>
<th>NO</th>
<th>NAMA</th>
<th>JABATAN</th>
<th>NOMOR TELEPON</th>
<th>ALAMAT</th>
<th>ACTION</th>
</tr>
<?php
$no=1;
$query = mysqli_query($koneksi,"SELECT * FROM petugas");
foreach ($query as $row) {
    # code...

?>
<tr>
<td><?php echo $no?></td>
<td><?php echo $row ['nama']?></td>
<td><?php echo $row ['jabatan']?></td>
<td><?php echo $row ['nomor_telepon']?></td>
<td><?php echo $row ['alamat']?></td>
<td>

<a href="?page=petugas&hapus&id=<?php echo $row['id_petugas']?>">
<button name="hapus" id="hapus" class="btn btn-danger" >HAPUS</button>
</a>

</td>

</tr>
<?php
$no++;
}
?>
</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
  <div class="mb-3">
    <label class="form-label">NAMA</label>
    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Anda" required >
  </div>
  <div class="mb-3">
    <label class="form-label">JABATAN</label>
    <input type="text" class="form-control" name="jabatan" placeholder="Masukan Nama Jabatan" >
  </div>
  <div class="mb-3">
    <label  class="form-label">NOMOR TELEPON</label>
    <input type="text" class="form-control" name="nomor_telepon" placeholder="Masukan Nama Nomor Telepon" required>
  </div>
  <div class="mb-3">
    <label  class="form-label">ALAMAT</label>
    <input type="text" class="form-control" name="alamat" placeholder="Masukan Nama Alamat" >
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"  id="save" name="save" class="btn btn-primary">Save</button>
      </div>
      </div>
    </div>
    </form>
  </div>
</div>
<br>
<br>