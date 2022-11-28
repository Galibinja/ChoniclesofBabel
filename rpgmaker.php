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
						<header>
							<h2>O RPGMaker</h2>

						</header>
						<section class="wrapper style5">
							<div class="inner">

								<h3>O que é?</h3>
								<p>RPG Maker é um programa que permite aos usuários criar seus próprios jogos de RPG . A maioria das versões inclui um editor de mapa baseado em conjunto de blocos (conjuntos de blocos são chamados de chipsets em versões pré-XP), uma linguagem de script simples para eventos de script e um editor de batalha. <br>
								<br>Todas as versões incluem tilesets iniciais pré-fabricados, personagens e eventos que podem ser usados ​​na criação de novos jogos. Uma característica das versões para PC dos programas RPG Maker é que um usuário pode criar novos tilesets e personagens e adicionar qualquer novo gráfico que o usuário desejar.<br>

								<br>Apesar de ser voltado para a criação de videogames de RPG , o mecanismo também tem a capacidade de criar jogos de outros gêneros, como jogos de aventura, jogos baseados em histórias ou romances visuais com ajustes mínimos. </p>
								<div class="img">
<section class="d-flex justify-content-center">
<img class="d-flex justify-content-center" src="images/RPGimg.jpg" >
</section>
</div>
<hr />
<h3>Recursos do RPG Maker:</h3>
								<p>A RPG Maker MV utiliza Javascript para seus plugins – uma novidade que agradou bastante os desenvolvedores dessa plataforma, já que as versões anteriores rodavam com a linguagem Ruby.<br>

								<br>O desenvolvedor pode criar as funções desejadas na linguagem em um editor de sua preferência e depois enviá-los para a pasta de plugins. Ele também pode ativar ou desativar esses add-ons facilmente pelo Plugin Manager.<br>

								<br>Outro recurso da engine são os diversos modelos de exemplos para o usuário adaptar. Existem mais de 100 mapas, modelos para construir personagens e peças prontas para quem deseja começar a criar um jogo sem ter muito trabalho.<br>

								<br>A engine é capaz de exportar jogos com resolução de 816×624 pixels e o desenvolvedor pode optar, com um simples clique, entre os modos de visualização de batalha lateral (Side View) e frontal (Front View).</p>

								
								<div class="img">	
<section class="d-flex justify-content-center">
<img class="d-flex justify-content-center" src="images/interfacerpg.jpg" >
</section>
</div>
<hr />
<section class="ttvant">
								
								
</section>
								<section class="vantagens">
								<ul>
								<h4>Vantagens</h4>
							<li>Modelos pré-configurados de mapas, personagens e itens de cenário</li>
							<li>Gerenciador de plugins</li>
							<li>Facilidade e rapidez na criação de protótipos em comparação com outras engines</li>
							<li>Scripts em Javascript (para a versão RPG Maker MV)</li>
							</ul>
							
							<div class="img">
							<section class="d-flex justify-content-center">
<img class="d-flex justify-content-center" src="images/geradorrpg.jpg" >
</section>
</div>
							<hr />
							
								<ul>
								<h4>Desvantagens</h4>
							<li>Limitada a um só estilo de jogo</li>
							<li>Qualidade baixa dos gráficos</li>
							<li>Com exceção da versão MV, a RPG Maker produz jogos apenas para Windows</li>
							<li>Limitações na parte de física e no sistema de mensagens</li>
							<li>Gameplay e interface de usuário são limitadas: não há muitas opções para personalização</li>
							</ul>
							<div class="img">
							<section class="d-flex justify-content-center">
<img class="d-flex justify-content-center" src="images/graficosrpg.jpg" >
</section>
</div>
							<hr />
							</div>
							</section>
						</section>
					</article>

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