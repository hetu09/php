<?php
$num1=10;
$num2=20;
$ans;
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>operators</title>
    </head>

    <body>
        <div>
            <p>**************************************************************************</p>
            <p><span>*</span>
                <span style="margin-left:230px">Addition = <?= $ans=$num1+$num2?></span>
                <span style="margin-left: 250px;">*</span>
            </p>
            <p><span>*</span>
                <span style="margin-left:230px">Substraction = <?= $ans=$num1-$num2?></span>
                <span style="margin-left: 220px;">*</span>
            </p>
            <p><span>*</span>
                <span style="margin-left:230px">Multiplication = <?= $ans=$num1*$num2?></span>
                <span style="margin-left: 205px;">*</span>
            </p>
            <p><span>*</span>
                <span style="margin-left:230px">Division = <?= $ans=$num1/$num2?></span>
                <span style="margin-left: 245px;">*</span>
            </p>
            <p>**************************************************************************</p>
        </div>
    </body>

    </html>