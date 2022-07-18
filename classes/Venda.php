<?php

require_once 'Conexao.php';
require_once 'Produto.php';

class Venda{
    public $id;
    public $data;
    public $hora;
    public $idcliente;
    public $cliente;
    public $valortotal;
    public $statusrecebimento;
    public $saldoreceber;
    public $saldorecebido;

    public function __construct($id = false){
        if($id){
            $this->id = $id;
            $this->carregar();
        }
    }

    public function inserir ()
    {
        $sql = "insert into venda(idcliente, cliente, valortotal, statusrecebimento, saldoreceber, saldorecebido) values (:idcliente, :cliente, :valortotal, :statusrecebimento, :saldoreceber, :saldorecebido)";

        $conexao = Conexao::getConexao();

        $ps = $conexao->prepare($sql);
        $ps->bindValue(':idcliente', $this->idcliente);
        $ps->bindValue(':cliente', $this->cliente);
        $ps->bindValue(':valortotal', $this->valortotal);
        $ps->bindValue(':statusrecebimento', $this->statusrecebimento);
        $ps->bindValue(':saldoreceber', $this->saldoreceber);
        $ps->bindValue(':saldorecebido', $this->saldorecebido);

        $resultado = $ps->execute();
        if($resultado == 0){
            throw new Exception("Erro ao inserir registro.");
            return false;
        }

        $msg = "ERRO AO INSERIR VENDA";
            header("location: venda-listar.php?mensagem={$msg}");
        return true;
    }

    public function carregar(){
        $sql = "select * from venda where id = {$this->id}";
        $conexao = Conexao::getConexao(); // Os dois pontos são utilizadas caso a função seja STATIC
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            $this->id = $linha['id']; 
            $this->data = $linha['data']; 
            $this->hora = $linha['hora'];
            $this->idcliente = $linha['idcliente'];
            $this->cliente = $linha['cliente'];
            $this->valortotal = $linha['valortotal'];
            $this->statusrecebimento = $linha['statusrecebimento'];
            $this->saldoreceber = $linha['saldoreceber'];
            $this->saldorecebido = $linha['saldorecebido'];
        }
    }

    public function listar()
    {
        $sql = "select * from venda order by id";
        $conexao = Conexao::getConexao(); // Os dois pontos são utilizadas caso a função seja STATIC
        $resultado = $conexao->query($sql);
        return $resultado->fetchAll();
        
    }

    public function excluir(){
        $sql = "delete from venda where id = {$this->id}";
        $conexao = Conexao::getConexao();
        $conexao->exec($sql);

        header("location: produto-listar.php");
    }

    public function atualizar(){
        $sql = "update venda
                    set idcliente = '{$this->idcliente}',
                        cliente = '{$this->cliente}',
                        statusrecebimento = '{$this->statusrecebimento}',
                        saldorecebido = '{$this->saldorecebido}'
                where id = {$this->id}";
        $conexao = Conexao::getConexao();
        $conexao->exec($sql);
        header('location: venda-listar.php'); //Redirecionamento após atualizar - após clicar no botão salvar

    }

    public function atualizarVenda($id, $quant){

        $sqlListar = "select * from produto where id = {$id}";
        $conexao = Conexao::getConexao(); // Os dois pontos são utilizadas caso a função seja STATIC
        $resultado = $conexao->query($sqlListar);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            $this->quantidade = $linha['quantidade'];
        }

        if($this->quantidade >= $quant && $quant > 0){
            $quantPosVenda = $this->quantidade - $quant;

            $sql = "update produto
                        set quantidade = '{$quantPosVenda}'
                    where id = {$id}";
            $conexao = Conexao::getConexao();
            $conexao->exec($sql);

            $msg = "Estoque atualizado com sucesso.";
            header("location: produto-listar.php?mensagem={$msg}");
        } else {
            $msg = "ERRO: Produtos insuficientes em estoque. <br> Quantidade do produto em estoque: {$this->quantidade}.";
            header("location: produto-vendas-teste.php?mensagem={$msg}");

        }
    }

    
}