<?php

$satir=$_GET["satir"];
$sutun=$_GET["sutun"];
echo"<table border=1>\n";
for ($i=1; $i <=$satir; $i++) {
    echo"\t<tr>\n";
    for ($t=1; $t<=$sutun ; $t++) { 
        $r=rand(0,255);
        $g=rand(0,255);
        $b=rand(0,255);
        echo" \t\t<td class=phptablo style=background-color:rgb($r,$g,$b);>$i-$t</td>\n";
    }
   echo "\t</tr>\n";
}
echo "</table>\n";
?>


