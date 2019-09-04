<?php
/* Done By : Dushmantha Walakulpola 
 * Resone  : Interview Task 2
 * Date    : 2019/09/04
 */


//print welcome message
echo "Welcome to task 2 of Catalyst interview\n";
echo "---------------------------------------\n";

for($i=1;$i<=100;$i++){

	//string to print
	$pstr=''; 
	//check if devisible by 3
	if(($i%3)==0) $pstr.='foo'; 
	//check if devisible by 5
	if(($i%5)==0) $pstr.='bar';
	//if pstr empty print number
	if($pstr=='') $pstr=$i;
	//place comma and space
	if($i<100) $pstr.=', ';
	
	echo $pstr;	
}
