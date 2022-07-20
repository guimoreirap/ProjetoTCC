<?php

require_once 'Conexao.php';
require_once 'Produto.php';
require_once 'Venda.php';

class ItensVenda{
    public $id;
    public $idvenda;
    public $idproduto;
    public $produto;
    public $valorunidade;
    public $quantidade;
    public $valortotal;

    public function __construct($id = false){
        if($id){
            $this->id = $id;
            $this->carregar();
        }
    }

    public function getIdVenda(){
        return $this->idvenda;
    }

    public function getProduto(){
        return $this->produto;
    }

    public function getValorUnidade(){
        return $this->valorunidade;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function getValorTotal(){
        return $this->valortotal;
    }

    public function inserir ()
    {
        $sql = "insert into itensvenda(idvenda, idproduto, produto, valorunidade, quantidade, valortotal) values (:idvenda, :idproduto, :produto, :valorunidade, :quantidade, :valortotal)";

        $conexao = Conexao::getConexao();

        $ps = $conexao->prepare($sql);
        $ps->bindValue(':idvenda', $this->idvenda);
        $ps->bindValue(':idproduto', $this->idproduto);
        $ps->bindValue(':produto', $this->produto);
        $ps->bindValue(':valorunidade', $this->valorunidade);
        $ps->bindValue(':quantidade', $this->quantidade);
        $ps->bindValue(':valortotal', $this->valortotal);

        $resultado = $ps->execute();
        if($resultado == 0){
            throw new Exception("Erro ao inserir registro.");
            return false;
        }
        return true;
    }

    public function carregar(){
        $sql = "select * from itensvenda where id = {$this->id}";
        $conexao = Conexao::getConexao(); // Os dois pontos são utilizadas caso a função seja STATIC
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            $this->id = $linha['id']; 
            $this->data = $linha['idvenda']; 
            $this->hora = $linha['idproduto'];
            $this->idcliente = $linha['produto'];
            $this->cliente = $linha['valorunidade'];
            $this->valortotal = $linha['quantidade'];
            $this->statusrecebimento = $linha['valortotal'];
        }
    }

    public function carregarPorId($id){
        $sql = "select * from itensvenda where id = {$id}";
        $conexao = Conexao::getConexao(); // Os dois pontos são utilizadas caso a função seja STATIC
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            $this->id = $linha['id']; 
            $this->data = $linha['idvenda']; 
            $this->idcliente = $linha['produto'];
            $this->cliente = $linha['valorunidade'];
            $this->valortotal = $linha['quantidade'];
            $this->statusrecebimento = $linha['valortotal'];
        }
    }


    public function listar()
    {
        $sql = "select * from itensvenda order by id";
        $conexao = Conexao::getConexao(); // Os dois pontos são utilizadas caso a função seja STATIC
        $resultado = $conexao->query($sql);
        return $resultado->fetchAll(); 
    }

    public function listarPorId($id)
    {
        $sql = "select * from itensvenda where idvenda = {$id} order by id";
        $conexao = Conexao::getConexao(); // Os dois pontos são utilizadas caso a função seja STATIC
        $resultado = $conexao->query($sql);
        return $resultado->fetchAll(); 
    }

    public function excluir(){
        $sql = "delete from itensvenda where id = {$this->id}";
        $conexao = Conexao::getConexao();
        $conexao->exec($sql);

        header("location: venda-listar.php");
    }

    public function atualizar(){
        $sql = "update itensvenda
                    set idvenda = '{$this->idvenda}',
                        idproduto = '{$this->idproduto}',
                        produto = '{$this->produto}',
                        valorunidade = '{$this->valorunidade}',
                        quantidade = '{$this->quantidade}',
                        valortotal = '{$this->valortotal}'
                where id = {$this->id}";
        $conexao = Conexao::getConexao();
        $conexao->exec($sql);
        header('location: venda-listar.php'); //Redirecionamento após atualizar - após clicar no botão salvar

    }

    
}