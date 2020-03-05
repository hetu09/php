<?php
//   1 to 10
    for ($i=1; $i <= 10; $i++) { 
        echo $i."<br>";
    }
    echo "<hr>";
?>
<!-- multiplication table -->
<?php
$table_no=7;
$upto=10;

for ($i=1; $i<$upto ; $i++) {
     echo "$table_no * $i =" .$table_no * $i . "<br>";
     echo "<hr>";
}
?>