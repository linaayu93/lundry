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
            <a href="<?php echo site_url('paket') ?>"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
          <div class="card-body">
            <?php foreach($packet as $product){ ?>
            <form action="<?php echo site_url('paket/update') ?>" method="post">
              <div class="form-group">
                <label for="name">Name*</label>
                 <input type="hidden" name="packet_id" value="<?php echo $product->packet_id?>" />
                <input class="form-control" type="text" name="name" placeholder="Product name" value="<?php echo $product->name ?>" />
                
              </div>

              <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="text" name="price" min="0" placeholder="Product price" value="<?php echo $product->price ?>" />
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
