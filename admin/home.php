<?php 
session_start();

?>

<?php 
					
					if(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {
						echo $_SESSION['sess_name'];
						echo "<p><a href='sair.php'>Sair</a></p>";
					} else { 
						header('location:index.php');
					}	
?>