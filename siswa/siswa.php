<?php
include "koneksi.php";
$slq="select * from tbl_siswa";
$hasil=mysqli_query($koneksi,$slq);
?>
<div class="container my-4">
<h1>Tabel Data siswa</h1>
 <a href="index.php?halaman=tambah_data">
 <input type="button" class="btn btn-primary" value="Tambah" name="" style="margin-bottom:10px ">
</a>
<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
		<br>		
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>no</th>
					<th>nama</th>
					<th>kelas</th>
					<th>nis</th>
                    <th>aksi</th>

				</tr>
			</thead>
			<tbody>
				<?php 
				$batas = 10;
				$halaman = isset($_GET['paging'])?(int)$_GET['paging'] : 11;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				
				$data = mysqli_query($koneksi,"select * from tbl_siswa");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);
 
				$data_siswa = mysqli_query($koneksi,"select * from tbl_siswa limit $halaman_awal, $batas");
				$nomor = $halaman_awal+1;
				while($d = mysqli_fetch_array($data_siswa)){
					?>
					<tr>
						<td><?php echo $nomor++; ?></td>
						<td><?php echo $d['nama']; ?></td>
						<td><?php echo $d['kelas']; ?></td>
                        <td><?php echo $d['nis']; ?></td>
                        <form action="siswa/aksi_siswa.php" method="POST">
                        <td>
                        <a href="index.php?halaman=edit_data&id_siswa=<?php echo $row['id_siswa'] ?>">
                        <input type="button" value="Edit" class="btn btn-warning" name="">
                        </a>
                        <a onclick="return confirm('Kamu Yakin?')" href="siswa/aksi_hapus_siswa.php?id_siswa=<?php echo $row['id_siswa'] ?>">
                        <input type="button" value="Hapus" class="btn btn-danger" name="">
                        </a>
                        </td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
		<nav>
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ echo "href='index.php?halaman=data&paging=".$previous."'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item"><a class="page-link" href="index.php?halaman=data&paging=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='index.php?halaman=data&paging=$next'"; } ?>>Next</a>
				</li>
			</ul>
		</nav>
	</div>
</body>
</html>