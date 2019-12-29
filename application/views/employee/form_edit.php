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
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Pegawai</li>
          <li class="breadcrumb-item active">Edit Pegawai</li>
        </ol>

        <!-- Icon Cards-->

        <!-- Area Chart Example-->

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('paket') ?>"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
          <div class="card-body">
            <?php foreach($employee as $e){ ?>
            <form action="<?php echo site_url('employee/update') ?>" method="post">
              <div class="form-group">
                <label for="name">Nama Pegawai*</label>
                 <input type="hidden" name="id_employee" value="<?php echo $e->id_employee ?>" />
                <input class="form-control" type="text" name="name" placeholder="Nama Pegawai" value="<?php echo $e->name ?>" />
              </div>
              <div class="form-group">
                <label for="address">Alamat*</label>
                <input class="form-control" type="text" name="address"  value="<?php echo $e->address ?>" />
              </div>
               <div class="form-group">
                <label>Pilih Status:</label>
                <select class="form-control" id="status" name="status" value="<?php echo $e->status ?>">
                  <option value="menikah">Menikah</option>
                  <option value="belum menikah">Belum Menikah</option>
                </select>
              </div>
              <div class="form-group">
                <label>Pilih Posisi:</label>
                <select class="form-control" id="position" name="position" value="<?php echo $e->position ?>">
                  <option value="mencuci">Mencuci</option>
                  <option value="setrika">Setrika</option>
                  <option value="packing">Packing</option>
                </select>
              </div>

              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>
           <?php } ?>

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
