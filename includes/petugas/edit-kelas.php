<?php
if (isset($_POST["submit"])) {

        $id = $_GET['id'];
        $name = htmlspecialchars($_POST["nama"]);
        $komka = htmlspecialchars($_POST["komka"]);
    
        $insert = $db->editKelas($name, $komka, $id);
    
        if ($insert) {
            echo "<script>
            alert('sukses mengubah kelas');
            window.location.href = '?p=kelas';
        </script>";
        } else {
            echo "<script>
            alert('gagal mengubah kelas');
        </script>";
        }

    
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800 d-inline">Ubah Kelas</h1>
<a href="?p=kelas" class="d-inline d-sm-inline btn btn-sm btn-light text-primary shadow-sm float-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali ke list kelas</a>
<hr>
<form action="" method="POST">
<?php 
    $id = $_GET['id'];
    $data = $db->getKelas($id);

    foreach ($data as $key => $r) :

    ?>
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
                id="nama" placeholder="Masukan nama kelas" name="nama" value="<?=$r['nama_kelas']?>" required>
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control form-control-user"
                id="komka" placeholder="Masukan kompetensi keahlian" name="komka" value="<?=$r['kompetensi_keahlian']?>" required>
        </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
    <?php endforeach ?>
</form>
</div>