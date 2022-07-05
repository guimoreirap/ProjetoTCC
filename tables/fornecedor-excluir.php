<?php 

    require_once '../classes/Fornecedor.php'; 
    require_once '../classes/Erro.php';

    if(isset($_POST['excluir'])){

    try{
        $id = $_POST['id'];
        $fornecedor = new Fornecedor($id);
    
        //Salva o objeto atualizado
        $fornecedor->excluir();
    
    } catch(Exception $e){
        Erro::trataErro(($e));
    }

    $msg = "Registro excluído com sucesso.";
    header("location: fornecedor-listar.php?mensagem={$msg}");
    }
?>
