<?php session_start();
 require('Conexão.php');
$query_accounts=mysqli_query($con,"select * from accounts where user_id=".$_SESSION["id"]);
$row=mysqli_fetch_array($query_accounts);
	
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>

		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="profile.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	</head>
		
	<body>	
	
	<header>
	<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">Chronicles of Babel</a>
</nav>
					</header>

	
	<section class="userimg">
	<div id="load_img">
					<img class="img-responsive" src="<?php echo $row['logo_url'];?>" alt="Logo">
					
				</div>
	</section>

	<section class="login">
	<div class="container align-left">
	<div class="card card text-white bg-dark p-3 center">
	<form method="post" id="perfil" action="editar_perfil.php">
  <h5 class="card-header">Dados de Usuario:</h5>
  <div class="card-body">

  <div class="form-group">
    <label for="exampleFormControlInput1">Nome de Usuario Cadastrado:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"name="username" value="<?php echo $row['username']?>" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email Cadastrado:</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="<?php echo $row['email']?>" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Senha Cadastrada:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="password" value="<?php echo $row['password']?>" placeholder="">
  </div>
  <div class="form-group">

    <input class='filestyle' data-buttonText="Logo" type="file" name="imagefile" id="imagefile" onchange="upload_image();">
  </div>
  </form>
  <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-refresh"></i> Actualizar hoja de vida</button>
  </div>
  </div>
</div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>
</html>
<script type="text/javascript" src="js/bootstrap-filestyle.js"> </script>
<script>
$( "#perfil" ).submit(function( event ) {
  $('.guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "editar_perfil.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('.guardar_datos').attr("disabled", false);

		  }
	});
  event.preventDefault();
})
</script>
<script>
		function upload_image(){
				
				var inputFileImage = document.getElementById("imagefile");
				var file = inputFileImage.files[0];
				if( (typeof file === "object") && (file !== null) )
				{
					$("#load_img").text('Cargando...');	
					var data = new FormData();
					data.append('imagefile',file);
					
					
					$.ajax({
						url: "imagen_ajax.php",        // Url to which the request is send
						type: "POST",             // Type of request to be send, called as method
						data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
						contentType: false,       // The content type used when sending data to the server.
						cache: false,             // To unable request pages to be cached
						processData:false,        // To send DOMDocument or non processed data file it is set to false
						success: function(data)   // A function to be called if request succeeds
						{
							$("#load_img").html(data);
							
						}
					});	
				}
				
				
			}
    </script>