<div class="row">
<!--  page header -->
<div class="col-lg-12">
<h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Detail Data Guru</font></h1>
</div>
<!-- end  page header -->


<?php
if (@$_SESSION['guru']) {
$sesi = @$_SESSION['guru'];
}

$sql_formulir = mysqli_query($connect,"select * from data_guru where id_guru = '$sesi'") or die(mysqli_error());
$data = mysqli_fetch_array($sql_formulir);
?>
<div class="row">
<div class="col-md-10">
<!--   Kitchen Sink -->
<div class="panel panel-default">
    <div class="panel-heading" style="background-color:#f50057; color: white;">
        BERIKUT DETAIL DATA  >> <b><?php echo $data['nip']; ?> || <?php echo $data['nama_guru']; ?></b>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped">
            	   <tr>
                        <th><b style="color: red;"> DATA PRIBADI</b></th>
                        <th></th>
                        <th><img src="../photo_guru/<?php echo $data ['photo'];?>" height="80" width="80" align="middle" style="border-radius: 100%;"></th>
                        <th></th>
                        <th></th>
                        <th> <a href="../Laporan/detail_guru.php?kdsis=<?php echo $data['id_guru']; ?> "><button type="" class="btn btn-info"><i class="fa fa-print"></i> Print</button></a></th>
                    </tr>
                    <tr>
                        <th>Nip</th>
                        <th>:</th>
                        <th><?php echo $data['nip']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Nama Legkap</th>
                        <th>:</th>
                        <th><?php echo $data['nama_guru']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th>Gelar</th>
                        <th>:</th>
                        <th><?php echo $data['gelar']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> 
                        <tr>
                        <th>Jenis Kelamin</th>
                        <th>:</th>
                        <th><?php echo $data['kelamin']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th>Tempat Tanggal Lahir</th>
                        <th>:</th>
                        <th><?php echo $data['tempat_lahir']; ?>, <?php echo $data['tanggal_lahir']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th>Agama</th>
                        <th>:</th>
                        <th><?php echo $data['agama']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>  
                     <tr>
                        <th>E-mail</th>
                        <th>:</th>
                        <th><?php echo $data['email']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th>Telpon Guru</th>
                        <th>:</th>
                        <th><?php echo $data['telpon_guru']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                      <tr>
                        <th>Username</th>
                        <th>:</th>
                        <th><?php echo $data['username']; ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>  
                      <tr>
                        <th>Password</th>
                        <th>:</th>
                        <th><?php echo $data['password']; ?></th>
                        <th></th>
                        <th></th>
                        <th> </th>
                    </tr>
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
