<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.php" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="assets/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">AdminLTE 4</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item">
                <a href="./dashboard.php" class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'dashboard.php') echo 'active'; ?>">
                  <i class="nav-icon bi bi-house"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <?php if ($_SESSION['is_admin'] == 0) : ?>
                <li class="nav-item">
                  <a href="./ajukan_cuti.php" class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'ajukan_cuti.php') echo 'active'; ?>">
                    <i class="nav-icon bi bi-calendar-plus"></i>
                    <p>Ajukan Cuti</p>
                  </a>
                </li>
              <?php endif ?>
              <?php if ($_SESSION['is_admin'] == 1) : ?>
                <li class="nav-item">
                  <a href="./list_pegawai.php" class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'list_pegawai.php') echo 'active'; ?>">
                    <i class="nav-icon bi bi-person-lines-fill"></i>
                    <p>List Pegawai</p>
                  </a>
                </li>
              <?php endif ?>
              <li class="nav-item">
                <a href="./history_cuti.php" class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'history_cuti.php') echo 'active'; ?>">
                  <i class="nav-icon bi bi-clock-history"></i>
                  <p>History Cuti</p>
                </a>
              </li>
              <?php if ($_SESSION['is_admin'] == 1) : ?>
                <li class="nav-item">
                  <a href="./verifikasi_cuti.php" class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'verifikasi_cuti.php') echo 'active'; ?>">
                    <i class="nav-icon bi bi-calendar-check"></i>
                    <p>Verifikasi Cuti</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./auth/register.php" class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'register.php') echo 'active'; ?>">
                    <i class="nav-icon bi bi-person-add"></i>
                    <p>Daftarkan Pegawai</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./auth/register_admin.php" class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'register_admin.php') echo 'active'; ?>">
                    <i class="nav-icon bi bi-person-plus"></i>
                    <p>Daftarkan Admin</p>
                  </a>
                </li>
              <?php endif ?>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
      <div class="content-wrapper">
        <section class="content" style="margin-top: 70px;">
            <div class="container-fluid">