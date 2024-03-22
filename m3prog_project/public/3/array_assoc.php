<?php
$weer = ['maandag' =>11,
 'dinsdag' => 15,
 'woensdag' => 16,
 'donderdag' => 17,
 'vrijdag' => 18,
 'zaterdag' => 19,
 'zondag'=>20];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table>
 <tr>
    <th>dag</th>
    <th>graden</th>
 </tr>
    <?php 
        foreach($weer as $dag => $graden)
        {
    ?>
        <tr>
            <td> 
                <?php echo $dag; ?>
            </td>
            <td>
                 <?php echo $graden; ?>
            </td>
        </tr>
        <?php 
        }
        ?>
</table>
<?php $weer = "maandag"; ?>
<p> vandaag  <?= $weer;?> is het 11 graden</p>
</body>
</html>