<?php
// count data in array
$data=array(1,"ahana","ambani","bombay","female","mumbai","maharashtra","maharashtra",385001,"bca","ahana@gmail.com",'2019-03-02',9856456345,'2020-01-18 11:50:22');

for ($i=0; $i <count($data); $i++) { 
     $data[$i]."<br>";
}

var_dump($data)."<br>";    

// foreach

foreach($data as $k => $v){
    echo "$k=>$v<br>";
}


?>