

<?php
include '../koneksi/koneksi.php';
$kdgr = @$_GET['kdgr'];
mysqli_query($connect,"delete from setup_kelas where id_kelas = '$kdgr'") or die(mysqli_error());
?>
 <script type="text/javascript">
        alert(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=guru&action=kelas";       
 </script>