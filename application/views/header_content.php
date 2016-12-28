  <header class="main-header">
    <!-- Logo -->
    <div class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Document</b>Tracer</span>
    </div>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">              
              <span class="hidden-xs"><?php echo $this->session->userdata('username_login'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                  <a href="<?php echo base_url('login/logoutAkun'); ?>">
                    <i class="fa fa-sign-out"></i> Keluar
                  </a>
              </li>              
            </ul>
          </li>        
        </ul>
      </div>
    </nav>
  </header>