<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PET SHOP </title>
    </head>
    <style>
        form {
        /* Apenas para centralizar o form na página*/
        margin: 0 auto;
        width: 400px;
        /* Para ver as bordas do formulário*/
        padding: 1em;
        border: 1px solid#CCC;
    }
     form div+div {
        margin-top: 1em;
     }
     label {
        /*Para ter certeza que todas as labels tem o mesmo tamanho e estão propriamente alinhadas*/
        display: inline-block;
        width: 90px;
        text-align: right;
     }
     input, textarea {
        /*Para certificar que todos os campos tem as mesmas configurações de fonte. Por padrão, textareas devem ter uma fonte monospace */
        font:1em sans-serif;
        /*Para dar o mesmo tamanho a todos os campos de texto*/
        width: 300px;;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        /*Para harmonizar o look & feel das bordas nos campos de texto*/
        border: 1px solid #999
     }
     input:focus, textarea:focus {
        border-color: blue;
     }
     textarea{
      /*Para alinhar corretamente os campos de texto de várias linhas com sua label*/
      vertical-align: top;
      /*Para dar espaço suficiente para digitar algum texto*/
      height: 5em;
      /*Para permitir aos usuários redimensionarem qualquer textarea verticalmente.
      Ele não funciona em todos os browsers*/
      resize: vertical;
     }
	 h1 {
		 font-family : arial;
		 font-size: 30px;
		 color: brown;
	 }

    </style>
    <body>
        <form method ="post">
         <h1>Venda de Produtos</h1>  
         <label for ="fname">Nome do Pet:</label><br>
         <input type ="texto" id = "nome" name = "nome" value =""><br>
         <label for ="fname">Dono:</label><br>
         <input type ="texto" id = "dono" name = "dono" value =""><br>
         <label for ="fname">Vacinação</label><br>
         <input type ="texto" id = "vacina" name = "vacina" value ="20.00"><br>
         <label for ="fname">Ração:</label><br>
         <input type ="texto" id = "racao" name = "racao" value ="15.00"><br>
         <input type = "submit" value ="Calcular">   
        </form>    
        <?php
        // Váriaveis
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
          $pet = $_POST ["nome"] ;
          $dono = $_POST ["dono"] ;  
          $vacinacao = $_POST ["vacina"] ;  
          $racao = $_POST ["racao"] ; 
          echo "<h1>PDV</h1>";
          //Cálculo
          $vlrtotal = $vacinacao+$racao;
          //Escreva na Tela
          echo "o valor da vacinação que é $vacinacao junto com a da ração que é $racao custa R$ $vlrtotal <br>";
          echo "Valor Total é igual a R$ $vlrtotal"; 
        }
        ?>
    </body>
</html>
