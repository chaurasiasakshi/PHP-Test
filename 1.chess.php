<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess</title>
</head>
<body>
    <table border="4px">
        <?php for($i=1;$i<=8;$i++)
        { ?>
      
    <tr >
    <?php for($j=1;$j<=8;$j++)
    { ?>
    
    <?php if(($i+$j)%2==0)
    { ?>
    
    <td style="padding: 30px; background-color:black;"></td>

   <?php }
   else 
   { ?>
    <td style="padding:30px"></td>
   
    <?php } ?>
    <?php } ?>
</tr>
    <?php } ?>
    </table>
</body>
</html>

<?php

?>
