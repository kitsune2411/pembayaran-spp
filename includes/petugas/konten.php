<?php
if (empty($_GET["p"])) {
    include "dashboard.php";
}

if (isset($_GET["p"])) {
    if ($_GET["p"] == "dashboard") {
        include "dashboard.php";
    } elseif ($_GET["p"] == "logout") {
        $db->do_logout();
        echo "<script>
        window.location.href='../../index.php';
    </script>";
    } elseif($_GET["p"] == "petugas") {
        include "data-petugas.php";
    } elseif($_GET["p"] == "siswa") {
        include "data-siswa.php";
    } elseif($_GET["p"] == "kelas") {
        include "data-kelas.php";
    } elseif($_GET["p"] == "spp") {
        include "data-spp.php";
    } elseif($_GET["p"] == "tambah_petugas") {
        include "tambah-petugas.php";
    } elseif($_GET["p"] == "tambah_siswa") {
        include "tambah-siswa.php";
    } elseif($_GET["p"] == "tambah_kelas") {
        include "tambah-kelas.php";
    } elseif($_GET["p"] == "tambah_spp") {
        include "tambah-spp.php";
    } elseif($_GET["p"] == "delete_petugas") {
        $id = $_GET['id'];
        $del = $db->delPetugas($id);
        if ($del) {
            echo "<script>
            alert('sukses menghapus petugas');
            window.location.href = '?p=petugas';
        </script>";
        } else {
            echo "<script>
            alert('gagal menghapus petugas');
            window.location.href = '?p=petugas';
        </script>";
        }
    } elseif($_GET["p"] == "delete_siswa") {
        $id = $_GET['id'];
        $del = $db->delsiswa($id);
        if ($del) {
            echo "<script>
            alert('sukses menghapus siswa');
            window.location.href = '?p=siswa';
        </script>";
        } else {
            echo "<script>
            alert('gagal menghapus siswa');
            window.location.href = '?p=siswa';
        </script>";
        }
    } elseif($_GET["p"] == "delete_kelas") {
        $id = $_GET['id'];
        $del = $db->delkelas($id);
        if ($del) {
            echo "<script>
            alert('sukses menghapus kelas');
            window.location.href = '?p=kelas';
        </script>";
        } else {
            echo "<script>
            alert('gagal menghapus kelas');
            window.location.href = '?p=kelas';
        </script>";
        }
    } elseif($_GET["p"] == "delete_spp") {
        $id = $_GET['id'];
        $del = $db->delSPP($id);
        if ($del) {
            echo "<script>
            alert('sukses menghapus spp');
            window.location.href = '?p=spp';
        </script>";
        } else {
            echo "<script>
            alert('gagal menghapus spp');
            window.location.href = '?p=spp';
        </script>";
        }
    } elseif($_GET["p"] == "edit_petugas") {
        include "edit-petugas.php";
    } elseif($_GET["p"] == "edit_siswa") {
        include "edit-siswa.php";
    } elseif($_GET["p"] == "edit_kelas") {
        include "edit-kelas.php";
    } elseif($_GET["p"] == "edit_spp") {
        include "edit-spp.php";
    } else if($_GET["p"] == "bayar") {
        include "bayar.php";
    } else if($_GET["p"] == "cetak") {
        include "cetak.php";
    } else if($_GET["p"] == "history") {
        include "history.php";
    }
}



?>
