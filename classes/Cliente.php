<?php

require_once 'Conexao.php';

class Cliente{
    public $id;
    public $nome;
    public $cpf;
    public $telefone;
    public $email;
    public $datanascimento;
    public $sexo;
    public $cidade;
    public $endereco;
    public $bairro;
    public $numero;
    public $status;

    public function __construct($id = false){
        if($id){
            $this->id = $id;
            $this->carregar();
        }
    }

    public function inserir ()
    {
        $sql = "insert into cliente(nome, cpf, telefone, email, datanascimento, sexo, cidade, endereco, bairro, numero, status) values (:nome, :cpf, :telefone, :email, :datanascimento, :sexo, :cidade, :endereco, :bairro, :numero, :status)";

        $conexao = Conexao::getConexao();

        $ps = $conexao->prepare($sql);
        $ps->bindValue(':nome', $this->nome);
        $ps->bindValue(':cpf', $this->cpf);
        $ps->bindValue(':telefone', $this->telefone);
        $ps->bindValue(':email', $this->email);
        $ps->bindValue(':datanascimento', $this->datanascimento);
        $ps->bindValue(':sexo', $this->sexo);
        $ps->bindValue(':cidade', $this->cidade);
        $ps->bindValue(':endereco', $this->endereco);
        $ps->bindValue(':bairro', $this->bairro);
        $ps->bindValue(':numero', $this->numero);
        $ps->bindValue(':status', $this->status);

        $resultado = $ps->execute();
        if($resultado == 0){
            throw new Exception("Erro ao inserir registro.");
            return false;
        }
        return true;
    }

    public function carregar(){
        $sql = "select * from cliente where id = {$this->id}";
        $conexao = Conexao::getConexao(); // Os dois pontos são utilizadas caso a função seja STATIC
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            $this->nome = $linha['nome']; 
            $this->cpf = $linha['cpf']; 
            $this->telefone = $linha['telefone'];
            $this->email = $linha['email'];
            $this->datanascimento = $linha['datanascimento'];
            $this->sexo = $linha['sexo'];
            $this->cidade = $linha['cidade'];
            $this->endereco = $linha['endereco'];
            $this->bairro = $linha['bairro'];
            $this->numero = $linha['numero'];
            $this->status = $linha['status'];
        }
    }

    public function listar()
    {
        $sql = "select * from cliente order by nome";
        $conexao = Conexao::getConexao(); // Os dois pontos são utilizadas caso a função seja STATIC
        $resultado = $conexao->query($sql);
        return $resultado->fetchAll();
        
    }

    public function excluir(){
        $sql = "delete from cliente where id = {$this->id}";
        $conexao = Conexao::getConexao();
        $conexao->exec($sql);

        header("location: cliente-listar.php");

    }

    public function atualizar(){
        $sql = "update cliente
                    set nome = '{$this->nome}',
                        cpf = '{$this->cpf}',
                        telefone = '{$this->telefone}',
                        email = '{$this->email}',
                        datanascimento = '{$this->datanascimento}',
                        sexo = '{$this->sexo}',
                        cidade = '{$this->cidade}',
                        endereco = '{$this->endereco}',
                        bairro = '{$this->bairro}',
                        numero = '{$this->numero}',
                        status = '{$this->status}'
                where id = {$this->id}";
        $conexao = Conexao::getConexao();
        $conexao->exec($sql);
        header('location: cliente-listar.php'); //Redirecionamento após atualizar - após clicar no botão salvar

    }
}