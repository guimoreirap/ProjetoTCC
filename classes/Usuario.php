<?php

require_once 'Conexao.php';

class Usuario{
    public $id;
    public $nome;
    public $email;
    public $senha;
    public $telefone;
    public $nivelpermissao;
    public $status;

    public function __construct($id = false){
        if($id){
            $this->id = $id;
            $this->carregar();
        }
    }

    public function inserir ()
    {
        $sql = "insert into usuario(nome, email, telefone, nivelpermissao, status) values (:nome, :email, :telefone, :nivelpermissao, :status)";

        $conexao = Conexao::getConexao();

        $ps = $conexao->prepare($sql);
        $ps->bindValue(':nome', $this->nome);
        $ps->bindValue(':email', $this->email);
        //$ps->bindValue(':senha', $this->senha);
        $ps->bindValue(':telefone', $this->telefone);
        $ps->bindValue(':nivelpermissao', $this->nivelpermissao);
        $ps->bindValue(':status', $this->status);

        $resultado = $ps->execute();
        if($resultado == 0){
            throw new Exception("Erro ao inserir registro.");
            return false;
        }
        return true;
    }

    public function carregar(){
        $sql = "select * from usuario where id = {$this->id}";
        $conexao = Conexao::getConexao(); // Os dois pontos são utilizadas caso a função seja STATIC
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            $this->nome = $linha['nome']; 
            $this->email = $linha['email']; 
            $this->telefone = $linha['telefone'];
            $this->nivelpermissao = $linha['nivelpermissao'];
            $this->status = $linha['status'];
        }
    }

    public function listar()
    {
        $sql = "select * from usuario order by nome";
        $conexao = Conexao::getConexao(); // Os dois pontos são utilizadas caso a função seja STATIC
        $resultado = $conexao->query($sql);
        return $resultado->fetchAll();
        
    }

    public function excluir(){
        $sql = "delete from usuario where id = {$this->id}";
        $conexao = Conexao::getConexao();
        $conexao->exec($sql);

        header("location: usuario-listar.php");

    }

    public function atualizar(){
        $sql = "update usuario
                    set nome = '{$this->nome}',
                        email = '{$this->email}',
                        telefone = '{$this->telefone}',
                        nivelpermissao = '{$this->nivelpermissao}',
                        status = '{$this->status}'
                where id = {$this->id}";
        $conexao = Conexao::getConexao();
        $conexao->exec($sql);
        header('location: produto-listar.php'); //Redirecionamento após atualizar - após clicar no botão salvar

    }
}