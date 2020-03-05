<?php
$table_no=2;
$upto=10;
$ans=0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>forloop</title>
</head>

<body>
    <div>
        <table border=1>
            <tr>
            <?php for ($i=1; $i <= $upto ; $i++) : ?>
                <tr>
               <td><?= $table_no ?></td>
               <td>*</td>
               <td><?= $i ?></td>
               <td>=</td>
               <td><?php $ans=$table_no * $i ;
                echo "$ans"; ?></td> 
               </tr>
            <?php endfor;?>
            </tr>
        </table>
    </div>
</body>

</html>