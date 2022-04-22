<?php
if (isset($_POST["submit"])) {

        
        $tahun = htmlspecialchars($_POST["tahun"]);
        $nominal = htmlspecialchars($_POST["nominal"]);
    
        $insert = $db->addSPP($tahun, $nominal);
    
        if ($insert) {
            echo "<script>
            alert('sukses menambahkan spp');
            window.location.href = '?p=spp';
        </script>";
        } else {
            echo "<script>
            alert('gagal menambahkan spp');
        </script>";
        }

    
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800 d-inline">Tambah SPP</h1>
<a href="?p=spp" class="d-inline d-sm-inline btn btn-sm btn-light text-primary shadow-sm float-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali ke list spp</a>
<hr>
<form action="" method="POST">

    <div class="form-group row mb-0">
        <div class="col-sm-6 mb-sm-0">
            <label for="tahun">Tahun</label>
        </div>
        <div class="col-sm-6">
            <label for="nominal">Nominal</label>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="number" class="form-control form-control-user"
                id="tahun" placeholder="Masukan tahun" name="tahun" required>
        </div>
        <div class="col-sm-6">
            <input type="number" class="form-control form-control-user"
                id="nominal" placeholder="Masukan nominal" name="nominal" required>
        </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
</form>
</div>