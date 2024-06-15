<?php
	// Thiết lập chế độ session
	session_start();
	// Lưu dữ liệu vào session
	$_SESSION["lastname"] = $_GET["lastname"];
	echo(1);
?>