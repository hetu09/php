<!-- 
    +-----------------+
    |       php       |
    +-----------------+
 -->
<?php
$line=50;
$str="Php";
$n=1;
// for 1 and 3 row
function ptr($line){
   for ($i = 1; $i <= $line; $i++) 
   {  
            echo "*"; 
   }
   echo "<br>";
   }
ptr($line);
for ($i=0; $i <$n; $i++) {
   echo str_pad($str,$line,"*",STR_PAD_BOTH)."<br>";
   ptr($line); 
}
