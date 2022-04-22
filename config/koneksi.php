<?php
session_start();

class DB {
    var $host = "localhost";
    var $user = "root";
    var $pass = "";
    var $dbs = "db_spp";

    public function connect()
    {
        $conn = new mysqli($this->host, $this->user, $this->pass, $this->dbs) or die(mysqli_connect_error());

        return $conn;
    }

    public function do_logout()
    {
        session_reset();
        session_destroy();
    }

    public function is_login()
    {
        if ($_SESSION["status"] != "login") {
            header("location:../../index.php");
        }
    }

    public function query($query)
    {
        $conn = $this->connect();

        $queryRun = mysqli_query($conn, $query) or die(mysqli_errno($conn));

        return $queryRun;
    }

    public function fetchAll($query)
    {
        $queryRun = $this->query($query);

        $data = $queryRun->fetch_all(MYSQLI_ASSOC);

        return $data;
    }
}

?>