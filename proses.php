<?php
include_once "config/koneksi.php";

class Auth extends DB{

    public function do_login($username, $password)
    {
        $sql1 = $this->query("SELECT * FROM siswa WHERE nisn= '$username' AND nis = '$password'");

        if ($sql1->num_rows > 0) {
            $siswa = $sql1->fetch_assoc();

            $_SESSION["status"] = "login";
            $_SESSION["nisn"] = $siswa['nisn'];
            $_SESSION["nama"] = $siswa["nama"];
            $_SESSION["level"] = "siswa";
            header("location:includes/siswa");
        } else {
            $ptgs_pass = md5($password);
            $sql2 = $this->query("SELECT * FROM petugas WHERE username= '$username' AND password = '$ptgs_pass'");

            if ($sql2->num_rows > 0) {
                $petugas = $sql2->fetch_assoc();

                $_SESSION["status"] = "login";
                $_SESSION["id_petugas"] = $petugas['id_petugas'];
                $_SESSION["nama"] = $petugas["nama_petugas"];
                $_SESSION["level"] = $petugas["level"];
                header("location:includes/petugas");
            } else {
                $_SESSION['error'] = "user tidak ada";
            }
        }
    }

    
}
?>