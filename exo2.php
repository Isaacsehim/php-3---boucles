<?php
    $days = 1;
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <ol>
            <?php 
            
            while ($days <= 31){

                $days == 14 ? print '<li>février : Saint Valentin</li>' : print '<li>février</li>';
                $days++;
                echo '<br>';
            }
            
            ?>
    </ol>
    </body>
    </html>