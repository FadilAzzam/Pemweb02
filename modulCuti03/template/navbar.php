  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <nav id="navbar" class="app-header navbar navbar-expand bg-body fixed-top">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>
          </ul>
          <!--end::Start Navbar Links-->
          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">
            <!--begin::Navbar Search-->
            <!--begin::Navbar User Menu with Animation-->
            <li class="nav-item dropdown">
              <a data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                <img src="assets/img/user.png" alt="" width="40px" class="rounded-circle">
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-animate">
                <li>
                  <a class="dropdown-item" href="profil.php">
                    <i class="bi bi-person-circle me-2"></i> Edit Profil
                  </a>
                </li>
                <li>
                  <a class="dropdown-item text-danger" href="auth/logout.php">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                  </a>
                </li>
              </ul>
            </li>
            <!--end::Navbar User Menu with Animation-->
            <!--end::Navbar Search-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>
      <!--end::Header-->
      