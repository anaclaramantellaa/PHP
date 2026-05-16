<?php
require_once('Cliente.php');
require_once('Produto.php');

    $cliente = new Cliente("AnaBanana", "ana@gmail.com", "439999999");
    //$cliente->nome = "Ana";
    //$cliente->email = "ana@gmail.com";
    //$cliente->telefone = "43999999999";

    echo "Nome: ".$cliente->nome."<br>";
    echo "Email: ".$cliente->email."<br>";
    echo "Telefone: ".$cliente->telefone."<br>";

    $produto = new Produto();
    $produto->nome = "Teclado";
    $produto->preco = 199.99;

    echo $produto->exibirResumo();
    echo "Desconto: ".$produto->calcularDesconto(10);
    
?>