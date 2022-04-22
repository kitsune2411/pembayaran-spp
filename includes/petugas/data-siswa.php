<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline">List Siswa</h6>
        <a href="?p=tambah_siswa" class="d-inline d-sm-inline btn btn-sm btn-primary shadow-sm float-right"> Tambah siswa</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NISN</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Kompetensi Keahlian</th>
                        <th>Alamat</th>
                        <th>No telp</th>
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
                        $siswa = $db->getAllDataSiswa();

                        foreach ($siswa as $key => $row) :
                        
                    ?>
                    <tr>
                        <td><?=$row["nisn"]?></td>
                        <td><?=$row["nis"]?></td>
                        <td><?=$row["nama"]?></td>
                        <td><?=$row["nama_kelas"]?></td>
                        <td><?=$row["kompetensi_keahlian"]?></td>
                        <td><?=$row["alamat"]?></td>
                        <td><?=$row["no_telp"]?></td>
                        <td>
                            <a href="?p=edit_siswa&id=<?=$row['nisn']?>" class="btn btn-warning">Ubah</a>
                            <a href="?p=delete_siswa&id=<?=$row['nisn']?>" onclick="return confirm('Yakin untuk menghapus?')" class="btn btn-danger">Hapus</a> 
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

