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
            <form action="<?php echo site_url('transaksi/tambah_aksi') ?>" method="post" enctype="multipart/form-data" >
             <div class="row">
              <div class="col-sm-6">
                
                <div class="form-group row">
                  <label for="inputAddress" class="col-sm-2 col-form-label">No Transaksi</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="inputAddress" name="no_tran" readonly value="<?php echo substr(uniqid(), 1,6); ?>" >
                  </div>
                </div>
              
                 <div class="form-group row">
                  <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Nik ">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group row">
                  <label for="start_date" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="start_date" name="start_date">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="end_date" class="col-sm-2 col-form-label">Tanggal Keluar</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="end_date" name="end_date">
                  </div>
                </div>

              </div>
             </div>

              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>
          </div>
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
