<?php
if (isset($_POST["submit"])) {

    $username = htmlspecialchars($_POST["username"]);
    $name = htmlspecialchars($_POST["nama"]);
    $level = htmlspecialchars($_POST["level"]);
    $id = $_GET['id'];

    if (!empty($_POST["password"])) {
        
        if ($_POST["password"] == $_POST["RepeatPassword"]) {
            
            $password = md5($_POST["password"]);
        
            $edit = $db->editPetugas($username, $password, $name, $level, $id);
        
            if ($edit) {
                echo "<script>
                alert('sukses mengubah petugas');
                window.location.href = '?p=petugas';
            </script>";
            } else {
                echo "<script>
                alert('gagal mengubah petugas');
            </script>";
            }
    
        } else {
            echo "<script>
                alert('password tidak sama');
            </script>";
        }

    } else {
        $password = '';
        $edit = $db->editPetugas($username, $password, $name, $level, $id);
        
            if ($edit) {
                echo "<script>
                alert('sukses mengubah petugas');
                window.location.href = '?p=petugas';
            </script>";
            } else {
                echo "<script>
                alert('gagal mengubah petugas');
            </script>";
            }
    }

}

?>


<!-- Begin Page Content -->
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800 d-inline">Ubah Petugas</h1>
<a href="?p=petugas" class="d-inline d-sm-inline btn btn-sm btn-light text-primary shadow-sm float-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali ke list petugas</a>
<hr>
<form action="" method="POST">
    <?php 
    $id = $_GET['id'];
    $data = $db->getDataPetugas($id);

    foreach ($data as $key => $r) :

    ?>

    <div class="form-group">
      <label for="nama">Nama Petugas</label>
      <input type="text"
        class="form-control" name="nama" id="nama" placeholder="Masukan nama petugas" value="<?=$r['nama_petugas']?>" required>
    </div>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text"
        class="form-control" name="username" id="username" placeholder="Masukan username" value="<?=$r['username']?>" required>
    </div>
    <div class="form-group">
      <label for="level">Level</label>
      <select class="form-control" name="level" id="level" required>
        <option value="" selected disabled>Pilih level</option>
        <option value="admin">Admin</option>
        <option value="petugas">Petugas</option>
      </select>
    </div>
    <div class="form-group row mb-0">
        <div class="col-sm-6 mb-sm-0">
            <label for="password">Password</label>
        </div>
        <div class="col-sm-6">
            <label for="RepeatPassword">Confirm Password</label>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="password" class="form-control form-control-user"
                id="password" placeholder="Password" name="password" >
            <small>kosongkan jika tidak ingin merubah</small>
        </div>
        <div class="col-sm-6">
            <input type="password" class="form-control form-control-user"
                id="RepeatPassword" placeholder="Repeat Password" name="RepeatPassword" >
        </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
    <?php endforeach ?>
</form>
</div>