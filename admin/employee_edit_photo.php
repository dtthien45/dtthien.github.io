<?php
	include 'includes/session.php';

	if(isset($_POST['upload'])){
		$empid = $_POST['id'];
		$filename = $_FILES['photo']['name'];
		$filetype = $_FILES['photo']['type'];

		$allowed_types = array('image/png', 'image/jpeg', 'image/gif'); // Add more file types if necessary

		if(!empty($filename) && in_array($filetype, $allowed_types)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../img/profile/'.$filename);	
		}
		else{
			$_SESSION['error'] = 'Vui lòng chọn tệp hình ảnh hợp lệ (PNG, JPEG, GIF).';
			header('location: employee.php');
			exit();
		}
		
		$sql = "UPDATE employees SET photo = '$filename' WHERE id = '$empid'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Cập nhật thành công';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Vui lòng chọn nhân viên để sửa.';
	}

	header('location: employee.php');
?>