<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Core CSS - Include with every page -->
    <link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
      <link href="../assets/css/main-style.css" rel="stylesheet" />

    <link href="../assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
        <!-- CUSTOM STYLES -->
    <link href="../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />

</head>
<body>
    <div class="panel panel-default">
        <div class="panel-heading">
            <center>
            <img src="../assets/img/logoku.png" alt="" width="200" height="488" class="img-responsive" style="border-radius: 7%;"> <br>
            <b>LAPORAN DATA PELANGGARAN SISWA</b> <br>
            <strong>SMAN 1 KAMAL</strong>
            </center>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="dataTables-example">
                    <thead>
                         <tr>
                            <th>No.</th>
                            <th>Nama Siswa</th>
                            <th>Pelanggaran</th>
                            <th>Sanksi</th>
                            <th>Jumlah Point</th>
                            <th>Tanggal Kejadian</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                        include '../koneksi/koneksi.php';
                        $sql = mysqli_query($connect,"select * from tbl_siswa_pelanggaran") or die (mysqli_error());
                        $no=1;
                        while ($data = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nm_siswa']; ?></td>
                            <td><?php echo $data['nm_pelanggaran']; ?></td>
                            <td><?php echo $data['nm_sanksi']; ?></td>
                            <td><?php echo $data['poin']; ?></td>
                            <td><?php echo $data['tgl_kejadian']; ?></td>
                            <td><?php echo $data['ket']; ?></td>
                        </tr>
                        <?php } ?> 
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../assets/plugins/pace/pace.js"></script>
    <script src="../assets/scripts/siminta.js"></script>
        <script src="../assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/plugins/morris/morris.js"></script>
    <script src="../assets/scripts/dashboard-demo.js"></script>

    
</body>
</html>
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>
