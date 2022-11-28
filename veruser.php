<?php session_start();
if(!$_SESSION['logado']){
    echo "<script>alert('Ambiente restrito. Favor fazer login para acessar.');window.location='index.php'</script>";
}
?>
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Spectral by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/rpgm.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="home.php">The Chronicles of Babel</a></h1>
						<?php
							include 'navbar.php'
                           
						?>
					</header>

				<!-- Main -->
					<article id="main">
					<div class='row'>
        <div class='col-12'>
            <div class='container'>
			<table class="table table-hover table-dark">
		   <?php 

                require("Conexão.php");

                $sql = "SELECT * FROM accounts ";

                $res = mysqli_query($con, $sql);
                
               
				 echo"<thead>
                    <tr>
                    <th scope='col'>Usuario</th>
                    <th scope='col'>Senha</th> 
                    <th scope='col'>Email</th>
                    <th scope='col'>Feedback</th>
                    <th scope='col'>Opções</th>  

 
                    </tr>
                </thead>
                <tbody>";
               
                $num_rows = mysqli_num_rows($res);
                
                if($num_rows > 0){
                    
                    while($dados = mysqli_fetch_assoc($res)){
                        
                        echo "<tr>   
                                <td>".$dados['username']."</td>
                                <td>".$dados['password']."</td> 
                                <td>".$dados['email']."</td> 
                                <td>".$dados['feedback']."</td>    
                            
                                <td>
                                <a  btn-exclui' href='excluiconta.php?cod=".$dados['user_id']."' >Excluir</a></td>           
                                </tr>";
                    }
                }else{
                    echo "<tr class='text-center'><td colspan='9'> Não há registros cadastrados! </td></tr>";
                }
                
                echo "</tbody>" ?></table>
                
           

            </div>
        </div>
    </div>
    <div>
				<!-- Footer -->
					<footer id="footer">
				
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>
</html>