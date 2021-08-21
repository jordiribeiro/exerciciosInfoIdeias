<?php
$ano=1;

function SECULOANO($ano){
	if($ano == 1){
		return 1;
	}
	elseif($ano < 1){
		return null;
	}
	else{
	  return round((($ano-2)/100)+1,0);
	}
}

echo "Seculo".SECULOANO(1);
echo "\n";

echo "Seculo".SECULOANO(2021);
echo "\n";

echo "Seculo".SECULOANO(1901);


?>
