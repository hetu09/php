<?php
    $basic_sal1=12000;
    $da = 0;
    $hra = 0;
    $gross_sal  = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifelsehtml</title>
</head>

<body>
    <div>
        <!-- find employee gross salary -->
        <table border=1>
            <tr>
                <th>salary</th>
                <th>da</th>
                <th>hra</th>
                <th>gross salary</th>
            </tr>
            <tr>
                <td><?= $basic_sal1?></td>
                <?php if (10000 >= $basic_sal1) :
                    $da= $basic_sal1 * .8;
                    $hra= $basic_sal1 * .2;
                ?>
                 <td>0.8</td>
                <td>0.2</td>
                <?php else: 
                    $da= $basic_sal1 * .95;
                    $hra= $basic_sal1 * .3;
                ?>
                 <td>0.95</td>
                <td>0.3</td>               
                <?php endif; ?>
                <td>
                    <?= $gross_sal=$basic_sal1+$da+$hra; ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>