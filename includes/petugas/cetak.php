<?php
$bulan = ['Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', ];

?>


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Laporan</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline">Laporan pembayaran</h6>
        <a href="#" onclick="window.print()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i
                                class="fas fa-print fa-sm text-white-50"></i> Cetak Laporan</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Siswa</th>
                        <?php
                        foreach ($bulan as $key => $b) {
                        ?>
                        <th><?=$b?></th>
                        <?php
                        }

                        ?>
                        
                    </tr>
                </thead>
                <!-- <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot> -->
                <tbody>
                    <?php
                        
                    $siswa = $db->fetchAll("SELECT * FROM siswa LEFT JOIN spp on siswa.id_spp = spp.id_spp LEFT JOIN kelas on siswa.id_kelas = kelas.id_kelas");

                    foreach ($siswa as $key => $row) :
                        
                    ?>
                    <tr>
                        <td><?=$row['nisn']?> - <?=$row['nama_kelas']?> - <?=$row['nama']?></td>

                        <?php
                            $sql = $db->query("SELECT * FROM pembayaran WHERE nisn='{$row['nisn']}'");
                            $data_bayar = $sql->fetch_all();
                            $jml_data_bayar = $sql->num_rows;
                            foreach ($data_bayar as $key => $done) {
                        ?>
                            <td>
                                <span class="text-success"><i class="fas fa-check-circle"></i></span>
                            </td>
                        <?php
                            }

                            if ($jml_data_bayar <= 12) {
                                $kurang_bayar = 12 - $jml_data_bayar;

                                for ($i=1; $i <= $kurang_bayar; $i++) { 
                        ?>
                            <td>
                                <span class="text-danger"><i class="fas fa-times-circle"></i></span>
                            </td>
                        <?php
                                }
                            }
                        ?>

                    </tr>


                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<script>
    // Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
});

</script>