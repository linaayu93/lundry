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
        <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('admin/paket/tambah') ?>"><i class="fas fa-plus"></i> Add New</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="20">
                <thead>
                  <tr>
                    <th>No Transaksi</th>
                    <th>Paket</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($detail_transaction as $tra): ?>
                  <tr>
                    <td width="150">
                      <?php echo $tra->no_tran ?>
                    </td>
                    <td>
                      <?php echo $tra->name ?>
                    </td>
                    <td>
                      <?php echo $tra->qty ?>
                    </td>
                    <td>
                      <?php echo $tra->price?>
                    </td>
                    <td>
                      <?php echo $tra->subtotal?>
                    </td>
                    <td width="250">
                      <a href="<?php echo site_url('admin/paket/edit/'.$tra->id_detail) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                      <a onclick="#"
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
