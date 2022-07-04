<?php 

    require_once '../classes/Cliente.php'; 
    require_once '../classes/Erro.php';

    if(isset($_POST['excluir'])){

    try{
        $id = $_POST['id'];
        $cliente = new Cliente($id);
    
        //Salva o objeto atualizado
        $cliente->excluir();
    
    } catch(Exception $e){
        Erro::trataErro(($e));
    }

    $msg = "Registro excluído com sucesso.";
    header("location: cliente-listar.php?mensagem={$msg}");
    }
?>
