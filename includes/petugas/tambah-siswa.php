<?php
if (isset($_POST["submit"])) {

        
        $nisn = htmlspecialchars($_POST["nisn"]);
        $nis = htmlspecialchars($_POST["nis"]);
        $nama = htmlspecialchars($_POST["nama"]);
        $tlp = htmlspecialchars($_POST["tlp"]);
        $kelas = htmlspecialchars($_POST["kelas"]);
        $spp = htmlspecialchars($_POST["spp"]);
        $alamat = htmlspecialchars($_POST["alamat"]);
    
        $insert = $db->addSiswa($nisn, $nis, $nama, $kelas, $alamat, $tlp, $spp);
    
        if ($insert) {
            echo "<script>
            alert('sukses menambahkan siswa');
            window.location.href = '?p=siswa';
        </script>";
        } else {
            echo "<script>
            alert('gagal menambahkan siswa');
        </script>";
        }

    
}
?>


<!-- Begin Page Content -->
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800 d-inline">Tambah Siswa</h1>
<a href="?p=siswa" class="d-inline d-sm-inline btn btn-sm btn-light text-primary shadow-sm float-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali ke list siswa</a>
<hr>
<form action="" method="POST">

    <div class="form-group row mb-0">
        <div class="col-sm-6 mb-sm-0">
            <label for="nisn">NISN</label>
        </div>
        <div class="col-sm-6">
            <label for="nis">NIS</label>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="number" class="form-control form-control-user"
                id="nisn" placeholder="Masukan nisn" name="nisn" required>
        </div>
        <div class="col-sm-6">
            <input type="number" class="form-control form-control-user"
                id="nis" placeholder="Masukan nis" name="nis" required>
        </div>
    </div>

    <div class="form-group">
      <label for="nama">Nama Siswa</label>
      <input type="text"
        class="form-control" name="nama" id="nama" placeholder="Masukan nama siswa" required>
    </div>
    <div class="form-group">
      <label for="tlp">No telepon</label>
      <input type="number"
        class="form-control" name="tlp" id="tlp" placeholder="Masukan nomor telepon siswa" required>
    </div>

    <div class="form-group row mb-0">
        <div class="col-sm-6 mb-sm-0">
            <label for="kelas">Kelas</label>
        </div>
        <div class="col-sm-6">
            <label for="spp">Tahun</label>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <select name="kelas" id="kelas" class="form-control" required>
                <option value="" selected disabled>Pilih kelas</option>
                <?php 
                $petugas = $db->allData("kelas");

                foreach ($petugas as $key => $row) :  
                
                ?>
                <option value="<?=$row['id_kelas']?>"><?=$row['nama_kelas']?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-sm-6">
            <select name="spp" id="spp" class="form-control" required>
            <option value="" selected disabled>Pilih spp</option>
                <?php 
                $petugas = $db->allData("spp");

                foreach ($petugas as $key => $row) :  
                
                ?>
                <option value="<?=$row['id_spp']?>"><?=$row['tahun']?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>

    

    <div class="form-group">
      <label for="alamat">Alamat</label>
      <textarea class="form-control" name="alamat" id="alamat" rows="5" placeholder="Masukan alamat" required></textarea>
    </div>


    
    <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
</form>
</div>