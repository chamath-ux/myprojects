<div class="page-header">
	<h2>Create New User</h2>
</div>

<?php echo form_open('user/store'); ?>

<div class="form-group">

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
		<input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username'); ?>" placeholder="Please enter a valid username..." required autofocus>
	</div>

	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" id="password" name="password" value="" placeholder="Please enter a password..." required>
	</div>

	<div class="form-group">
		<label for="confirm_password">Confirm Password</label>
		<input type="password" class="form-control" id="confirm_password" name="confirm_password" value="" placeholder="Please re-enter the password..." required>
	</div>

	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name'); ?>" placeholder="Please enter a name..." required>
	</div>

	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Please enter a valid email..." required>
	</div>

	<div class="form-group">
		<label for="role">User Role</label>
		<select class="form-control" id="role" name="role" required>
			<option value="">Please select a role...</option>
			<?php foreach ($roles as $role) : ?>
				<option <?php if (set_value('role') == $role['role_id']) echo 'selected'; ?> value="<?php echo $role['role_id']; ?>"><?php echo $role['name']; ?></option>
			<?php endforeach; ?>
		</select>
	</div>

	<div>
		<a href="<?php echo base_url() . 'user' ?>" class="btn btn-secondary btn-page-overlay">Back</a>
		<button type="submit" class="btn btn-primary" name="submit">Create</button>
	</div>

</div>

<?php echo form_close(); ?>
