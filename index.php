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
        <form method ="post">
            <h1>Tabuada </h1>   
            <label for ="fname">Número:</label><br>
            <input type ="text" id ="numero" name ="numero" value =""><br>
            <input type ="submit" value =" Enviar">
        </form>
     
        <?php
        //Comando de Repetição
        //Tabuada
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $num = $_POST["numero"];
          echo "<h1>Tabuada do $num</h1>";
          for($i = 0; $i<=10;$i++){
             $r = $i*$num;
             echo "$i X $num = $r";
             echo "<br>";
           }
        }
        ?>
    </body>
</html>
