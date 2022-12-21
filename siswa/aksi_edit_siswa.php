<?php
$id_siswa=$_POST['id_siswa'];
$nama =$_POST['nama'];
$kelas =$_POST['kelas'];
$nis =$_POST['nis'];
include "../koneksi.php";
$sql="update tbl_siswa set nama = '$nama',
 kelas='$kelas',
 nis='$nis' where id_siswa='$id_siswa'";
$hasil=mysqli_query($koneksi,$sql);
//echo "$sql";
if ($hasil) {
 header("location:../index.php?halaman=data&pesan=edit_sukses");
}else
{
 header("location:../index.php?halaman=data&pesan=edit_gagal");
}
?>