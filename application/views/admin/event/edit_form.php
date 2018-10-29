<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
                <!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/event/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/event/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="event_id" value="<?php echo $events->event_id?>" />

							<div class="form-group">
								<label for="title">Title*</label>
								<input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
								 type="text" name="title" placeholder="Event Title" value="<?php echo $events->title ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('title') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="details">Details*</label>
								<input class="form-control <?php echo form_error('details') ? 'is-invalid':'' ?>"
								 type="text" name="details" placeholder="Details Location" value="<?php echo $events->details ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('details') ?>
								</div>
							</div>
                            <div class="form-group">
								<label for="update_at">Waktu*</label>
								<select class="form-control <?php echo form_error('update_at') ? 'is-invalid':'' ?>"
								 name="tgl">
									 <?php
									 	$date = explode("-",$events->updated_at);
										 $tgl = $date[2];
										 $bln = $date[1];
										 $thn = $date[0];
									 	for ($i=1; $i <= 31 ; $i++) { 
											 echo "<option value='$tgl'>$i</option>";
										 }
									 ?>
								</select>
								<select class="form-control <?php echo form_error('update_at') ? 'is-invalid':'' ?>"
								 name="bln">
									 <?php
										 
									 	for ($i=1; $i <= 12 ; $i++) { 
											 echo "<option value='$bln'>$i</option>";
										 }
									 ?>
								</select>
								<select class="form-control <?php echo form_error('update_at') ? 'is-invalid':'' ?>"
								 name="thn">
									 <?php
									 	for ($i=2020; $i >= 2000 ; $i--) { 
											 echo "<option value='$thn'>$i</option>";
										 }
									 ?>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('update_at') ?>
								</div>
							</div>
                            <div class="form-group">
								<label for="name">Description*</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="description" placeholder="Event description..."><?php echo $events->description ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>
                            
                            <div class="form-group">
								<label for="photo">Photo</label>
								<input class="form-control-file <?php echo form_error('photo') ? 'is-invalid':'' ?>"
								 type="file" name="photo" />
								<div class="invalid-feedback">
									<?php echo form_error('photo') ?>
								</div>
										</div>
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>