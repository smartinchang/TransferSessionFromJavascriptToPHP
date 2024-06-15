<!DOCTYPE html>
<?php
	// Thiết lập chế độ session
	session_start();
?>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title>Thử nghiệm truyền session giữa Javascript với PHP</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
		<script>
			// Hàm lưu dữ liệu vào session
			function sessionSave() {
				var sessionSaveRequest = new XMLHttpRequest();
				sessionSaveRequest.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						if (sessionSaveRequest.responseText == "1") {
							alert("Đã lưu dữ liệu vào session");
						}
					}
				};
				sessionSaveRequest.open("GET", "sessionSave.php?lastname=Smith", true);
				sessionSaveRequest.send();				
			}
		</script>
	</head>
	<body>
		<div class="container">
		<h3>Truyền session giữa Javascript với PHP</h3>
		<hr>
		<button type="button" class="btn btn-outline-primary" onclick="sessionSave()">Lưu dữ liệu vào session</button>
		<a class="btn btn-outline-primary" href="sessionRead.php">Gọi tập tin thực thi PHP</a>
		</div>
	</body>
</html>