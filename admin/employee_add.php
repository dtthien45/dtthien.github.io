<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$birthdate = $_POST['birthdate'];
		$contact = $_POST['contact'];
		$gender = $_POST['gender'];
		$position = $_POST['position'];
		$schedule = $_POST['schedule'];
		$filename = $_FILES['photo']['name'];
		$filetype = $_FILES['photo']['type'];

		$allowed_types = array('image/png', 'image/jpeg', 'image/gif'); // Add more file types if necessary

		if(!empty($filename)  && in_array($filetype, $allowed_types)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../img/profile/'.$filename);
			$file_extension = pathinfo($filename, PATHINFO_EXTENSION); // Get file extension
			$photo_type = 'image/' . $file_extension; // Create photo file type

			// Validation for file type
			if(!in_array($photo_type, $allowed_types)){
				$_SESSION['error'] = 'Vui lòng chọn tệp hình ảnh hợp lệ (PNG, JPEG, GIF).';
				header('location: employee.php');
				exit();
			}
		}
	
		//creating employeeid
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$employee_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		//
		$sql = "INSERT INTO employees (employee_id, firstname, lastname, address, birthdate, contact_info, gender, position_id, schedule_id, photo, created_on) VALUES ('$employee_id', '$firstname', '$lastname', '$address', '$birthdate', '$contact', '$gender', '$position', '$schedule', '$filename', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Thêm nhân viên thành công';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Điền vào biểu mẫu trước';
	}

	header('location: employee.php');
?>