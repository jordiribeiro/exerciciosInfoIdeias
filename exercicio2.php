<?php

function PrimoInferior($n){
	$numeros=array();
	if($n < 0){
		return 0;
	}
	else{
		for($x=0;$x<$n;$x++){	
			$c=0;
			for($j=0;$j<$n;$j++){
				if($x%($j+1)==0){
					$c=$c+1;
				}
			}
			if($c==2){
				$temp=$x;
				array_push($numeros,$temp);
				$temp=0;
			}
		}
	
	}
	echo $numeros[array_search(max($numeros),$numeros)];
}
	
		

echo PrimoInferior(10);
#echo PrimoInferior(30);

		
		
?>
