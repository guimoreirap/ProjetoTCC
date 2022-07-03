<?php 

    require_once '../classes/Produto.php'; 
    require_once '../classes/Erro.php';

    if(isset($_POST['excluir'])){

    try{
        $id = $_POST['id'];
        $produto = new Produto($id);
    
        //Salva o objeto atualizado
        $produto->excluir();
    
    } catch(Exception $e){
        Erro::trataErro(($e));
    }

    $msg = "Registro excluído com sucesso.";
    header("location: produto-listar.php?mensagem={$msg}");
    }
?>
