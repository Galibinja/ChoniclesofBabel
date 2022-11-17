<?php session_start();
if(!$_SESSION['logado']){
    echo "<script>alert('Ambiente restrito. Favor fazer login para acessar.');window.location='index.php'</script>";
}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>The Chronicles of Babel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="icon" type="image/png" href="images/icons/trofeu.png"/>
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing is-preload">


			<div id="page-wrapper">

					<header id="header" class="alt">
						<h1><a href="home.html">The Chronicles of Babel</a></h1>
						<?php
							include("navbar.php")
                           
						?>
					</header>
 

					<section id="banner">
						<div class="inner">
							<h2>The Chronicles of Babel</h2>
							<p>Este é um jogo direcionado para pessoas que<br />
							queiram adiquirir um interesse pelo inglês de uma forma simples e divertida<br />
							criado por  <a href="https://www.instagram.com/gabrel_mls/">Gabriel Madeira</a>.</p>
							<ul class="actions special">
								<li><a href="Game/index.html" class="button primary">Jogar</a></li>
							</ul>
						</div>
						<a href="#one" class="more scrolly">Saiba Mais</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>Ferramentas usadas para a Criação do Projeto:</h2>
								<p>Para a criação do projeto foi usado o programa RPGMaker MV juntamente com  as seguintes linguagens: <br>
								JavaScript, Html5, SQL, PHP e CSS</p>
							</header>
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/rpgmv2.png" alt="" /></div><div class="content">
								<h2>O Mapa:</h2>
								<p>O mapa do Jogo e suas animações foram totalmente desenhados por meio do RPG Maker MV. <br> As iluminações e o ciclo de dia e noite foram feitos atravez de plug-ins.</plug-ins></p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/faces.png" alt="" /></div><div class="content">
								<h2>Os Personagens:</h2>
								<p>Os personagens tambem foram criados ultilizando o banco de dados do RPG Maker.<br> Varias faces com expressões diferentes foram ultilizadas para dar mais vida a cada personagem.<br>Cada personagem tem aparencia e detalhes unicos criados cuidadosamente com o objetivo de maior imersão no Game</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/tabula.jpg" alt="" /></div><div class="content">
								<h2>A Historia:</h2>
								<p>A Historia de Chronicles of Babel foi escrita cuidadosamente esperando assim encantar o jogador com o mundo e ses misterios<br> A Historia contada é dividida em capitulos assim como um livro:
								<br> Os capitulos disponiveis para a DEMO serão os capitulos I II e III<br> Os mesmos se passarão em um mundo ficticio com cidades medievais e modernas , florestas magicas e  montanhas parigosas.  </p>
							</div>
						</section>
					</section>

				

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; The Chronicles of Babel</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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

	</body>
</html>