<?php

require_once '../../includes/connect.php';
require_once '../../includes/function.php';
require_once '../../includes/auth.php';
$post_id = $_GET['post_id'];
$separate_post = get_post_by_id($post_id);
edit_post($connect, $post_id);
$categories = get_category($connect);
add_image($connect);

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Административная панель</title>

	<!-- Bootstrap core CSS -->
	<link href="../../css/animate.css" rel="stylesheet">
	<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../../css/blog-home.css" rel="stylesheet">

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">Административная панель</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="admin.php">Назад</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>



	<div class="container">
		<div class="row">
			<div class="col-md-12 animated delay-1s fadeIn">
				<div class="card my-4">
					<h5 class="card-header">Редактирование записи</h5>
					<div class="card-body">
						<form method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="formGroupExampleInput">Заголовок записи:</label>
								<input type="text" class="form-control" value="<?php echo $separate_post['title']; ?>" name="title"><br>
								<label for="formGroupExampleInput">Изображение:</label>
								<input type="file" class="form-control-file" value="<?php echo $separate_post['image']; ?>" name="image"><br>
								<label for="formGroupExampleInput">Категория:</label>
								<select class="form-control" name="category">
									<?php foreach($categories as $category) { ?>
										<option><?=$category["id"]?></option>
									<?php } ?>
								</select><br>
								<label for="formGroupExampleInput">Текст записи:</label>
								<textarea class="form-control" rows="10" name="text" placeholder="Текст..."><?php echo $separate_post['text']; ?></textarea>
							</div>
							<button type="submit" name="submit" class="btn btn-primary" style="float:right;">Редактировать</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>




	<footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; Тестовый блог 2019</p>
		</div>
		<!-- /.container -->
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="../../vendor/jquery/jquery.min.js"></script>
	<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>