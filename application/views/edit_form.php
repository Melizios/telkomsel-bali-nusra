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

						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->

							<input type="hidden" name="id" value="<?php echo $nomeja->nomeja?>" />

							<div class="form-group">
								<label for="nomeja">nomeja*</label>
								<input class="form-control <?php echo form_error('nomeja') ? 'is-invalid':'' ?>"
								 type="text" name="nomeja" placeholder="Nomor Meja" value="<?php echo $nomeja->nomeja ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nomeja') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="Stock">Stock</label>
								<input class="form-control <?php echo form_error('Stock') ? 'is-invalid':'' ?>"
								 type="number" name="Stock" min="0" placeholder="Stock" value="<?php echo $stock->Stock ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('Stock') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="Makan">Makan*</label>
								<input class="form-control <?php echo form_error('Makan') ? 'is-invalid':'' ?>"
								 type="text" name="Makan" placeholder="Makan" value="<?php echo $makan->Makan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('Makan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="Minum">Minum*</label>
								<input class="form-control <?php echo form_error('Minum') ? 'is-invalid':'' ?>"
								 type="text" name="Minum" placeholder="Minum" value="<?php echo $minum->Minum ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('Makan') ?>
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