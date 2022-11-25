<?php  include('config.php'); ?>
<?php  include('admin-functions.php'); ?>
<?php 
	// Get all admin users from DB
	$admins = getAdminUsers();
	$roles = ['Admin', 'Author'];				
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>

<link rel="stylesheet" href="admin-style.css">

	<title>Admin | Manage users</title>
</head>
<body>
	<!-- admin navbar -->
	<div class="header">
	    <div class="logo">
		    <a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
            <img src="pic/Logo.png" alt="">
	    	</a>
	    </div>
        <?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
				<a href="<?php echo BASE_URL . 'logout.php'; ?>" class="logout-btn">logout</a>
			</div>
		<?php endif ?>
    </div>
	<div class="container content">
		<!-- Left side menu -->
		<div class="menu">
	        <div class="card">
		    <div class="card-header">
		    	<h2>Actions</h2>
		    </div>
		    <div class="card-content">
                <a href="<?php echo BASE_URL . 'create-post.php' ?>">Create Posts</a>
                <a href="<?php echo BASE_URL . 'posts.php' ?>">Manage Posts</a>
			    <a href="<?php echo BASE_URL . 'user.php' ?>">Manage Users</a>
			    <a href="<?php echo BASE_URL . 'topic.php' ?>">Manage Topics</a>
		    </div>
	    </div>
    </div>
		<!-- Middle form - to create and edit  -->
		<div class="action">
			<h1 class="page-title">Create/Edit Admin User</h1>

			<form method="post" action="<?php echo BASE_URL . 'user.php'; ?>" >

				<!-- validation errors for the form -->
				<?php include('error.php') ?>

				<!-- if editing user, the id is required to identify that user -->
				<?php if ($isEditingUser === true): ?>
					<input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">
				<?php endif ?>

				<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
				<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
				<input type="password" name="password" placeholder="Password">
				<input type="password" name="passwordConfirmation" placeholder="Password confirmation">
				<select name="role">
					<option value="" selected disabled>Assign role</option>
					<?php foreach ($roles as $key => $role): ?>
						<option value="<?php echo $role; ?>"><?php echo $role; ?></option>
					<?php endforeach ?>
				</select>

				<!-- if editing user, display the update button instead of create button -->
				<?php if ($isEditingUser === true): ?> 
					<button type="submit" class="btn" name="update_admin">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_admin">Save User</button>
				<?php endif ?>
			</form>
		</div>
		<!-- // Middle form - to create and edit -->

		<!-- Display records from DB-->
		<div class="table-div">
			<!-- Display notification message -->
			<?php if (isset($_SESSION['message'])) : ?>
                <div class="message" >
      	            <p>
            <?php 
            	echo $_SESSION['message']; 
          	    unset($_SESSION['message']);
            ?>
      	    </p>
            </div>
            <?php endif ?>
			<?php if (empty($admins)): ?>
				<h1>No admins in the database.</h1>
			<?php else: ?>
				<table class="table">
					<thead>
						<th>N</th>
						<th>Admin</th>
						<th>Role</th>
						<th colspan="2">Action</th>
					</thead>
					<tbody>
					<?php foreach ($admins as $key => $admin): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td>
								<?php echo $admin['username']; ?>, &nbsp;
								<?php echo $admin['email']; ?>	
							</td>
							<td><?php echo $admin['role']; ?></td>
							<td>
								<a class="fa fa-pencil btn edit"
									href="user.php?edit-admin=<?php echo $admin['id'] ?>">
								</a>
							</td>
							<td>
								<a class="fa fa-trash btn delete" 
								    href="user.php?delete-admin=<?php echo $admin['id'] ?>">
								</a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
		</div>
		<!-- // Display records from DB -->
	</div>
</body>
</html>