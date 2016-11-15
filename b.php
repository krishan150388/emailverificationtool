<?php

class GetData{



function dat($naam){
echo "<pre>";

//echo "*************verificaiton*****************<br>";

exec("vrfy -vvv ".$naam,$verfy);

echo "<b><span style='color:green;'>";
$versz = sizeof($verfy);


for($j=0; $j < $versz; $j++){
echo $verfy[$j]."<br>";
}

echo "</span></b>";



list($a,$b) = explode("@",$naam);
exec("nslookup -type=mx ".$b,$output);


echo "<br>";
echo "<b><span style='color:blue;'>";
//print_r($output);

$size = sizeof($output);

for($i=0; $i <$size;$i++){
//echo $output[$i]."<br>";

if (preg_match('(spam|mx|protected)',$output[$i])==1){
echo "<span style='color:red;'>";
echo $output[$i]."<br>";
echo "</span>";
}else{

echo $output[$i]."<br>";

}

}
echo "</span></a>";






// end of dat function
}

}

