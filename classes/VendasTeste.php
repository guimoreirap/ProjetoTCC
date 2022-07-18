<?php

require_once ('Conexao.php');


class Vendas{
    public $id;
    public $quantidade;
    
    public function atualizar(){
        $sql = "update produto
                    set nome = '{$this->nome}',
                        descricao = '{$this->descricao}',
                        valordecusto = '{$this->valordecusto}',
                        valordevenda = '{$this->valordevenda}',
                        quantidade = '{$this->quantidade}'
                where id = {$this->id}";
        $conexao = Conexao::getConexao();
        $conexao->exec($sql);
        header('location: produto-listar.php'); //Redirecionamento após atualizar - após clicar no botão salvar

    }

    public function itensVendidos($id, $quantVenda)
    {
        $conexao = mysqli_connect("localhost", "root", "", "tcc");
        $query = "SELECT * FROM produto WHERE id = '{$id}'";
        $result = mysqli_query($conexao, $query) /*or die(mysqli_error($this->conexao))*/;

        if($result){

            if($row = mysqli_fetch_array($result))
            {
                $quantidadeEstoque = $row['quantidade'];

                if($quantidadeEstoque >= $quantVenda)
                {
                    $novoQuantidade = $quantidadeEstoque - $quantVenda;

                    $this->query = "UPDATE produto SET quantidade = '{$novoQuantidade}' WHERE id = 9";
                    if($result = mysqli_query($conexao, $query))
                    {
                        echo 'Venda efetuada';
                    } else {
                        echo 'Venda não efetuada';
                    }
                } else 
                {
                    echo 'Quantidade maior do que em estoque! </br> Quantidade em estoque disponivel: ' .$quantidadeEstoque;
                }
            }



        } else {
            header("location: produto-vendas-teste.php");
        }
    }
    
}