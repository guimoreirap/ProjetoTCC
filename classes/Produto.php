<?php

require_once 'Conexao.php';

class Produto{
    public $id;
    public $nome;
    public $descricao;
    public $valordecusto;
    public $valordevenda;
    public $quantidade;

    public function __construct($id = false){
        if($id){
            $this->id = $id;
            $this->carregar();
        }
    }

    public function inserir ()
    {
        $sql = "insert into produto(nome, descricao, valordecusto, valordevenda, quantidade) values (:nome, :descricao, :valordecusto, :valordevenda, :quantidade)";

        $conexao = Conexao::getConexao();

        $ps = $conexao->prepare($sql);
        $ps->bindValue(':nome', $this->nome);
        $ps->bindValue(':descricao', $this->descricao);
        $ps->bindValue(':valordecusto', $this->valordecusto);
        $ps->bindValue(':valordevenda', $this->valordevenda);
        $ps->bindValue(':quantidade', $this->quantidade);

        $resultado = $ps->execute();
        if($resultado == 0){
            throw new Exception("Erro ao inserir registro.");
            return false;
        }
        return true;
    }

    public function carregar(){
        $sql = "select * from produto where id = {$this->id}";
        $conexao = Conexao::getConexao(); // Os dois pontos são utilizadas caso a função seja STATIC
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            $this->nome = $linha['nome']; 
            $this->descricao = $linha['descricao']; 
            $this->valordecusto = $linha['valordecusto'];
            $this->valordevenda = $linha['valordevenda'];
            $this->quantidade = $linha['quantidade'];
        }
    }

    public function listar()
    {
        $sql = "select * from produto order by nome";
        $conexao = Conexao::getConexao(); // Os dois pontos são utilizadas caso a função seja STATIC
        $resultado = $conexao->query($sql);
        return $resultado->fetchAll();
        
    }

    public function excluir(){
        $sql = "delete from produto where id = {$this->id}";
        $conexao = Conexao::getConexao();
        $conexao->exec($sql);

        header("location: produto-listar.php");

    }

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

    public function atualizarVenda($id, $quant){

        $sqlListar = "select * from produto where id = {$id}";
        $conexao = Conexao::getConexao(); // Os dois pontos são utilizadas caso a função seja STATIC
        $resultado = $conexao->query($sqlListar);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            $this->quantidade = $linha['quantidade'];
        }

        if($this->quantidade >= $quant){
            $quantPosVenda = $this->quantidade - $quant;

            $sql = "update produto
                        set quantidade = '{$quantPosVenda}'
                    where id = {$id}";
            $conexao = Conexao::getConexao();
            $conexao->exec($sql);

            $msg = "Estoque atualizado com sucesso.";
            header("location: produto-listar.php?mensagem={$msg}");
        } else {
            $msg = "Produtos insuficientes em estoque. <br> Quantidade do produto em estoque: {$this->quantidade}.";
            header("location: produto-vendas-teste.php?mensagem={$msg}");

        }
    }
}