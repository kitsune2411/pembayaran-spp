<?php
if (isset($_POST["submit"])) {

        
        $name = htmlspecialchars($_POST["nama"]);
        $komka = htmlspecialchars($_POST["komka"]);
    
        $insert = $db->addKelas($name, $komka);
    
        if ($insert) {
            echo "<script>
            alert('sukses menambahkan kelas');
            window.location.href = '?p=kelas';
        </script>";
        } else {
            echo "<script>
            alert('gagal menambahkan kelas');
        </script>";
        }

    
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800 d-inline">Tambah Kelas</h1>
<a href="?p=kelas" class="d-inline d-sm-inline btn btn-sm btn-light text-primary shadow-sm float-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali ke list kelas</a>
<hr>
<form action="" method="POST">

    <div class="form-group row mb-0">
        <div class="col-sm-6 mb-sm-0">
            <label for="nama">Nama Kelas</label>
        </div>
        <div class="col-sm-6">
            <label for="komka">Kompetensi Keahlian</label>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="text" class="form-control form-control-user"
                id="nama" placeholder="Masukan nama kelas" name="nama" required>
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control form-control-user"
                id="komka" placeholder="Masukan kompetensi keahlian" name="komka" required>
        </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
</form>
</div>