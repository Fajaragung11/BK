<?php 
include '../koneksi/koneksi.php';
if (@$_POST['edit']) {
    // adat siswa
$id_siswa = @$_POST['id_siswa'];
$nis = mysqli_real_escape_string($_POST['nis']);
$nama_siswa = mysqli_real_escape_string( $_POST['nama_siswa']);
$namap = mysqli_real_escape_string($_POST['namap']);
$kelamin = mysqli_real_escape_string( $_POST['kelamin']);
$tpl = mysqli_real_escape_string($_POST['tpl']);
$tgl = mysqli_real_escape_string($_POST['tgl']);
$agama = mysqli_real_escape_string($_POST['agama']);
$warga = mysqli_real_escape_string($_POST['warga']);
$suku = mysqli_real_escape_string($_POST['suku']);
$t_skl = mysqli_real_escape_string($_POST['t_skl']);
$pindahan = mysqli_real_escape_string($_POST['pindahan']);
$anakke = mysqli_real_escape_string($_POST['anakke']);
$bhs = mysqli_real_escape_string($_POST['bhs']);
$alamat_siswa = mysqli_real_escape_string( $_POST['alamat_siswa']);
$telpon_siswa = mysqli_real_escape_string( $_POST['telpon_siswa']);
$email = mysqli_real_escape_string($_POST['email']);
$username = mysqli_real_escape_string($_POST['username']);
$password = mysqli_real_escape_string($_POST['password']);
$tinggal_siswa = mysqli_real_escape_string( $_POST['tinggal_siswa']);
$jarak = mysqli_real_escape_string($_POST['jarak']);
$berangkat = mysqli_real_escape_string($_POST['berangkat']);
$kendaraan = mysqli_real_escape_string($_POST['kendaraan']);
$kondisilmp = mysqli_real_escape_string($_POST['kondisilmp']);
$kondisirmh = mysqli_real_escape_string($_POST['kondisirmh']);
$ruangtidur = mysqli_real_escape_string($_POST['ruangtidur']);
$lingkungan = mysqli_real_escape_string($_POST['lingkungan']);
//data data_orangtua
$ayah = mysqli_real_escape_string($_POST['ayah']);
$tl = mysqli_real_escape_string($_POST['tl']);
$tgl = mysqli_real_escape_string($_POST['tgl']);
$agama = mysqli_real_escape_string($_POST['agama']);
$pddk_a = mysqli_real_escape_string($_POST['pddk_a']);
$status_keluarga = mysqli_real_escape_string($_POST['status_keluarga']);
$pekerjaan = mysqli_real_escape_string($_POST['pekerjaan']);
$penghasilan_a = mysqli_real_escape_string($_POST['penghasilan_a']);
$alamat_a = mysqli_real_escape_string($_POST['alamat_a']);
$telpon_a = mysqli_real_escape_string($_POST['telpon_a']);
$ibu = mysqli_real_escape_string($_POST['ibu']);
$tl_i = mysqli_real_escape_string($_POST['tl_i']);
$tgl_i = mysqli_real_escape_string($_POST['tgl_i']);
$agma_i = mysqli_real_escape_string($_POST['agma_i']);
$pddk_i = mysqli_real_escape_string($_POST['pddk_i']);
$pekerjaan_i = mysqli_real_escape_string($_POST['pekerjaan_i']);
$penghasilan_i = mysqli_real_escape_string($_POST['penghasilan_i']);
$alamat_i = mysqli_real_escape_string($_POST['alamat_i']);
$telpon_i = mysqli_real_escape_string($_POST['telpon_i']);
// data saudara
$nm = mysqli_real_escape_string($_POST['nm']);
$umur = mysqli_real_escape_string($_POST['umur']);
$jk = mysqli_real_escape_string($_POST['jk']);
$pddk = mysqli_real_escape_string($_POST['pddk']);
$krj = mysqli_real_escape_string($_POST['krj']);
$agm = mysqli_real_escape_string($_POST['agm']);

$nm1 = mysqli_real_escape_string($_POST['nm1']);
$umur1 = mysqli_real_escape_string($_POST['umur1']);
$jk1 = mysqli_real_escape_string($_POST['jk1']);
$pddk1 = mysqli_real_escape_string($_POST['pddk1']);
$krj1 = mysqli_real_escape_string($_POST['krj1']);
$agm1 = mysqli_real_escape_string($_POST['agm1']);

$nm2 = mysqli_real_escape_string($_POST['nm2']);
$umur2 = mysqli_real_escape_string($_POST['umur2']);
$jk2 = mysqli_real_escape_string($_POST['jk2']);
$pddk2 = mysqli_real_escape_string($_POST['pddk2']);
$krj2 = mysqli_real_escape_string($_POST['krj2']);
$agm2 = mysqli_real_escape_string($_POST['agm2']);


 mysql_query(" UPDATE data_siswa SET nis='$nis',
 nama_siswa='$nama_siswa',
 namp='$namap',
 kelamin='$kelamin',
 tpl='$tpl',
 tgl='$tgl',
 agama='$agama',
 warga='$warga',
 suku='$suku',
 t_skl='$t_skl',
 pindahan='$pindahan',
 anakke='$anakke',
 bhs='$bhs',
 alamat_siswa='$alamat_siswa',
 telpon_siswa='$telpon_siswa',
 email='$email',
 username='$username',
 password='$password',
 tinggal_siswa='$tinggal_siswa',
 jarak='$jarak',
 berangkat='$berangkat',
 kendaraan='$kendaraan',
 kondisilmp='$kondisilmp',
 kondisirmh='$kondisirmh',
 ruangtidur='$ruangtidur',
 lingkungan='$lingkungan' WHERE id_siswa='$kdsis' ");
mysql_query("UPDATE data_orangtua SET nis='$nis',
    ayah='$ayah',
    tl='$tl',
    tgl='$tgl',
    agama='$agama',
    pddk_a='$pddk_a',
    status_keluarga='$status_keluarga',
    pekerjaan='$pekerjaan',
    penghasilan_a='$penghasilan_a',
    alamat_a='$alamat_a',
    telpon_a='$telpon_a',
    ibu='$ibu',
    tl_i='$tl_i',
    tgl_i='$tgl_i',
    agma_i='$agma_i',
    pddk_i='$pddk_i',
    pekerjaan_i='$pekerjaan_i',
    penghasilan_i='$penghasilan_i',
    alamat_i='$alamat_i',
    telpon_i='$telpon_i' WHERE id_orangtua='$kdsis' ");

mysql_query(" UPDATE data_saudara SET nm='$nm',
    umur='$umur',
    jk='$jk',
    pddk='$pddk',
    krj='$krj',
    agm='$agm',
    nm1='$nm1',
    umur1='$umur1',
    jk1='$jk1',
    pddk1='$pddk1',
    krj1='$krj1',
    agm1='$agm1',
    nm2='$nm2',
    umur2='$umur2',
    jk2='$jk2',
    pddk2='$pddk2',
    krj2='$krj2',
    agm2='$agm2' WHERE id_saudara = '$kdsis'");
?>
<script>
alert(" Sukses ! Data berhasil Di Ubah!")
window.location.href="?page=admin&action=data_siswa";     
</script>
<?php 


}

 ?>