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

						<a href="<?php echo site_url('admin/customers/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/customer/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $customer->customer_id?>" />

							<div class="form-group">
								<label for="name">Name*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Customer name" value="<?php echo $customer->name ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>
                            <div class="form-group">
								<label for="email">Email*</label>
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="text" name="email" placeholder="Customer email" value="<?php echo $customer->email ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
							</div>
                            <div class="form-group">
								<label for="no_hp">No Hp*</label>
								<input class="form-control <?php echo form_error('no_hp') ? 'is-invalid':'' ?>"
								 type="text" name="no_hp" placeholder="Customer Phone Number" value="<?php echo $customer->no_hp ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('no_hp') ?>
								</div>
							</div>
                            <div class="form-group">
								<label for="jumlah_ticket">Jumlah Ticket*</label>
								<input class="form-control <?php echo form_error('jumlah_ticket') ? 'is-invalid':'' ?>"
								 type="number" name="jumlah_ticket" min="0" placeholder="Customer Total Ticket" value="<?php echo $customer->jumlah_ticket ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>
                            <div class="form-group">
								<label for="payment">Price*</label>
								<input class="form-control <?php echo form_error('payment') ? 'is-invalid':'' ?>"
								 type="number" name="payment" min="0" placeholder="Customer Price" value="<?php echo $customer->payment ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('payment') ?>
								</div>
							</div>
                           
                            <div class="form-group">
								<label for="bukti_pembayaran">Bukti Pembayaran</label>
								<input class="form-control-file <?php echo form_error('bukti_pembayaran') ? 'is-invalid':'' ?>"
								 type="file" name="bukti_pembayaran" value="<?php echo $customer->bukti_pembayaran ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('bukti_pembayaran') ?>
								</div>
							</div>
                            
                            <div class="form-group">
								<label for="status">Status*</label>
								<input class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>"
								 type="text" name="status" placeholder="Customer Verification Status" value="<?php echo $customer->status ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('status') ?>
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