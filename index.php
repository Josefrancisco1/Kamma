<?php 
session_start(); 
include("db.php");
?>
<?php
$msg = ""; 
if(isset($_POST['submitBtnLogin'])) {
	$email = trim($_POST['email']);
	$senha = trim($_POST['senha']);
	if($email != "" && $senha != "") {
		try {
			$query = "select * from `User_Details` where `email`=:email and `senha`=:senha";
			$stmt = $db->prepare($query);
			$stmt->bindParam('email', $email, PDO::PARAM_STR);
			$stmt->bindValue('senha', $senha, PDO::PARAM_STR);
			$stmt->execute();
			$count = $stmt->rowCount();
			$row   = $stmt->fetch(PDO::FETCH_ASSOC);
			if($count == 1 && !empty($row)) {
				/******************** Your code ***********************/
				$_SESSION['sess_user_id']   = $row['id'];
				$_SESSION['sess_email'] = $row['email'];
				$_SESSION['sess_name'] = $row['nome'];
				header('location:home.php');
			} else {
				$msg = "email e senha incorreta!";
			}
		} catch (PDOException $e) {
			echo "Error : ".$e->getMessage();
		}
	} else {
		$msg = "Preencha os campos obrigatório!!";
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>KammaKlub</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/util1.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="background-color: black;">
				<form class="login100-form validate-form" method="POST" style="background-color: black;">
					<span class="login100-form-title p-b-43" style="color: white;">
						KammaKlub <br>
					</span>
					<span>
						<div class="alert alert-danger" role="alert" style="color: red; background-color: #D2C77A;">
						
							<?php echo @$msg;?>
						</div>
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: andrepedro">
						<input class="input100" style="color: white;" type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100" style="color: white;">E-mail</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" style="color: white;" type="password" name="senha">
						<span class="focus-input100"></span>
						<span class="label-input100" style="color: white;">Palavra Passe</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox" style="background-color: #000;color: #000;">
						</div>
						<div>
							<a href="#" class="txt1" style="color: white;">
								esqueci senha?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submitBtnLogin" style="background-color: #D2C77A;color:black">
							Entrar
						</button>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/icons/KAMMA.png');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>