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
        </ol>

        <!-- Icon Cards-->

        <!-- Area Chart Example-->

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('employee/tambah') ?>"><i class="fas fa-plus"></i> Add New</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="20">
                <thead>
                  <tr>
                    <th>Nama Pegawai</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Bagian</th>
                    <th>Tanggal Masuk Kerja</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($employee as $e): ?>
                  <tr>
                    <td width="150">
                      <?php echo $e->name ?>
                    </td>
                    <td>
                      <?php echo $e->address ?>
                    </td>
                    <td>
                      <?php echo $e->status ?>
                    </td>
                    <td>
                      <?php echo $e->position ?>
                    </td>
                    <td>
                      <?php echo $e->start_date ?>
                    </td>
                    <td width="250">
                      <a href="<?php echo site_url('employee/edit/'.$e->id_employee) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                      <a href="<?php echo site_url('employee/delete/'.$e->id_employee) ?>"
                        class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
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
