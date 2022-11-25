<?php  include('config.php'); ?>
<?php  include('admin-functions.php'); ?>
<?php  include('post-functions.php'); ?>
<?php $posts = getAllPosts();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>

<link rel="stylesheet" href="admin-style.css">
	<title>Admin | Manage Posts</title>
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

		<!-- Display records from DB-->
		<div class="table-div"  style="width: 80%;">
			<!-- Display notification message -->
			<<?php if (isset($_SESSION['message'])) : ?>
                <div class="message" >
      	            <p>
                    <?php 
            	    echo $_SESSION['message']; 
          	        unset($_SESSION['message']);
                    ?>
      	            </p>
                </div>
            <?php endif ?>

			<?php if (empty($posts)): ?>
				<h1 style="text-align: center; margin-top: 20px;">No posts in the database.</h1>
			<?php else: ?>
				<table class="table">
						<thead>
						<th>N</th>
						<th>Title</th>
						<th>Author</th>
						<th>Views</th>

						<!-- Only Admin can publish/unpublish post -->
						<?php if ($_SESSION['user']['role'] == "Admin"): ?>
							<th><small>Publish</small></th>
						<?php endif ?>
						<th><small>Edit</small></th>
						<th><small>Delete</small></th>
					</thead>
					<tbody>
					<?php foreach ($posts as $key => $post): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td><?php echo $post['author']; ?></td>
							<td>
								<a 	target="_blank"
								href="<?php echo BASE_URL . 'detailed-blog.php?post-slug=' . $post['slug'] ?>">
									<?php echo $post['title']; ?>	
								</a>
							</td>
							<td><?php echo $post['views']; ?></td>
							
							<!-- Only Admin can publish/unpublish post -->
							<?php if ($_SESSION['user']['role'] == "Admin" ): ?>
								<td>
								<?php if ($post['published'] == true): ?>
									<a class="fa fa-check btn unpublish"
										href="post.php?unpublish=<?php echo $post['id'] ?>">
									</a>
								<?php else: ?>
									<a class="fa fa-times btn publish"
										href="post.php?publish=<?php echo $post['id'] ?>">
									</a>
								<?php endif ?>
								</td>
							<?php endif ?>

							<td>
								<a class="fa fa-pencil btn edit"
									href="create-post.php?edit-post=<?php echo $post['id'] ?>">
								</a>
							</td>
							<td>
								<a  class="fa fa-trash btn delete" 
									href="create-post.php?delete-post=<?php echo $post['id'] ?>">
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