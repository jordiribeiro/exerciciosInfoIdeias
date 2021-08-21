<?php
$array[];

function PrimoInferior($n){
	if($n < 0){
		return 0;
	}
	else{
		for($x=0;$x<$n;$++){	
			$c=0;
			for($j=0;$j<$n;$j++){
				if($x%($j+1)==0){
					c++;
				}
			}
			if($c==2){
				$array=array_push($x);
			}
		}
		echo $array;
	}
}


echo PrimoInferior(10);
#echo PrimoInferior(30);

		
		
?>
