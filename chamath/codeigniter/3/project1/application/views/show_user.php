<div class="page-header">
	<h2>User Details</h2>
</div>

<?php echo form_open('/'); ?>

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

<div class="form-group">
	<label for="username">Username</label>
	<input type="text" class="form-control" id="username" name="username" value="<?php echo $record['username']; ?>" readonly>
</div>

<div class="form-group">
	<label for="name">Name</label>
	<input type="text" class="form-control" id="name" name="name" value="<?php echo $record['name']; ?>" readonly>
</div>

<div class="form-group">
	<label for="email">Email</label>
	<input type="email" class="form-control" id="email" name="email" value="<?php echo $record['email']; ?>" readonly>
</div>

<div class="form-group">
	<label for="role">User Role</label>
	<select class="form-control" id="role" name="role" disabled>
		<option value="">Please select a role...</option>
		<?php foreach ($roles as $role) : ?>
			<option <?php if ($record['role_id'] == $role['role_id']) echo 'selected'; ?> value="<?php echo $role['role_id']; ?>"><?php echo $role['name']; ?></option>
		<?php endforeach; ?>
	</select>
</div>

<div>
	<a href="<?php echo base_url() . 'user'; ?>" class="btn btn-secondary btn-page-overlay">Back</a>
</div>

<?php echo form_close(); ?>