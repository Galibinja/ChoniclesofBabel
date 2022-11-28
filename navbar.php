
<nav id="nav">
<link rel="stylesheet" href="assets/css/main.css" />
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
									
											<li><a href="home.php">Inicio</a></li>
											<li><a href="profile.php">Seu Perfil</a></li>
											<li><a href="rpgmaker.php">O RPG Maker</a></li>
										
											<?php 





											if(isset($_SESSION['role_id'])){
 									require('Conexão.php');
									if($_SESSION['role_id'] == 2){
									echo'<li><a href="veruser.php">ADM</a></li>';
										}
										else{

										}
									}

										?>
											<li><a href="logout.php">Logout</a></li>
											
											
										</ul>
                                        <div class="container_id_user">

</div>
									</div>
								</li>
                                
							</ul>
                            
						</nav>