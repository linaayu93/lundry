  
    <ul class="sidebar navbar-nav">
       <div class="user-panel">
                  <div class="pull-left info">
                <p><b><?php echo $this->session->userdata('username'); ?></b></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
         </div>
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>paket">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Paket</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>employee">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Pegawai</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Detailtransaksi</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Transaksi</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>user">
          <i class="fas fa-fw fa-table"></i>
          <span>User</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Laporan</span></a>
      </li>
    </ul>