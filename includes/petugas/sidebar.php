<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="?p=dashboard">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-money-bill"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Pembayaran SPP</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="?p=dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<?php
if ($_SESSION['level'] == "admin") :
    
?>

<!-- Heading -->
<div class="sidebar-heading">
    Data
</div>

<!-- Nav Item -->
<li class="nav-item">
    <a class="nav-link" href="?p=petugas">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Petugas</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="?p=siswa">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Siswa</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="?p=kelas">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Kelas</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="?p=spp">
        <i class="fas fa-fw fa-table"></i>
        <span>Data SPP</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<?php endif ?>

<!-- Heading -->
<div class="sidebar-heading">
    Pembayaran
</div>


<!-- Nav Item -  -->
<li class="nav-item">
    <a class="nav-link" href="?p=bayar">
        <i class="fas fa-fw fa-table"></i>
        <span>Bayar</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="?p=history">
        <i class="fas fa-fw fa-table"></i>
        <span>History</span></a>
</li>

<?php
if ($_SESSION['level'] == "admin") :
    
?>
<li class="nav-item">
    <a class="nav-link" href="?p=cetak">
        <i class="fas fa-fw fa-print"></i>
        <span>Cetak Laporan</span></a>
</li>
<?php endif ?>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->