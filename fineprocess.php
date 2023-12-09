<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $id=$_GET['id'];
        $vno=$_GET['vno'];
        $uid=$_GET['uid'];
         include_once ("dbconfig.php");

        $query1 ="DELETE FROM `rulebreak` WHERE `vehicleno`` = $vno;";
     $result=  mysqli_query($mysqli,$query1);
    $query = "UPDATE `fine` SET `finestatus` = 'paid' WHERE `userid` = $uid;";
     $result1=  mysqli_query($mysqli,$query);
     header("location:finePayment.php?id=$id");
        ?>
    </body>
</html>
