<?php  include('config.php'); ?>
<?php  include('admin-functions.php'); ?>
<?php  include('post-functions.php'); ?>
<?php $topics = getAllTopics();	?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>

<link rel="stylesheet" href="admin-style.css">
	<title>Admin | Create Post</title>
</head>
<body>
    <!----navbar---->
	<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL .'dashboard.php' ?>">
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
                    <a href="<?php echo BASE_URL . 'post.php' ?>">Manage Posts</a>
			        <a href="<?php echo BASE_URL . 'user.php' ?>">Manage Users</a>
			        <a href="<?php echo BASE_URL . 'topic.php' ?>">Manage Topics</a>
                </div>
            </div>    
	    </div>

		<!-- Middle form - to create and edit  -->
		<div class="action create-post-div">
			<h1 class="page-title">Create/Edit Post</h1>
			<form method="post" enctype="multipart/form-data" action="<?php echo BASE_URL . 'create-post.php'; ?>" >
				<!-- validation errors for the form -->
				<?php include('error.php') ?>

				<!-- if editing post, the id is required to identify that post -->
				<?php if ($isEditingPost === true): ?>
					<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
				<?php endif ?>

				<input type="text" name="title" value="<?php echo $title; ?>" placeholder="Title">
				<label style="float: left; margin: 5px auto 5px;">Featured image</label>
				<input type="file" name="featured_image" >
				<textarea name="body" id="body" cols="30" rows="10"><?php echo $body; ?></textarea>
				<select name="topic_id">
					<option value="" selected disabled>Choose topic</option>
					<?php foreach ($topics as $topic): ?>
						<option value="<?php echo $topic['id']; ?>">
							<?php echo $topic['name']; ?>
						</option>
					<?php endforeach ?>
				</select>
				
				<!-- Only admin users can view publish input field -->
				<?php if ($_SESSION['user']['role'] == "Admin"): ?>
					<!-- display checkbox according to whether post has been published or not -->
					<?php if ($published == true): ?>
						<label for="publish">
							Publish
							<input type="checkbox" value="1" name="publish" checked="checked">&nbsp;
						</label>
					<?php else: ?>
						<label for="publish">
							Publish
							<input type="checkbox" value="1" name="publish">&nbsp;
						</label>
					<?php endif ?>
				<?php endif ?>
				
				<!-- if editing post, display the update button instead of create button -->
				<?php if ($isEditingPost === true): ?> 
					<button type="submit" class="btn" name="update_post">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_post">Save Post</button>
				<?php endif ?>

			</form>
		</div>
		<!-- // Middle form - to create and edit -->
	</div>
</body>
</html>

<script>
	CKEDITOR.replace('body');
</script>