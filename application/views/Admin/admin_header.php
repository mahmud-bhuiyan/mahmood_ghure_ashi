</head>
<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="<?php echo base_url('admin/deshboard') ?>">Ghure Ashi</a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo base_url('admin/deshboard') ?>">GA</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a class="dropdown-item" href="<?php echo base_url('admin/viewAllMessage') ?>"><i class="ti-email text-primary"></i>Messages</a>
        </li>

        <li class="nav-item nav-profile dropdown">
          <a class="dropdown-item" href="<?php echo base_url('Admin/logout') ?>"><i class="ti-power-off text-primary"></i>Logout</a>
        </li>
      </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">

      <ul class="nav">
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/deshboard') ?>">
            <i class="ti-shield menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="ti-user menu-icon"></i>
            <span class="menu-title">User</span>
            <i class="menu-arrow"></i>
          </a>
          
          <div class="collapse" id="ui-basic">
           
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/viewUser') ?>">View User</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/viewUserRequest') ?>">User Request</a></li>
            </ul>

          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#Guide" aria-expanded="false" aria-controls="Guide">
            <i class="ti-user menu-icon"></i>
            <span class="menu-title">Guide</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="Guide">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/addGuide') ?>">Add Guide</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Admin/viewGuide') ?>">View Guide</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Admin/viewGuideRequest') ?>">Guide Request</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#Admin" aria-expanded="false" aria-controls="Admin">
            <i class="ti-user menu-icon"></i>
            <span class="menu-title">Admin</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="Admin">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/addAdmin') ?>">Add Admin</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Admin/viewAdmin') ?>">View Admin</a></li>

            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#Types" aria-expanded="false" aria-controls="Types">
            <i class="ti-info menu-icon"></i>
            <span class="menu-title">Types of Place</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="Types">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Admin/addPlaceType') ?>">Add Place Type</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Admin/viewPlaceType') ?>">View Place Type</a></li>

            </ul>
          </div>
        </li>

      <!--   <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#Location" aria-expanded="false" aria-controls="Location">
            <i class="ti-location-pin menu-icon"></i>
            <span class="menu-title">Location</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="Location">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/addLocation') ?>">Add Location</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/viewLocation') ?>">View Location</a></li>

            </ul>
          </div>
        </li> -->

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#plc" aria-expanded="false" aria-controls="plc">
            <i class="ti-info menu-icon"></i>
            <span class="menu-title">Place</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="plc">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Admin/addPlace') ?>">Add Place</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Admin/viewPlace') ?>">View Place</a></li>

            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="ti-folder menu-icon"></i>
            <span class="menu-title">Package</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Admin/addPackage') ?>">Add Package</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Admin/viewPackage') ?>">View Package</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#Booking" aria-expanded="false" aria-controls="Booking">
            <i class="ti-bookmark menu-icon"></i>
            <span class="menu-title">Booking</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="Booking">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Admin/bookedPakage') ?>">Booked Package</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Admin/bookedGuide') ?>">Booked Guide</a></li>

            </ul>
          </div>
        </li>

      </ul>
    </nav>