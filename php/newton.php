<?php

	require("funciones.php");
	if (!empty($_POST)){
		$valor = $_POST ['valor'];
		
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Dehivis Perez</title>
<meta name="description" content="Place your description here">
<meta name="keywords" content="put, your, keyword, here">
<meta name="author" content="dehivix" >
<meta charset="utf-8">
<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-replace.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_600.font.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
 <![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page3">
<div class="tail-top2">
<!-- header -->
	<header>
		<div class="container">
			<div class="header-box">
				<div class="left">
					<div class="right">
						<nav>
							<ul>
								<li><a href="#">Prof:</a></li>
								<li class="current"><a href="#">Dessire</a></li>
								<li><a href="#">Blanco</a></li>
							</ul>
						</nav>
						<h1><a href="../index.html"><span>Métodos</span>Numéricos</a></h1>
					</div>
				</div>
			</div>
			
		</div>
	</header>
	<!-- content -->
	<section id="content"><div class="inner_copy">More <a href="">Website Templates</a> at TemplateMonster.com!</div>
		<div class="container">
			<div class="inside bot-indent">
				<div id="slogan">
					<div class="inside">
						<h2><span>Método D</span>e Newton</h2>
						<p>Es un algoritmo para encontrar aproximaciones de los ceros o raíces de una función real; tambien puede ser usado para encontrar el maximo o minimo de una función, encontrando los ceros de su primera derivada.</p>		
               	</div>
				</div>
				<h2 class="extra">Resultados</h2>
				<div class="box extra">
					<div class="border-right">
						<div class="border-bot">
							<div class="border-left">
								<div class="left-top-corner1">
									<div class="right-top-corner1">
										<div class="right-bot-corner">
											<div class="left-bot-corner">
												<div class="inner">
																	<article class="col-1 indent">
					<br /><br /><br /><br /><br /><br />
                <center>
                	<?php
							echo "<table >";
							for($i = 0; $i < 4; $i++){
								echo "<tr><td><h1>Valor Inicial: ".$valor."</h1></td></tr><br/>";
								$valor = newton($valor);
									
							}
								echo "</table>";
					?>
                </center>
					</article>
																	<div class="clear"></div>
																</div>
															</div>
														</div>
													</div>
													
																				<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- aside -->
<aside>
	<div class="container">
		<div class="inside">
			
						<h1><span>   Creado por:   </span>    "Dehivis Pérez" <span>  Cédula:   </span>"20.363.511" <span>  Sección:   </span>"1"</h1>
							
						
		</div>
	</div>
</aside>
<!-- footer -->
<footer>

	<div class="container">
		<div class="inside">
			</div>
	</div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>