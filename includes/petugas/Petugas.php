<?php

include "../../config/koneksi.php";

class Petugas extends DB{

    public function allData($table)
    {
        $data = $this->fetchAll("SELECT * from $table");

        return $data;
    }


    //petugas
    public function getDataPetugas($id)
    {
        $data = $this->fetchAll("SELECT * from petugas WHERE id_petugas='$id'");

        return $data;
    }

    public function addPetugas($username, $password, $name, $level)
    {
        $data = $this->query("INSERT INTO petugas VALUES (NULL, '$username', '$password', '$name', '$level')");

        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function delPetugas($id)
    {
        $data = $this->query("DELETE FROM petugas WHERE id_petugas='$id'");

        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function editPetugas($username, $password, $name, $level, $id)
    {
        if (!empty($password)) {
            $data = $this->query("UPDATE `petugas` SET `username` = '$username', `password` = '$password', `nama_petugas` = '$name', `level` = '$level' WHERE `petugas`.`id_petugas` = '$id'");
        } else {
            $data = $this->query("UPDATE `petugas` SET `username` = '$username', `nama_petugas` = '$name', `level` = '$level' WHERE `petugas`.`id_petugas` = '$id'");
        }

        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    //siswa
    public function getAllDataSiswa()
    {
        $data = $this->fetchAll("CALL getAllDataSiswa"); //stored procedure

        return $data;
    }

    public function getDataSiswa($id)
    {
        $data = $this->fetchAll("SELECT * from siswa WHERE nisn='$id'"); 

        return $data;
    }

    public function addSiswa($nisn, $nis, $nama, $kelas, $alamat, $tlp, $spp)
    {
        $data = $this->query("INSERT INTO siswa VALUES ('$nisn', '$nis', '$nama', '$kelas', '$alamat', '$tlp', '$spp')");

        if ($data) {
            return true;
        } else {
            return false;
        }
    }
    
    public function delSiswa($id)
    {
        $data = $this->query("DELETE FROM siswa WHERE nisn='$id'");

        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function editSiswa($nisn, $nis, $nama, $kelas, $alamat, $tlp, $spp)
    {
       
        $data = $this->query("UPDATE `siswa` SET `nis` = '$nis', `nama` = '$nama', `id_kelas` = '$kelas', `alamat` = '$alamat', `no_telp` = '$tlp', `id_spp` = '$spp' WHERE `siswa`.`nisn` = '$nisn'");

        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    //kelas
    public function getKelas($id)
    {
        $data = $this->fetchAll("SELECT * from kelas WHERE id_kelas='$id'");

        return $data;
    }

    public function addKelas($name, $komka)
    {
        $data = $this->query("INSERT INTO kelas VALUES (NULL, '$name', '$komka')");

        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function delKelas($id)
    {
        $data = $this->query("DELETE FROM kelas WHERE id_kelas='$id'");

        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function editKelas($name, $komka, $id)
    {
        

        $data = $this->query("UPDATE `kelas` SET `nama_kelas` = '$name', `kompetensi_keahlian` = '$komka' WHERE `kelas`.`id_kelas` = $id");

        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    //spp
    public function getDataSPP($id)
    {
        $data = $this->fetchAll("SELECT * from spp WHERE id_spp='$id'");

        return $data;
    }

    public function addSPP($tahun, $nominal)
    {
        $data = $this->query("INSERT INTO spp VALUES (NULL, '$tahun', '$nominal')");

        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function delSPP($id)
    {
        $data = $this->query("DELETE FROM spp WHERE id_spp='$id'");

        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function editSPP($tahun, $nominal, $id)
    {
        $data = $this->query("UPDATE `spp` SET `tahun` = '$tahun', `nominal` = '$nominal' WHERE `spp`.`id_spp` = $id");

        if ($data) {
            return true;
        } else {
            return false;
        }
    }


}