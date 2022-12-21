<?php
include "koneksi.php";
$sql="select * from tbl_siswa where id_siswa='$_GET[id_siswa]'";
$hasil=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_array($hasil);
?>
<div class="col-10">
 <h3>Edit siswa</h3>
 <form action="siswa/aksi_edit_siswa.php" method="POST">
   <div class="form-group row">
     <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
     <div class="col-sm-10">
     <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ?>">
       <input type="text"  class="form-control" name="nama" value="<?php echo $row['nama'] ?>">
     </div>
   </div>
   <div class="form-group row">
     <label for="inputPassword" class="col-sm-2 col-form-label">Kelas</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" name="kelas" value="<?php echo $row['kelas'] ?>">
     </div>
   </div>
   <div class="form-group row">
     <label for="inputPassword" class="col-sm-2 col-form-label">NIS</label>
     <div class="col-sm-10">
       <input type="number" class="form-control" name="nis" value="<?php echo $row['nis'] ?>">
     </div>
   </div>
   <div class="form-group row">
     <label for="inputPassword" class="col-sm-2 col-form-label"></label>
     <div class="col-sm-10">
       <input type="submit" class="btn btn-success" value="Simpan">
     </div>
   </div>
 </form>
</div>