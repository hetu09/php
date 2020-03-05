<?php
    $num1=100;
    $num2=50;
    $ans='*';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>swichcasehtml</title>
    </head>

    <body style="text-align: center;">
        <!-- *******************************************************************
         *                       Addition = 10                             *
         ******************************************************************* -->

        <div>
            <pre>*******************************************************************</pre>
            <?php switch ($ans) : case '+': ?>
            <pre>*                           Addition : <?= $num1 + $num2 ?>                        *</pre>
            <?php break ; case '-' ;?>
            <pre>*                           Substraction : <?= $num1 - $num2 ?>                     *</pre>
            <?php break ; case '*' ;?>
            <pre>*                           Multiplication : <?= $num1 * $num2 ?>                 *</pre>
            <?php break ; case '/' ;?>
            <pre>*                           Division : <?= $num1 / $num2 ?>                          *</pre>
            <?php break; default: ?>
            <p>Invalid Choice</p>

            <?php endswitch; ?>
            <pre>*******************************************************************</pre>

        </div>
    </body>

    </html>