
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>Dashboard" class="brand-link">
      <i class="fas fa- fa-graduation-cap ml-4"></i>
      <span class="brand-text font-weight-light ml-4">  SIAKAD SMK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url(); ?>assest/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block"><?= $this->session->userdata('name'); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item  has-treeview menu-open">
                    <a href="" class="nav-link active">
                    <i class="nav-icon fas fa-school"></i>
                    <p>
                    Daftar Siswa
                    </p>
                    </a>
                </li>
                     <li class="nav-item  has-treeview menu-open">
                    <a href="" class="nav-link active">
                    <i class="nav-icon fas fa-database"></i>
                    <p>
                    Daftar Mapel
                    </p>
                    </a>
                </li>
                     <li class="nav-item  has-treeview menu-open">
                    <a href="" class="nav-link active">
                    <i class="nav-icon fas fa-database"></i>
                    <p>
                    Daftar Nilai
                    </p>
                    </a>
                </li>
          <li class="nav-item  has-treeview menu-open">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-key"></i>
              <p>
             Surat Permohonan PKL
              </p>
            </a>
        </li>
        <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-indent"></i>
              <p>
             Surat ket. Kelulusan
              </p>
            </a>
        </li>
         <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url(); ?>Auth/Logout" class="nav-link active">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
             Log Out
              </p>
            </a>
        </li>
          
      
      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  

   

