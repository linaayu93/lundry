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
            <a href="<?php echo site_url('user/post') ?>"><i class="fas fa-plus"></i> Add New</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="20">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Active</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no=1+$this->uri->segment(3);
                    foreach ($record as $r)
                    {
                      if ($r->active=='1'){ $active = "Aktif";} else {$active="Non Aktif";}
                        echo "<tr>
                            <td width='10'>$no</td>
                            <td>$r->nama_lengkap</td>
                            <td>$r->username</td>
                            <td>$r->level</td>
                            <td>".$active."</td>
                            <td width='5'>".anchor('user/edit/'.$r->id_user,'Edit', array('class'=>'btn btn-small fas fa-edit'))."</td>
                            <td width='5'>".anchor('user/delete/'.$r->id_user,'Delete', array('class'=>'btn btn-small fas fa-trash'))."</td>
                            </tr>";
                        $no++;
                    }
                    ?>
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
