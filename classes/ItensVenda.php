<?php

require_once 'Conexao.php';
require_once 'Produto.php';
require_once 'Venda.php';

class ItensVenda{
    public $id;
    public $idvenda;
    public $idproduto ;
    public $produto;
    public $quantidade;
    public $valortotal;

    public function __construct($id = false){
        if($id){
            $this->id = $id;
            $this->carregar();
        }
    }

    public function inserir ()
    {
        $sql = "insert into itensvenda(idcliente, cliente, valortotal, statusrecebimento, saldoreceber, saldorecebido) values (:idcliente, :cliente, :valortotal, :statusrecebimento, :saldoreceber, :saldorecebido)";

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
        $sql = "select * from itensvenda where id = {$this->id}";
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
        $sql = "select * from itensvenda order by id";
        $conexao = Conexao::getConexao(); // Os dois pontos são utilizadas caso a função seja STATIC
        $resultado = $conexao->query($sql);
        return $resultado->fetchAll();
        
    }

    public function excluir(){
        $sql = "delete from itensvenda where id = {$this->id}";
        $conexao = Conexao::getConexao();
        $conexao->exec($sql);

        header("location: produto-listar.php");
    }

    public function atualizar(){
        $sql = "update itensvenda
                    set idcliente = '{$this->idcliente}',
                        cliente = '{$this->cliente}',
                        statusrecebimento = '{$this->statusrecebimento}',
                        saldorecebido = '{$this->saldorecebido}'
                where id = {$this->id}";
        $conexao = Conexao::getConexao();
        $conexao->exec($sql);
        header('location: venda-listar.php'); //Redirecionamento após atualizar - após clicar no botão salvar

    }

    
}