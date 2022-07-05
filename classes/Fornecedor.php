<?php

require_once 'Conexao.php';

class Fornecedor{
    public $id;
    public $nome;
    public $empresa;
    public $descricao;
    public $email;
    public $telefoneempresa;
    public $telefonepessoal;
    public $cidade;
    public $status;

    public function __construct($id = false){
        if($id){
            $this->id = $id;
            $this->carregar();
        }
    }

    public function inserir ()
    {
        $sql = "insert into fornecedor(nome, empresa, descricao, email, telefoneempresa, telefonepessoal, cidade, status) values (:nome, :empresa, :descricao, :email, :telefoneempresa, :telefonepessoal, :cidade, :status)";

        $conexao = Conexao::getConexao();

        $ps = $conexao->prepare($sql);
        $ps->bindValue(':nome', $this->nome);
        $ps->bindValue(':empresa', $this->empresa);
        $ps->bindValue(':descricao', $this->descricao);
        $ps->bindValue(':email', $this->email);
        $ps->bindValue(':telefoneempresa', $this->telefoneempresa);
        $ps->bindValue(':telefonepessoal', $this->telefonepessoal);
        $ps->bindValue(':cidade', $this->cidade);
        $ps->bindValue(':status', $this->status);

        $resultado = $ps->execute();
        if($resultado == 0){
            throw new Exception("Erro ao inserir registro.");
            return false;
        }
        return true;
    }

    public function carregar(){
        $sql = "select * from fornecedor where id = {$this->id}";
        $conexao = Conexao::getConexao(); // Os dois pontos são utilizadas caso a função seja STATIC
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            $this->nome = $linha['nome']; 
            $this->empresa = $linha['empresa']; 
            $this->descricao = $linha['descricao'];
            $this->email = $linha['email'];
            $this->telefoneempresa = $linha['telefoneempresa'];
            $this->telefonepessoal = $linha['telefonepessoal'];
            $this->cidade = $linha['cidade'];
            $this->status = $linha['status'];
        }
    }

    public function listar()
    {
        $sql = "select * from fornecedor order by nome";
        $conexao = Conexao::getConexao(); // Os dois pontos são utilizadas caso a função seja STATIC
        $resultado = $conexao->query($sql);
        return $resultado->fetchAll();
        
    }

    public function excluir(){
        $sql = "delete from fornecedor where id = {$this->id}";
        $conexao = Conexao::getConexao();
        $conexao->exec($sql);

        header("location: fornecedor-listar.php");

    }

    public function atualizar(){
        $sql = "update fornecedor
                    set nome = '{$this->nome}',
                        empresa = '{$this->empresa}',
                        descricao = '{$this->descricao}',
                        email = '{$this->email}',
                        telefoneempresa = '{$this->telefoneempresa}',
                        telefonepessoal = '{$this->telefonepessoal}',
                        cidade = '{$this->cidade}',
                        status = '{$this->status}'
                where id = {$this->id}";
        $conexao = Conexao::getConexao();
        $conexao->exec($sql);
        header('location: fornecedor-listar.php'); //Redirecionamento após atualizar - após clicar no botão salvar

    }
}