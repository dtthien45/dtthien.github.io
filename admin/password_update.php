<?php
	include 'includes/session.php';

	if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'home.php';
	}

	if(isset($_POST['save'])){
		$password_old = $_POST['pass_old'];
		$password = $_POST['pass_new'];
		
		if(password_verify($password_old, $user['password'])){
			
			if($password == $user['password']){
				$password = $user['password'];
			}
			else{
				$password = password_hash($password, PASSWORD_DEFAULT);
			}

			$sql = "UPDATE admin SET password = '$password' WHERE id = '".$user['id']."'";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Đổi mật khẩu thành công!';
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
			
		}
		else{
			$_SESSION['error'] = 'Sai mật khẩu';
		}
	}
	else{
		$_SESSION['error'] = 'Vui lòng điền đầy đủ thông tin.';
	}

	header('location:'.$return);

?>