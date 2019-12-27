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
        <div class="row">
        </div>

        <!-- Area Chart Example-->

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body"> 
          <div class="row">
            <div class="col-md-12">
              <?php echo $this->session->flashdata('failed') ?>
            </div>

            <div class="col-md-6">
            <?php echo form_open_multipart('admin/authpe/submit_register'); ?>
             <div class="form-group">
                <label for="formGroupExampleInput">NIK</label>
                <input name="nik" type="text" class="form-control" id="formGroupExampleInput">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Nama Lengkap</label>
                <input name="member_name" type="text" class="form-control" id="formGroupExampleInput">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Email</label>
                <input name="email" type="text" class="form-control" id="formGroupExampleInput2">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Telp</label>
                <input name="telp" type="text" class="form-control" id="formGroupExampleInput2">
              </div>
               <div class="form-group">
                <label for="formGroupExampleInput2">Photo Profile</label>
                 <input name="photo" type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
               <div class="form-group">
                <label for="formGroupExampleInput2">Address</label>
               <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <label for="formGroupExampleInput2">Username</label>
                  <input name="username" type="text" class="form-control" id="formGroupExampleInput2">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Password</label>
                  <input name="password" type="password" class="form-control" id="formGroupExampleInput2">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Retype Password</label>
                  <input name="retype_password" type="password" class="form-control" id="formGroupExampleInput2">
                </div>
                <button type="submit" class="btn btn-outline-primary">Daftar Sekarang</button>  
            </div>
            <?php echo form_close(); ?>
            </div>
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
