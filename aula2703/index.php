<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CApitulo 6</title>
</head>
<body>

    <a href="notas.php">Exemplo de Formulário PHP com arrays!!</a>
        <br>
</body>
</html>
<?php
    $frutas = array("Maçã<br>", "Banana", "Laranja");
    echo $frutas[0];

    $pessoa = array(
        "nome" => "Ana",
        "idade" => 25,
        "cidade" => "Londrina"
    );
    echo ("Nome: " .$pessoa["nome"]."<br>Idade: " .$pessoa["idade"]."<br>Cidade: " .$pessoa["cidade"]."<br>");

    $frutas = array("Maçã", "Banana", "Laranja");
    foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
    }
    echo count($frutas); //contar quantos elementos tem dentro do array

    echo("<br>");

    $alunos = array(
    array("Ana", 8.5),
    array("Carlos", 6.0),
    array("Maria", 9.2)
    );
    echo ($alunos[0][0]. "<br>");

    for ($i = 0; $i < count($alunos); $i++) {
    echo "Aluno: " . $alunos[$i][0] . " - Nota: " . $alunos[$i][1] . "<br>";
    }

    //misturar mais dados no array mesmo após a declaração (mixando)
    //push com elementos
    $nomes = array("Juquinha");
    array_push($nomes, "Sapo", "Cururu"); //adiciona posições novas no array
    print_r($nomes);

    echo("<br>");

    //push com array
    $nomes2 = array("Isadora");
    array_push($nomes2, $frutas);
    print_r($nomes2);
    echo("<br>Contagem: ". count($nomes2));

    echo("<br>");

    $valores = array(3,2,1);
    sort($valores);
    print_r($valores);

?>