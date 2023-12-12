<?php
session_start();
include 'includes/conn.php';

if (isset($_POST['login'])) {
	$username = trim($_POST['admin_name']);
	$password = $_POST['admin_password'];

	if ($username == '' || $password == '') {
		$_SESSION['error'] = 'Vui lòng nhập đủ thông tin tài khoản và mật khẩu';
	} else {


		$sql = "SELECT * FROM admin WHERE username = '$username'";
		$query = $conn->query($sql);

		if ($query->num_rows < 1) {
			$_SESSION['error'] = 'Không tìm thấy tên người dùng';
		} else {
			$row = $query->fetch_assoc();
			if (password_verify($password, $row['password'])) {

				$_SESSION['admin'] = $row['id'];
				if (!empty($_POST["remember"])) {
					setcookie("admin_login", $username, time() + (10 * 365 * 24 * 60 * 60));
					setcookie("admin_password", $password, time() + (10 * 365 * 24 * 60 * 60));
					$_SESSION["admin_name"] = $username;
				} else {
					if (isset($_COOKIE["admin_login"])) {
						setcookie("admin_login", "");
					}
					if (isset($_COOKIE["admin_password"])) {
						setcookie("admin_password", "");
					}
				}


			} else {
				$_SESSION['error'] = 'Sai mật khẩu';
			}
		}
	}
} else {
	$_SESSION['error'] = 'Vui lòng nhập tên tài khoản và mật khẩu';
}

header('location: index.php');


?>