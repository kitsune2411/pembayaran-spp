<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">History pembayaran</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline">List history pembayaran</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Kompetensi Keahlian</th>
                        <th>No telp</th>
                        <th>Tanggal bayar</th>
                        <th>Bulan dibayar</th>
                        <th>Tahun dibayar</th>
                        <th>Jumlah bayar</th>
                        <th>Petugas</th>
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
                        $no = 1;
                        $data_siswa = $db->fetchAll("SELECT * FROM pembayaran LEFT JOIN siswa on pembayaran.nisn = siswa.nisn LEFT JOIN kelas on siswa.id_kelas = kelas.id_kelas 
                                                        LEFT JOIN petugas on pembayaran.id_petugas = petugas.id_petugas");

                        foreach ($data_siswa as $key => $row) :
                        
                    ?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$row["nis"]?></td>
                        <td><?=$row["nama"]?></td>
                        <td><?=$row["nama_kelas"]?></td>
                        <td><?=$row["kompetensi_keahlian"]?></td>
                        <td><?=$row["no_telp"]?></td>
                        <td><?=$row["tgl_bayar"]?></td>
                        <td><?=$row["bulan_dibayar"]?></td>
                        <td><?=$row["tahun_dibayar"]?></td>
                        <td>Rp. <?=number_format($row["jumlah_bayar"])?></td>
                        <td><?=$row["nama_petugas"]?></td>
                        
                    </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

