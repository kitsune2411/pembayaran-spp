<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data SPP</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline">List SPP</h6>
        <a href="?p=tambah_spp" class="d-inline d-sm-inline btn btn-sm btn-primary shadow-sm float-right"> Tambah SPP</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Tahun</th>
                        <th>Nominal</th>
                        <th>Aksi</th>
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
                        $petugas = $db->allData("spp");

                        foreach ($petugas as $key => $row) :
                        
                    ?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$row["tahun"]?></td>
                        <td>Rp. <?=number_format($row["nominal"])?></td>
                        <td>
                            <a href="?p=edit_spp&id=<?=$row['id_spp']?>" class="btn btn-warning">Ubah</a>
                            <a href="?p=delete_spp&id=<?=$row['id_spp']?>" onclick="return confirm('Yakin untuk menghapus?')" class="btn btn-danger">Hapus</a> 
                        </td>
                    </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

