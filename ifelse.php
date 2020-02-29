<?php 
// find the greater one 
$a=10;
$b=20;
$c=30;

if ($a>$b) {
    if ($a > $c ) {
        echo "a $a is greater!!";
    }
    else{
        echo "c $c is greater!!";

    }
}
else{
    if ($b > $c) {
        echo "b $b is greater!!";
    }
    else{
        echo "c $c is greater!! <br>";

    }
}
// find employee gross salary

$basic_sal1=10000;
$da;
$hra;
$gross_sal;

if (10000 >= $basic_sal1) {
     $da = $basic_sal1 * .8;
     $hra = $basic_sal1 * .2;
}
elseif (20000 >= $basic_sal1) {
    $da= $basic_sal1 * .9;
    $hra = $basic_sal1 * .25;
}
else {
    $da= $basic_sal1 * .95;
    $hra= $basic_sal1 * .3;
}

$gross_sal=$basic_sal1+$da+$hra;
echo "employee gross salary is $gross_sal!!";

?>