<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Escola de Música</title>
    </head>
    <body>
<center><h1> Cadastro do Aluno </h1></center>
<form = method="post">
<div>
<label for="fcod">Código: </label>
<input type="text" id="codigo" name="codigo" />
</div>
<br> 
<div>
<label for="fname">Nome: </label>
<input type="text" id="nome" name="nome" />
</div>
<br> 
<div>        
<label for="femail">E-mail: </label>
<input type="email" id="email" name="email" />
</div>
<br>  
<div>
<label for="ffone">Fone: </label>
<input type="fone" id="fone" name="fone"/>
</div>
<br>
 

<div class="button">
<button type="submit">Cadastrar</button>
</div>
<div class="button">
<button type="reset">Limpar</button>
</div>
</form>  
 
   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST"){

     $codigo = $_POST["codigo"];
     $nome = $_POST["nome"];
     $email = $_POST["email"];
     $fone = $_POST["fone"];
     echo "<h1> Dados do Alunos </h1>";
     echo "Nome:  $nome <br>";
     echo "E-mail: $email <br>";
     echo "Fone: $fone <br>";

     }
 
        ?>
    </body>
</html>
