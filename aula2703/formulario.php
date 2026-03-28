<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Formulário2703</title>
</head>

<body>
    <div class="">
        <h1>Past'ells</h1>
    </div>

    <div class="">
        <form method="post" class="">
            <div class="mb-3">
                <label for="">Nome: </label>
                <input type="text" name="nome" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Produto Principal: </label><br>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecionar item</option>
                    <option value="1">Pastel de frango</option>
                    <option value="2">Pastel de pizza</option>
                    <option value="3">Pastel de carne e queijo</option>
                    <option value="4">Pastel de queijo</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="">Tamanho do Pedido: </label><br>
                15cm <input class="form-check-input" type="radio" value="tamanho1" name="radioDefault" id="radioDefault1">
                25cm <input class="form-check-input" type="radio" value="tamanho2" name="radioDefault" id="radioDefault1">
                50cm <input class="form-check-input" type="radio" value="tamanho3" name="radioDefault" id="radioDefault1">
            </div>
            <div class="mb-3">
                <label for="">Adicionais desejados:</label>
                Milho<input class="form-check-input" type="checkbox" value="adc1" id="checkDefault"><br>
                Bacon<input class="form-check-input" type="checkbox" value="adc2" id="checkDefault"><br>
                Tomate<input class="form-check-input" type="checkbox" value="adc3" id="checkDefault"><br>
            </div>
            <div class="mb-3">
                <label for="">Quantidade: </label>
                1<input class="form-check-input" type="checkbox" value="quant1" id="checkDefault"><br>
                2<input class="form-check-input" type="checkbox" value="quant2" id="checkDefault"><br>
                3<input class="form-check-input" type="checkbox" value="quant3" id="checkDefault"><br>
            </div>
            <div class="mb-3">
                <button type="button" class="btn btn-outline-primary" disabled>Finalizar pedido</button>
            </div>

        </form>
    </div>

</body>

</html>

<?php
    $nome = $_POST["nome"];
    $pastel1 = $_POST["1"];
    $pastel2 = $_POST["2"];
    $pastel3 = $_POST["3"];
    $pastel4 = $_POST["4"];
    $tmn1 = $_POST["tamanho1"];
    $tmn2 = $_POST["tamanho2"];
    $tmn3 = $_POST["tamanho3"];
    $adc1 = $_POST["adc1"];
    $adc2 = $_POST["adc2"];
    $adc3 = $_POST["adc3"];
    $quant1 = $_POST["quant1"];
    $quant2 = $_POST["quant2"];
    $quant3 = $_POST["quant3"];

?>