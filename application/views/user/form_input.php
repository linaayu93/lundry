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
            <form action="<?php echo site_url('user/post') ?>" method="post" enctype="multipart/form-data" >
                  <table class="table table-striped">
              <tr><td width="130">Nama Lengkap</td>
                      <td><div class="col-sm-4""><input type="text" name="nama" class="form-control" placeholder="Nama lengkap"></div>
                     </td></tr>
                     <tr><td width="130">Username</td>
                      <td><div class="col-sm-4""><input type="text" name="username" class="form-control" placeholder="Username"></div>
                     </td></tr>
                     <tr><td width="130">Password</td>
                      <td><div class="col-sm-4""><input type="password" name="password" class="form-control" placeholder="Password"></div>
                     </td></tr>
                     <tr><td width="130">Level</td>
                      <td><div class="col-sm-4"">
                        <select name="level" class="form-control">
                             <option value='karyawan'>karyawan</option>
                             <option value='admin'>admin</option>
                          </select>
                     </td></tr>
                  <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
                      <?php echo anchor('user','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
                      </td></tr>
              </table>
            </form>
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
