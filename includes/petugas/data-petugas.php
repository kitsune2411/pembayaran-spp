<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Petugas</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline">List petugas</h6>
        <a href="?p=tambah_petugas" class="d-inline d-sm-inline btn btn-sm btn-primary shadow-sm float-right"> Tambah Petugas</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Level</th>
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
                        $petugas = $db->allData("petugas");

                        foreach ($petugas as $key => $row) :
                        
                    ?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$row["nama_petugas"]?></td>
                        <td><?=$row["username"]?></td>
                        <td><?=$row["level"]?></td>
                        <td>
                            <a href="?p=edit_petugas&id=<?=$row['id_petugas']?>" class="btn btn-warning">Ubah</a>
                            <a href="?p=delete_petugas&id=<?=$row['id_petugas']?>" onclick="return confirm('Yakin untuk menghapus?')" class="btn btn-danger">Hapus</a> 
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

