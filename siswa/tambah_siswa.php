<div class="container my-4">
 <h1>Tambah siswa</h1>
 <div class="my-4">
  <form action="siswa/aksi_tambah_siswa.php" method="POST">
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text"  class="form-control" name="nama" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Kelas</label>
      <div class="col-sm-10">
        <input type="number" min="1" max="12" class="form-control" name="kelas" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label" >NIS</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="nis" required >
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
        <input type="submit" class="btn btn-success" value="Simpan">
        <a href="index.php?halaman=data">
          <input type="" class="btn btn-primary" value="Kembali">
        </a>  
      </div>
    </div>
  </form>
 </div>
</div>