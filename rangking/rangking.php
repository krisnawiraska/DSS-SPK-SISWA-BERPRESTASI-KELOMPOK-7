<div class="container my-4">
<h1>Ranking Dari Tiap siswa</h1>
<?php
include "koneksi.php";
$sql="select * from tbl_nilai where skor IS NULL";
$hasil=mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
if (!$hasil || mysqli_num_rows($hasil)>0) {
?>
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Pesan : </strong> Rangking Perlu diperbarui.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>
 <a href="rangking/aksi_rangking.php"><input style="margin-bottom:5px " class="btn btn-primary" type="button" name="" value="Mulai"></a>
<?php
}else{
 ?>
 <a href="rangking/aksi_rangking.php"><input style="margin-bottom:5px " class="btn btn-primary" type="button" name="" value="Perbarui"></a>
<?php
}

$batas = 10;
$halaman = isset($_GET['paging'])?(int)$_GET['paging'] : 11;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi,"select `db_spk`.`tbl_siswa`.`id_siswa` AS `id_siswa`,`db_spk`.`tbl_siswa`.`nama` AS `nama`,`db_spk`.`tbl_nilai`.`id_nilai` AS `id_nilai`,`db_spk`.`tbl_nilai`.`skor` AS `skor` from (`db_spk`.`tbl_siswa` left join `db_spk`.`tbl_nilai` on((`db_spk`.`tbl_siswa`.`id_siswa` = `db_spk`.`tbl_nilai`.`id_siswa`))) order by skor desc");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$hasil = mysqli_query($koneksi,"select `db_spk`.`tbl_siswa`.`id_siswa` AS `id_siswa`,`db_spk`.`tbl_siswa`.`nama` AS `nama`,`db_spk`.`tbl_nilai`.`id_nilai` AS `id_nilai`,`db_spk`.`tbl_nilai`.`skor` AS `skor` from (`db_spk`.`tbl_siswa` left join `db_spk`.`tbl_nilai` on((`db_spk`.`tbl_siswa`.`id_siswa` = `db_spk`.`tbl_nilai`.`id_siswa`))) order by skor desc limit $halaman_awal, $batas");
$nomor = $halaman_awal+1;
// $sql="select `db_spk`.`tbl_siswa`.`id_siswa` AS `id_siswa`,`db_spk`.`tbl_siswa`.`nama` AS `nama`,`db_spk`.`tbl_nilai`.`id_nilai` AS `id_nilai`,`db_spk`.`tbl_nilai`.`skor` AS `skor` from (`db_spk`.`tbl_siswa` left join `db_spk`.`tbl_nilai` on((`db_spk`.`tbl_siswa`.`id_siswa` = `db_spk`.`tbl_nilai`.`id_siswa`))) order by skor desc";
// $hasil=mysqli_query($koneksi,$sql);
?>
 <table class="table table-bordered">
  <thead>   
   <tr style="font-weight: bold">
    <td width="5%">Ranking</td>
    <td width="45%">Nama</td>
    <td width="50%">Skor</td>
    
   </tr>
  </thead>
  <tbody>
   <?php
   $no=($halaman * $batas) - $batas + 1;

   $i=0;
   while ($row=mysqli_fetch_array($hasil)) { 
   ?>
   <tr>
    <td><?php echo $no++?></td>
    <td><?php echo $row['nama']?></td>
    <form action="rangking/aksi_rangking.php" method="POST">
    <td>
     <?php echo $row['skor']?>
    </td>
   </tr>
   <?php
   $i++;
   }
   ?>
   
   </form>
  </tbody>
 </table>
 <nav>
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ echo "href='index.php?halaman=rangking&paging=".$previous."'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item"><a class="page-link" href="index.php?halaman=rangking&paging=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='index.php?halaman=rangking&paging=$next'"; } ?>>Next</a>
				</li>
			</ul>
		</nav>
</div>