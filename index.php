<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-4 bg-light">Lista de Produtos</h2>

        <div class="mb-3">
            <table class="table table-secondary">
                <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Validade</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                </tr>

                <?php
                $arquivo = fopen("produtos.txt", "r");

                if ($arquivo) {
                    while (($linha = fgets($arquivo)) != false) {
                        $linha = trim($linha);

                        $dados = explode(",", $linha);

                        echo "<tr>";
                        echo "<td>" . $dados[0] . "</td>";
                        echo "<td>" . $dados[1] . "</td>";
                        echo "<td>" . $dados[2] . "</td>";
                        echo "<td>" . $dados[3] . "</td>";
                        echo "</tr>";
                    }
                    fclose($arquivo);
                }else{
                    echo "<tr><td>Erro ao abrir o arquivo!!</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>