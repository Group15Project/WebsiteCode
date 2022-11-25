<?php  include('config.php'); ?>
<?php  include('admin-functions.php'); ?>
<html>
<head>
<meta charset="UTF-8">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">
<!-- Font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<!-- ckeditor -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>
<!-- Styling for public area -->
<link rel="stylesheet" href="admin-style.css">
<!-- Get all topics from DB -->
<?php $topics = getAllTopics();	?>
	<title>Admin | Manage Topics</title>
</head>
<body>
	<!-- admin navbar -->
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
    <!-- left side menu -->
        <div class="menu">
	        <div class="card">
		        <div class="card-header">
		            <h2>Actions</h2>
		        </div>
		        <div class="card-content">
                    <a href="<?php echo BASE_URL . 'create-post.php'?>">Create Posts</a>
                    <a href="<?php echo BASE_URL . 'posts.php' ?>">Manage Posts</a>
			        <a href="<?php echo BASE_URL . 'user.php' ?>">Manage Users</a>
			        <a href="<?php echo BASE_URL . 'topic.php' ?>">Manage Topics</a>
                </div>
            </div>    
	    </div>
    <!-- middle form -->
    <div class="action">
			<h1 class="page-title">Create/Edit Topics</h1>
			<form method="post" action="<?php echo BASE_URL . 'topic.php'; ?>" >
				<!-- validation errors for the form -->
				<?php include('error.php') ?>
				<!-- if editing topic, the id is required to identify that topic -->
				<?php if ($isEditingTopic === true): ?>
					<input type="hidden" name="topic_id" value="<?php echo $topic_id; ?>">
				<?php endif ?>
				<input type="text" name="topic_name" value="<?php echo $topic_name; ?>" placeholder="Topic">
				<!-- if editing topic, display the update button instead of create button -->
				<?php if ($isEditingTopic === true): ?> 
					<button type="submit" class="btn" name="update_topic">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_topic">Save Topic</button>
				<?php endif ?>
			</form>
		</div>
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
			<?php if (empty($topics)): ?>
				<h1>No topics in the database.</h1>
			<?php else: ?>
				<table class="table">
					<thead>
						<th>N</th>
						<th>Topic Name</th>
						<th colspan="2">Action</th>
					</thead>
					<tbody>
					<?php foreach ($topics as $key => $topic): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td><?php echo $topic['name']; ?></td>
							<td>
								<a class="fa fa-pencil btn edit"
									href="topic.php?edit-topic=<?php echo $topic['id'] ?>">
								</a>
							</td>
							<td>
								<a class="fa fa-trash btn delete"								
									href="topic.php?delete-topic=<?php echo $topic['id'] ?>">
								</a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
		</div>
	</div>
</body>
</html>