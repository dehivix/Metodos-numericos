<?php

	if(!empty($_POST)){
		$ecuacion[0][0]= $_POST['x1']; $ecuacion[0][1]= $_POST['y1']; $ecuacion[0][2]= $_POST['c1']; $ecuacion[0][3]= $_POST['t1'];
		$ecuacion[1][0]= $_POST['x2']; $ecuacion[1][1]= $_POST['y2']; $ecuacion[1][2]= $_POST['c2']; $ecuacion[1][3]= $_POST['t2'];
	}
	
		$e1= $ecuacion[0][0];
		$e2= $ecuacion[1][0];

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
	<section id="content"><div class="inner_copy">More <a href="http://www.templatemonster.com/">Website Templates</a> at TemplateMonster.com!</div>
		<div class="container">
			<div class="inside bot-indent">
				<div id="slogan">
					<div class="inside">
						<h2><span>Método D</span>e  Reducción</h2>
						<p>Consiste en multiplicar el primer coeficiente de la segunda ecuación por la primera y el primer coeficiente de la primera ecuación con signo contrario por la segunda.</p>
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
                <center><table aling="center">
                <tr><td><h6> Ecuaci&oacute;n &nbsp; Original</h6></td>
                <td><?php echo $e2."<br />".(-1* $e1); ?></td><td></td></td><td>
				<?php
				
					#MOSTRANDO EL SISTEMA DE ECUACION ORIGINAL
					for($i=0; $i < 2; $i++){
						if($i <=0){echo $ecuacion[0][0]."X ";}else{ echo $ecuacion[1][0]."X ";}		
						if($ecuacion[$i][1] >= 0){echo " + ".$ecuacion[$i][1]."Y ";}else{echo " ".$ecuacion[$i][1]."Y ";}	
						if($ecuacion[$i][2] >= 0){echo " + ".$ecuacion[$i][2]; echo " = ".$ecuacion[$i][3];}else{echo " ".$ecuacion[$i][2]; echo " = ".$ecuacion[$i][3];}
						echo"<br />";
					}
				?>
                </td></tr>
                
                <?php    
					# IGUALANDO LOS PRIMEROS COEFICIENTES DE AMBAS ECUACIONES
					for($j=0; $j<4; $j++){
						$ecuacioni[0][$j] = $e2 * $ecuacion[0][$j];
						$ecuacioni[1][$j] = -1 * $e1 * $ecuacion[1][$j];
					}
				?>
				
                <tr><td><h6>Ecuaci&oacute;n &nbsp; Multiplicada</h6></td>
                <td><img src="img/reguccion.gif"</td>
                <td colspan="2">
                <?php	
					# MOSTRANDO  EL SISTEMA DE ECUACION YA MULTIPLICADO E IGUALADO LOS PRIMEROS COEFICIENTES DE AMBAS ECUACIONES
					for($i=0; $i < 2; $i++){
						if($i <=0){echo $ecuacioni[0][0]."X ";}else{ echo $ecuacioni[1][0]."X ";}		
						if($ecuacioni[$i][1] >= 0){echo " + ".$ecuacioni[$i][1]."Y ";}else{echo " ".$ecuacioni[$i][1]."Y ";}
						if($ecuacioni[$i][2] >= 0){echo " + ".$ecuacioni[$i][2]; echo " = ".$ecuacioni[$i][3];}else{echo " ".$ecuacioni[$i][2]; echo " = ".$ecuacioni[$i][3];}
						echo"<br />";
					}
				?></td>
                
				<?php	
					# SUMANDO ECUACIONES 1 Y 2
					for($i=0; $i<4; $i++){
						$ecuacioni[0][$i] = $ecuacioni[0][$i] + $ecuacioni[1][$i];
					}
					
					# HALLANDO Y
					$y = ($ecuacioni[0][3] + (-1 * $ecuacioni[0][2])) / $ecuacioni[0][1];
					
					#HALLANDO X
					$x = ($ecuacion[0][3] + (-1 * $ecuacion[0][2]) + (-1 * ($ecuacion[0][1] * $y))) / $ecuacion[0][0];
				?>
				<tr><td><h6>Hallada &nbsp;&nbsp; X &nbsp;&nbsp; e &nbsp;&nbsp; Y</h6></td>
                <td colspan="3">
				<?php					
					echo "<b>Y</b> = ".$y."<br />";
					echo "<b>X</b> = ".$x."<br />";
				?>
                </td></tr>
                <tr><td><h6>Comprobando &nbsp; en &nbsp la &nbsp; Ecuaci&oacute;n 1</h6></td>
                <td colspan="3">
                <?php	
					# COMPROBANDO SI X e Y SON CALCULADOS CORRECTAMENTE
					$comprobando = ($ecuacion[0][0] * $x) + ($ecuacion[0][1] * $y) + $ecuacion[0][2];
					echo $comprobando." = ".$ecuacion[0][3];
				?>
                </td></tr>
                
                </table></center>
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
