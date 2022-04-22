<?php
$bulan = ['Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', ];

if (isset($_GET['cek'])) {
    $nisn = $_GET['nisn'];

    $data_siswa = $db->getDataSiswa($nisn);
}

if (isset($_POST['submit']) && !empty($_GET['nisn'])) {
    $nisn = $_GET['nisn'];
    $id_petugas = $_SESSION["id_petugas"];
    $tgl_bayar = date('Y-m-d');
    $tahun_dibayar =  date('Y');
    $nom_bayar = $_POST['nominal_bayar']; 

    $data_bayar = $db->fetchAll("SELECT * FROM pembayaran WHERE nisn='$nisn'");

    $cek_jml_telah_bayar = $db->query("SELECT * FROM pembayaran WHERE nisn='$nisn'")->num_rows;
    $data_siswa = $db->query("SELECT * FROM siswa LEFT JOIN spp on siswa.id_spp = spp.id_spp LEFT JOIN kelas on siswa.id_kelas = kelas.id_kelas WHERE nisn='$nisn'")->fetch_assoc();

    $id_spp = $data_siswa['id_spp'];
    $nom = $data_siswa['nominal'];

    $bulan_telah_bayar = array_column($data_bayar, "bulan_dibayar");
    $bulan_blom_bayar = array_values(array_diff($bulan, $bulan_telah_bayar));

    $jml_bayar = $nom_bayar;

    $lebih_bayar = $nom_bayar - count($bulan_blom_bayar);

    if ($lebih_bayar > 0) {
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        Lebih bayar sejumlah Rp. <?=number_format($nom * $lebih_bayar)?>
    </div>

    <?php
        $jml_bayar = count($bulan_blom_bayar); 
    }

    for ($i=1; $i <= $jml_bayar ; $i++) { 
        $bulan_dibayar = $bulan_blom_bayar[$i - 1];

        $sql= "INSERT INTO pembayaran VALUES(NULL, '$id_petugas', '$nisn', '$tgl_bayar', '$bulan_dibayar', '$tahun_dibayar', '$id_spp', '$nom')";
        $insert = $db->query($sql);
    }

    if (isset($insert)) {
        
        if ($insert) {
            echo "<script>
            alert('sukses bayar spp');
            </script>";
        } else {
            echo "<script>
            alert('gagal bayar spp');
            </script>";
        }
    }
}

?>

<div class="container-fluid">

    <form action="" method="GET">

        <div class="form-group">
            <input type="hidden" name="p" value="bayar">
            <label for="nisn">NISN</label>
            <input type="text"
            class="form-control" name="nisn" id="nisn" aria-describedby="" autocomplete="off" placeholder="Masukan nisn" list="nisn1">
            <datalist id="nisn1">
                <?php
                $siswa = $db->getAllDataSiswa();
                
                foreach ($siswa as $key => $row) :
                    ?>
            <option value="<?=$row['nisn']?>"><?=$row['nama']?></option>
            <?php endforeach ?>
        </datalist>
    </div>
    <button type="submit" name="cek" class="btn btn-primary ">cek</button>
    </form>
    
<?php if(isset($nisn) && !empty($nisn)) : ?>

        <!-- DataTales  -->
<div class="card shadow mb-4 mt-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline">Pembayaran SPP Tahun Ajaran 
            <?php 
            if(date('m') > 7){ 
                echo date('Y'). '/' . (date('Y')+1); 
            } else { 
                echo (date('Y')-1). '/' . date('Y');
            }
            ?>
        </h6>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <?php
            $nisn = $_GET['nisn'];
            $data_siswa = $db->fetchAll("SELECT * FROM siswa LEFT JOIN spp on siswa.id_spp = spp.id_spp LEFT JOIN kelas on siswa.id_kelas = kelas.id_kelas WHERE nisn='$nisn'");
            foreach ($data_siswa as $key => $r) :
                
            
            ?>
            <h5>Data Siswa</h5>
            <div class="container-fluid">

                <div class="form-group row mb-0">
                    <div class="col-sm-2 mb-0">
                        <p>NISN</p>
                    </div>
                    <div class="col-sm-6 mb-0">
                        <p>: <?=$r['nisn']?></p>
                    </div>
                </div>
                <div class="form-group row my-0 mt-0">
                    <div class="col-sm-2 mb-sm-0">
                        <p>NIS</p>
                    </div>
                    <div class="col-sm-6 mb-0">
                        <p>: <?=$r['nis']?></p>
                    </div>
                </div>
                <div class="form-group row mb-0 mt-0">
                    <div class="col-sm-2 mb-sm-0">
                        <p>Nama</p>
                    </div>
                    <div class="col-sm-6 mb-0">
                        <p>: <?=$r['nama']?></p>
                    </div>
                </div>
                <div class="form-group row mb-0 mt-0">
                    <div class="col-sm-2 mb-sm-0">
                        <p>Kelas</p>
                    </div>
                    <div class="col-sm-6 mb-0">
                        <p>: <?=$r['nama_kelas']?></p>
                    </div>
                </div>
                <div class="form-group row mb-0 mt-0">
                    <div class="col-sm-2 mb-sm-0">
                        <p>Kompetensi Keahlian</p>
                    </div>
                    <div class="col-sm-6 mb-0">
                        <p>: <?=$r['kompetensi_keahlian']?></p>
                    </div>
                </div>
                
            </div>
            <hr>
            <h5>Bulan bayar</h5>
            <?php
            $data_bayar = $db->fetchAll("SELECT * FROM pembayaran WHERE nisn='$nisn'");

            $bulan_telah_bayar = array_column($data_bayar, "bulan_dibayar");
            $bulan_blom_bayar = array_values(array_diff($bulan, $bulan_telah_bayar));
            
            foreach ($bulan as $key => $val) {
                    
            ?>
                <span class="badge <?= !in_array($val, $bulan_telah_bayar) ? 'badge-danger' : 'badge-success' ;?>"><?=$val?></span>
            
            <?php } ?>
            <br>
                <small class="mt-2"><b>KETERANGAN</b></small>
                <br>
                <span class="badge badge-danger">&nbsp;&nbsp;&nbsp;</span> : Belum bayar
                <br>
                <span class="badge badge-success">&nbsp;&nbsp;&nbsp;</span> : Sudah bayar
                
            <hr>
            <div class="form-group">
              <label for="nominal_bayar">Nominal Bayar</label>
              <?php
                $cek_jml_telah_bayar = $db->query("SELECT * FROM pembayaran WHERE nisn='$nisn'")->num_rows;
                $data_siswa = $db->query("SELECT * FROM siswa LEFT JOIN spp on siswa.id_spp = spp.id_spp LEFT JOIN kelas on siswa.id_kelas = kelas.id_kelas WHERE nisn='$nisn'")->fetch_assoc();
                $nom = $data_siswa['nominal'];
              ?>
              <select class="form-control" name="nominal_bayar" id="nominal_bayar" required>
                <?php
                
                if($cek_jml_telah_bayar == 12){

                ?>
                    <option value="" selected disabled>Sudah Lunas</option>
                <?php
                } else {
                ?>
                    <option value="" selected disabled>Pilih nominal pembayaran</option>
                <?php
                    for ($i=1; $i <= 12; $i++) { 
                ?>
                        <option value="<?=$i?>"><?=$i?>x bayar - Rp. <?=number_format($i * $nom)?></option>
                <?php
                    }
                }
                ?>
              </select>
            </div>  
            <button type="submit" name="submit" class="btn btn-primary float-right">Bayar</button>
            <?php endforeach ?>
        </form>
    </div>
</div>
<?php endif ?>
</div>