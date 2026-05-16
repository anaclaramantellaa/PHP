<?php
    class Produto{
        public string $nome;
        public float $preco;

        //método que retorna string
        public function exibirResumo(): string{
            return "-Produto: {$this->nome} <br>-Preço: {$this->preco} <br>";
        }
            //métodos com parametros
    public function calcularDesconto(float $percentual): float{
            $desconto = ($this->preco * $percentual) / 100;
            return $this->preco - $desconto;
        }
    }
?>