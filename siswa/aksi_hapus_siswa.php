<?php
include "../koneksi.php";
$sql="delete from tbl_siswa where id_siswa='$_GET[id_siswa]'";
mysqli_query($koneksi,$sql);
//echo "$sql";
header("location:../index.php?halaman=data");
?>