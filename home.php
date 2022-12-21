<?php
include "koneksi.php";
$slq="select count(`id_siswa`) as total from tbl_siswa ";
$hasil=mysqli_query($koneksi,$slq);
$data=mysqli_fetch_array($hasil);
?>
<div class="container my-4">
    <div class="jumbotron">
      <h1 class="">Selamat Datang Di Sistem Pendukung Keputusan</h1>
      <h1 class="">Siswa Berprestasi</h1> 
      <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <h4 class="font-weight-normal mb-3">Total Siswa <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><?php echo $data['total']; ?> siswa</h2>
                    
                  </div>
                </div>
              </div>
    </div>
</div>