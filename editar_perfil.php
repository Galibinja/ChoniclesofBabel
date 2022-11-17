<?php
session_start();
	if (empty($_POST['username'])) {
           $errors[] = "username esta vacío";
        }else if (empty($_POST['password'])) {
           $errors[] = "password esta vacío";
        } else if (empty($_POST['email'])) {
           $errors[] = "email esta vacío";
        }    else if (
			!empty($_POST['username']) &&
			!empty($_POST['password']) &&
			!empty($_POST['email']) 
			
		){
			require("Conexão.php");
		$username=mysqli_real_escape_string($con,(strip_tags($_POST["username"],ENT_QUOTES)));
		$password=mysqli_real_escape_string($con,(strip_tags($_POST["password"],ENT_QUOTES)));
		$email=mysqli_real_escape_string($con,(strip_tags($_POST["email"],ENT_QUOTES)));
		
		
		$sql="UPDATE accounts SET username='".$username."', password='".$password."', email='".$email."' WHERE user_id=".$_SESSION["id"];
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Datos han sido actualizados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?> 
					<?php
echo "<script>alert('Erro');window.location='profile.php'</script>";
						?>
			</div>
			<?php
			}
			if (isset($messages)){

				?>

						
				</div>
				<?php
			}

?>