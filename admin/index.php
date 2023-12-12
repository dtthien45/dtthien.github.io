<?php
session_start();
if (isset($_SESSION['admin'])) {
	header('location:home.php');
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login | Hệ thống quản lý nhân sự</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'includes/header.php'; ?>
</head>

<body>
	<div class="error-pagewrap">
		<div class="error-page-int">
			<img src="../img/logo/the monkey logo.png" height= "300px" width = 300px alt="" />
			</br>
			<div class="text-center m-b-md custom-login">
				<h4>HỆ THỐNG QUẢN LÝ NHÂN SỰ</h3>
			</div>
			<div class="content-error">
				<div class="hpanel">
					<div class="panel-body">
						<form action="login.php" method="POST">
							<div class="form-group">
								<div class="form-group has-feedback">
									<label class="control-label" for="username">Tài khoản <span style="color:red">*</span></label>
									<input type="text" placeholder="Nhập tên tài khoản" name="admin_name" id="username"
										class="form-control" autofocus value="<?php if(isset($_COOKIE["admin_login"])) { echo $_COOKIE["admin_login"]; } ?>"/>
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
								</div>


							</div>
							<div class="form-group has-feedback">
								<label class="control-label" for="password">Mật khẩu <span style="color:red">*</span></label>
								<input type="password" placeholder="Nhập mật khẩu" name="admin_password" id="password"
									class="form-control" value="<?php if(isset($_COOKIE["admin_password"])) { echo $_COOKIE["admin_password"]; } ?>" />
								<span class="glyphicon glyphicon-lock form-control-feedback"></span>
								<input type="checkbox" name="remember" id="remember" style="margin-top: 15px;"> Nhớ tài khoản 
							</div>

							<button type="submit" class="btn btn-success btn-block loginbtn" name="login">Đăng
								nhập</button>


						</form>
					</div>

					<?php
					 
					if (isset($_SESSION['error'])) {
						echo "<div class='callout callout-danger text-center mt20'>
							  		<p>" . $_SESSION['error'] . "</p> 
							  	</div>
							";
						unset($_SESSION['error']);
					}
					?>
				</div>
			</div>
			<div class="text-center login-footer">
				<p> </p>
        <p> ©Bản quyền thuộc về Nhóm 16 - ISD </p>
      </div>
		</div>
	</div>
	<?php include 'includes/footer.php'; ?>
</body>

</html>