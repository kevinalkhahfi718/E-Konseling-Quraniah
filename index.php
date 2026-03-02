<?php
error_reporting(0);
ob_start();
session_start();
include "config/koneksi.php";
include "config/fungsi_alert.php";

if ((!isset($_SESSION['username']) && !isset($_SESSION['password'])) || ($_SESSION['role'] != "Admin")) {
  echo "<script>window.location = 'user/index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>E Konseling Quraniah</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">

  <base href="http://localhost/e-konseling-quraniah-php/">
  <!-- [Favicon] icon -->
  <link rel="icon" href="assets/assets/images/favicon.svg" type="image/x-icon"> <!-- [Google Font] Family -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
  <!-- [Tabler Icons] https://tablericons.com -->
  <link rel="stylesheet" href="assets/assets/fonts/tabler-icons.min.css">
  <!-- [Feather Icons] https://feathericons.com -->
  <link rel="stylesheet" href="assets/assets/fonts/feather.css">
  <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
  <link rel="stylesheet" href="assets/assets/fonts/fontawesome.css">
  <!-- [Material Icons] https://fonts.google.com/icons -->
  <link rel="stylesheet" href="assets/assets/fonts/material.css">
  <!-- [Template CSS Files] -->
  <link rel="stylesheet" href="assets/assets/css/style.css" id="main-style-link">
  <link rel="stylesheet" href="assets/assets/css/style-preset.css">
  <script src="aset/ckeditor/ckeditor.js"></script>
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->
  <!-- [ Sidebar Menu ] start -->
  <nav class="pc-sidebar">
    <div class="navbar-wrapper">
      <div class="m-header">
        <a href="assets/dashboard/index.html" class="b-brand text-primary">
          <!-- ========   Change your logo from here   ============ -->
          <h5 class="text-primary">E-Konseling Quraniah</h5>
        </a>
      </div>
      <div class="navbar-content">
        <ul class="pc-navbar">
          <?php include "menu.php"; ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
  <header class="pc-header">
    <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
      <div class="me-auto pc-mob-drp">
        <ul class="list-unstyled">
          <!-- ======= Menu collapse Icon ===== -->
          <li class="pc-h-item pc-sidebar-collapse">
            <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
          <li class="pc-h-item pc-sidebar-popup">
            <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- [Mobile Media Block end] -->
      <div class="ms-auto">
        <ul class="list-unstyled">
          <?php if (isset($_SESSION['username']) && isset($_SESSION['password'])) { ?>
            <li class="dropdown pc-h-item header-user-profile">
              <a
                class="pc-head-link dropdown-toggle arrow-none me-0"
                data-bs-toggle="dropdown"
                href="#"
                role="button"
                aria-haspopup="false"
                data-bs-auto-close="outside"
                aria-expanded="false">
                <img src="gambar/admin/admin.png" alt="user-image" class="user-avtar">
                <span><?php echo ucfirst($_SESSION['nama_lengkap']); ?></span>
              </a>
              <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                <div class="dropdown-header">
                  <div class="d-flex mb-1">
                    <div class="flex-shrink-0">
                      <img src="gambar/admin/admin.png" alt="user-image" class="user-avtar wid-35">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-1"><?php echo ucfirst($_SESSION['nama_lengkap']); ?></h6>
                      <span>Admin</span>
                    </div>
                    <a href="JavaScript: confirmIt('Anda yakin akan logout dari aplikasi ?','logout.php','','','','u','n','Self','Self')" class="pc-head-link bg-transparent"><i class="ti ti-power text-danger"></i></a>
                  </div>
                </div>

              </div>
            </li>
          <?php } else { ?>
            <li class="dropdown pc-h-item header-user-profile">
              <a
                class="pc-head-link arrow-none me-0"
                href="formlogin">
                <img src="gambar/admin/admin.png" alt="user-image" class="user-avtar">
                <span>Login</span>
              </a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </header>
  <!-- [ Header ] end -->



  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <?php include "content.php"; ?>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
      <nav class="text-center">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalForm">
          <i class="fa fa-envelope-square"></i> Kontak Kami
        </button>
      </nav>
    </div>
  </footer>

  <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="labelModalKu" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="max-width: 450px; margin: auto;">
        <!-- Modal Header -->
        <div class="modal-header mdl-kontak">
          <h5 class="modal-title text-ket" id="labelModalKu">
            <i class="fa fa-envelope-square"></i> Kontak Kami
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
          <p class="statusMsg"></p>
          <form role="form">
            <div class="mb-3">
              <label for="masukkanNama" class="form-label">Nama:</label>
              <input type="text" class="form-control" id="masukkanNama" placeholder="Masukkan nama Anda" />
            </div>
            <div class="mb-3">
              <label for="masukkanEmail" class="form-label">Email:</label>
              <input type="email" class="form-control" id="masukkanEmail" placeholder="Masukkan email Anda" />
            </div>
            <div class="mb-3">
              <label for="masukkanPesan" class="form-label">Pesan:</label>
              <textarea class="form-control" id="masukkanPesan" placeholder="Masukkan pesan Anda" rows="4"></textarea>
            </div>
          </form>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
          <button type="button" class="btn btn-success" onclick="kirimContactForm()">Kirim</button>
        </div>
      </div>
    </div>
  </div>

  <!-- [Page Specific JS] start -->
  <script src="assets/assets/js/plugins/apexcharts.min.js"></script>
  <script src="assets/assets/js/pages/dashboard-default.js"></script>
  <!-- [Page Specific JS] end -->
  <!-- Required Js -->
  <script src="assets/assets/js/plugins/popper.min.js"></script>
  <script src="assets/assets/js/plugins/simplebar.min.js"></script>
  <script src="assets/assets/js/plugins/bootstrap.min.js"></script>
  <script src="assets/assets/js/fonts/custom-font.js"></script>
  <script src="assets/assets/js/pcoded.js"></script>
  <script src="assets/assets/js/plugins/feather.min.js"></script>





  <script>
    layout_change('light');
  </script>




  <script>
    change_box_container('false');
  </script>



  <script>
    layout_rtl_change('false');
  </script>


  <script>
    preset_change("preset-1");
  </script>


  <script>
    font_change("Public-Sans");
  </script>



</body>
<!-- [Body] end -->

</html>
<?php ob_end_flush();
?>