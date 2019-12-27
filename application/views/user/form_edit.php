<!DOCTYPE html>
<html lang="en">

<head>

<?php $this->load->view("_layout/head.php") ?>

</head>

<body id="page-top">

<?php $this->load->view("_layout/navbar.php") ?>

  <div id="wrapper">

    <!-- Sidebar -->
  <?php $this->load->view("_layout/sidebar.php") ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
  <?php $this->load->view("_layout/breadcrumb.php") ?>

        <!-- Icon Cards-->

        <!-- Area Chart Example-->

        <!-- DataTables Example -->
        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
        <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
            <div class="card-body">
              <form action="<?php echo site_url('user/edit') ?>" method="post">

                <input type="hidden" value="<?php echo $record['id_user']?>" name="id">
                  <table class="table table-striped">
                    <tr><td width="130">Nama Lengkap</td>
                      <td><div class="col-sm-4""><input type="text" name="nama" placeholder="Nama lengkap" class="form-control" value="<?php echo $record['nama_lengkap']?>"></div>
                      </td></tr>
                      <tr><td width="130">Username</td>
                      <td><div class="col-sm-4""><input type="text" name="username" placeholder="Username" class="form-control" value="<?php echo $record['username']?>"></div>
                      </td></tr>
                      <tr><td width="130">Password</td>
                      <td><div class="col-sm-4""><input type="password" name="password" placeholder="Password" class="form-control" value=""></div>
                      </td></tr>
                      <tr><td width="130">Level</td>
                            <td><div class="col-sm-4"">
                               <select name="level" class="form-control">
                                   <option value='karyawan'<?php if ($record['level']=='karyawan')
                                   {
                                    echo " selected";
                                   } 
                                   else {
                                    echo "";
                                   }
                                   ?>>karyawan</option>
                                   <option value='admin'
                                   <?php if ($record['level']=='admin')
                                   {
                                    echo " selected";
                                   } 
                                   else {
                                    echo "";
                                   }
                                   ?>
                                   >admin</option>
                                </select>
                           </td></tr>
                           <tr><td width="130">Aktif</td>
                            <td><div class="col-sm-4"">
                               <select name="active" class="form-control">
                                    <option value='1'>1</option>
                                   <option value='0'>0</option>
                                </select>
                           </td></tr>
                        <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
                          <?php echo anchor('user','Kembali',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
                  </table>
            </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php $this->load->view("_layout/footer.php") ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php $this->load->view("_layout/scrolltop.php") ?>
  <?php $this->load->view("_layout/modal.php") ?>
  <?php $this->load->view("_layout/js.php") ?>

  <!-- Scroll to Top Button-->


  <!-- Logout Modal-->

  <!-- Bootstrap core JavaScript-->

</body>

</html>
