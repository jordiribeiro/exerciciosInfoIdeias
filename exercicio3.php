<?php

function PrimoInferior(){
	/*
		Popular Array
	*/
	$numeros=array();
	$resposta=array();
	for($x=0;$x<=20;$x++){
		array_push($numeros,random_int(0,10));
	}
	$resposta=array_count_values($numeros);
	
	$valfinal=array_search(max($resposta),$resposta);
	$valfinalvezes=max($resposta);
	
	echo " O numero que mais se repete eh ".$valfinal."\n";
	echo "Ele se repete ".$valfinalvezes." vezes";
}


PrimoInferior();

		
		
?>
