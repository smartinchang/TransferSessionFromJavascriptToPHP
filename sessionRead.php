<!DOCTYPE html>
<?php
	// Thiết lập chế độ session
	session_start();
?>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title>Kết quả thử nghiệm truyền session giữa Javascript với PHP</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		<div class="container">
		<h3>Kết quả truyền session giữa Javascript với PHP</h3>
		<hr>
		<?php
			echo('Kết quả được truyền qua session: ' . $_SESSION["lastname"]);
		?>
		<hr>
		<a class="btn btn-outline-primary" href="index.php">Quay về trang nhập liệu</a>
		</div>
	</body>
</html>