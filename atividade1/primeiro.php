<!DOCTYPE html>

<html lang="pt-BR">



<head>

  <meta charset="UTF-8">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <title>PHP</title>

</head>



<body>



  <div class="titulo">

    <h1>PHP</h1>

  </div>



  <div class="formulario1">

    Resultado: <?php

          $num1 = $_GET["num1"];

          $num2 = $_GET["num2"];

          $soma = $num1 + $num2;



          if ($soma > 10) {

            $soma = $soma + 8;

          } else {

            $soma = $soma - 5;

          }

          echo $soma; ?><br>

 

    Ordem descrescente dos números digitados:

    <?php

    $n1 = $_GET["n1"];

    $n2 = $_GET["n2"];

    $n3 = $_GET["n3"];

    if($n1 > $n2 && $n1 > $n3 && $n2 > $n3){

      echo $n1 , " , " , $n2 , " , " , $n3; 

    }

    else if($n1 > $n2 && $n1 > $n3 && $n2 < $n3){

      echo $n1 , " , " , $n3 , " , " , $n2;

    }

    else if($n2 > $n1 && $n2 > $n3 && $n1 > $n3){

      echo $n2 , " , " , $n1 , " , " , $n3;

    }

    else if($n2 > $n1 && $n2 > $n3 && $n1 > $n3){

      echo $n2 , " , " , $n1 , " , " , $n3;

    }

    else if($n2 > $n1 && $n2 > $n3 && $n1 < $n3){

      echo $n2 , " , " , $n3 , " , " , $n1;

    }

    else if($n3 > $n1 && $n3 > $n2 && $n1 > $n2){

      echo $n3 , " , " , $n1 , " , " , $n2;

    }

    else if($n3 > $n1 && $n3 > $n2 && $n1 < $n2){

      echo $n3 , " , " , $n2 , " , " , $n1;

    }

    ?><br>

    <?php

    $idade = $_GET["idade"];

    $nome = $_GET["nome"];

    $genero = $_GET["genero"];

    if($idade > 18){

      echo "Nome: " , $nome , "<br>";

      echo "Gênero: " , $genero , "<br>";

      echo "Você pode se cadastrar!!" , "<br>"; 

    }

    else{

      echo "Nome: " , $nome , "<br>";

      echo "Gênero: " , $genero , "<br>";

      echo "Você não pode se cadastrar!!" , "<br>"; 

    }

    ?><br>

    <?php

    $mes = $_GET["mes"];

    switch($mes){

      case 1:"Janeiro";

        break;

      case 2:"Fevereiro";

        break;

      case 3:"Março";

        break;

      case 4:"Abril";

        break;

      case 5:"Maio";

        break;

      case 6:"Junho";

        break;

      case 7:"Julho";

        break;

      case 8:"Agosto";

        break;

      case 9:"Setembro";

        break;

      case 10:"Outubro";

        break;

      case 11:"Novembro";

        break;

      case 12:"Dezembro";

        break;

      default:" Não existe mês correspondente";

      break; 

    }

    echo "Mês: " , $mes;

    ?>

    </div>

</body>



</html>