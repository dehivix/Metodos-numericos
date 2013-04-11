<?php
	function newton($x){
		$r= $x - ((cos($x * (3.14/180)) - pow($x,3)) / (-sin($x * (3.14/180)) - 3 * pow($x,2)));
		return $r;
	}

	function gauss($a,$b){
		$r = (-1 * $b) / $a;
		return $r;
	}

	
	function fx0($a){
		$r = (5 * $a + cos($a) - exp($a));
		return $r;
	}
	
	function fx1($b){
		$r = (5 * $b + cos($b) - exp($b));
		return $r;
	}



function calf($x){

	$rad=3.14/180;
	
	//$r= cos(($x * $rad)) - pow($x,3);
	
	$r= pow($x,3)+6*(pow($x,2))+(2*$x)+8;
	//$r=pow($x,2)+$x-12;
	//$r=3*$x+sin(($x * $rad)) - exp($x);
	//$r=exp(-$x) - log($x);
	//$r= pow($x,10) - 1;
	//$r= exp($x) - 3*(pow($x,2));
	return $r;
}

function fmed($x,$y){
	$fm=($x + $y) / 2;
	return $fm;
}

function posneg($x){
	if ($x > 0){ 
	   $p=true;
	}else{
	   $p=false;
	}
return $p;
}

?>

