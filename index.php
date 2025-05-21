<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Comando de Repetição
        //Tabuada
        $num = 9;
        echo "<h1>Tabuada do $num</h1>";
        for($i = 0; $i<=10;$i++){
        $r = $i*$num;
        echo "$i X $num = $r";
        echo "<br>";
        }
        
        ?>
    </body>
</html>
