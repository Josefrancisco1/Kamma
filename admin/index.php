<?php 
session_start(); 
include("../db.php");
?>
<?php
$msg = ""; 
if(isset($_POST['btnlogin'])) {
	$username = trim($_POST['username']);
	$senha = trim($_POST['senha']);
	if($username != "" && $senha != "") {
		try {
			$query = "select * from `login_admin` where `username`=:username and `senha`=:senha";
			$stmt = $db->prepare($query);
			$stmt->bindParam('username', $username, PDO::PARAM_STR);
			$stmt->bindValue('senha', $senha, PDO::PARAM_STR);
			$stmt->execute();
			$count = $stmt->rowCount();
			$row   = $stmt->fetch(PDO::FETCH_ASSOC);
			if($count == 1 && !empty($row)) {
				/******************** Your code ***********************/
				$_SESSION['sess_user_id']   = $row['id'];
				$_SESSION['sess_username'] = $row['username'];
				$_SESSION['sess_name'] = $row['name'];
				header('location:master/index.php');
			} else {
				$msg = "Username e senha incorreta!";
			}
		} catch (PDOException $e) {
			echo "Error : ".$e->getMessage();
		}
	} else {
		$msg = "Preencha os campos obrigatório!!";
	}
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
  	<title>Login Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body style="background-color: #eee;">
	<section class="ftco-section" >
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5"style="background-color: #007ACC;">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/bg.jpg);"></div>
		      	<h3 class="text-center mb-0">Bem vindo!</h3>
		      	<p class="text-center">Apenas pessoais autorizado pode acessa!</p>
				  <div class="text-center" style="color: red;">
							<h6><?php echo @$msg;?></h6>
						</div>
						<form action="" method="POST" class="login-form">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" class="form-control" name="username" placeholder="Nome de usuario" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" class="form-control" name="senha" placeholder="Senha" required>
	            </div>
	            <div class="form-group d-md-flex">
								<div class="w-100 text-md-right">
									<a href="../index.php" style="color: black;">Desejas voltar?</a>
								</div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="btnlogin" class="btn form-control  submit px-3"style="background-color:orange;">Acessar</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

