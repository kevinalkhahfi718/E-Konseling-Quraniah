<?php
$module = $_GET['module'];
?>

<li class="pc-item">
  <a class="pc-link <?php if ($module == "") echo 'active'; ?>" <?php if ($module == "") echo 'class="pc-link active"'; ?> href="./">
    <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
    <span class="pc-text">Beranda</span>
  </a>
</li> 
<?php
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
?>
  <li class="pc-item">
    <a class="pc-link <?php if ($module == "admin") echo 'active'; ?>" href="admin">
      <span class="pc-micon"><i class="fas fa-desktop"></i></span>
      <span class="pc-text">Admin</span>
    </a>
  </li>
  <li class="pc-item">
    <a class="pc-link <?php if ($module == "jurusan") echo 'active'; ?>" href="jurusan">
      <span class="pc-micon"><i class="fas fa-layer-group"></i></span>
      <span class="pc-text">Jenis Kecerdasan</span>
    </a>
  </li>
  <li class="pc-item">
    <a class="pc-link <?php if ($module == "minat") echo 'active'; ?>" href="minat">
      <span class="pc-micon"><i class="fas fa-table"></i></span>
      <span class="pc-text">Minat dan Bakat</span>
    </a>
  </li>
  <li class="pc-item">
    <a class="pc-link <?php if ($module == "pengetahuan") echo 'active'; ?>" href="pengetahuan">
      <span class="pc-micon"><i class="fa fa-book"></i></span>
      <span class="pc-text">Pengetahuan</span>
    </a>
  </li>
  <li class="pc-item">
    <a class="pc-link <?php if ($module == "post") echo 'active'; ?>" href="post">
      <span class="pc-micon"><i class="fas fa-file"></i></span>
      <span class="pc-text">Post Keterangan</span>
    </a>
  </li>
  <li class="pc-item">
    <a class="pc-link <?php if ($module == "password") echo 'active'; ?>" href="password">
      <span class="pc-micon"><i class="fas fa-pen-square"></i></span>
      <span class="pc-text">Ubah Password</span>
    </a>
  </li>
<?php
} else {
?>

  <li class="pc-item">
    <a class="pc-link <?php if ($module == "diagnosa") echo 'active'; ?>" href="diagnosa">
      <span class="pc-micon"><i class="fas fa-pen-square"></i></span>
      <span class="pc-text">Diagnosa</span>
    </a>
  </li>
  <li class="pc-item">
    <a class="pc-link <?php if ($module == "riwayat") echo 'active'; ?>" href="riwayat">
      <span class="pc-micon"><i class="fas fa-file"></i></span>
      <span class="pc-text">Riwayat</span>
    </a>
  </li>
  <li class="pc-item">
    <a class="pc-link <?php if ($module == "keterangan") echo 'active'; ?>" href="keterangan">
      <span class="pc-micon"><i class="fa fa-book"></i></span>
      <span class="pc-text">Keterangan</span>
    </a>
  </li>
<?php
}
?>