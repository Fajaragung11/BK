

<?php
include '../koneksi/koneksi.php';
$kdgr = @$_GET['kdgr'];
mysqli_query($connect,"delete from tbl_siswa_pelanggaran where id_pelanggaran = '$kdgr'") or die(mysqli_error());
?>
 <script type="text/javascript">
        alert(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=guru&action=viewpel";       
 </script>