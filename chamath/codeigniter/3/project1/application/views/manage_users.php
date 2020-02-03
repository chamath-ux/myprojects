<div class="page-header">
	<h2>Manage Users</h2>
</div>

<?php if (validation_errors()) { ?>
	<div class="alert alert-danger">
		<?php echo validation_errors(); ?>
	</div>
<?php } ?>

<?php if ($this->session->flashdata('error')) { ?>
	<div class="alert alert-danger">
		<p><?php echo $this->session->flashdata('error'); ?></p>
	</div>
<?php } ?>

<?php if ($this->session->flashdata('ok')) { ?>
	<div class="alert alert-success">
		<p><?php echo $this->session->flashdata('ok'); ?></p>
	</div>
<?php } ?>

<!-- Projects Row -->
<div class="row">
	<div class="col-lg-12">
		<table class="table table-hover display datatable" style="width:100%">
			<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Account Type</th>
				<th>Deleted</th>
				<th>View</th>
				<th>Edit</th>
			</tr>
			</thead>
			<tbody>
			<?php if (isset($records) && is_array($records)) {
				foreach ($records as $record) { ?>
					<tr>
						<td><?php echo $record['user_id']; ?></td>
						<td><?php echo $record['name']; ?></td>
						<td><?php echo $record['email']; ?></td>
						<td><?php echo $record['role_name']; ?></td>
						<td><?php if ($record['deleted_at'] == null) {
								echo 'No';
							} else {
								echo 'Yes';
							} ?>
						</td>
						<td>
							<a href="<?php echo base_url() . 'user/show/' . $record['user_id']; ?>" class="btn btn-sm btn-info">View</a>
						</td>
						<td>
							<a href="<?php echo base_url() . 'user/edit/' . $record['user_id']; ?>" class="btn btn-sm btn-warning">Edit</a>
						</td>
					</tr>
				<?php }
			} ?>
			</tbody>
		</table>
	</div>
</div>
<!-- /.row -->

