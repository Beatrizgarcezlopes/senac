<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dia dos Namorados</title>
    </head>
    <body>
        <?php
        //conectar banco de dados
        $caminho_banco = 'bdloja.db';
        $pdo = new PDO ("sqlite:" . $caminho_banco);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMORE_EXCEPTION);
        echo "Conexão com o banco de dados sqlite está realizada !! <br>     
        
        ?>
    </body>
</html>
