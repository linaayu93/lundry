<!doctype html>
  <head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Register</title>
  </head>
  <body>
  	<div class="container">
	  	<div class="row">
			<div class="col-md-12">
				<?php echo $this->session->flashdata('failed') ?>
			</div>

			<div class="col-md-6">
			<?php echo form_open_multipart('admin/admini/submit_register'); ?>
			 <div class="form-group">
			    <label for="formGroupExampleInput">NIP</label>
			    <input name="nip" type="text" class="form-control" id="formGroupExampleInput">
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
  </body>
</html>