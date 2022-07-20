<?php
    require_once '../classes/Produto.php'; 
    require_once '../classes/Erro.php';
    
    if(isset($_POST['salvar'])){

        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $valordecusto = $_POST['valordecusto'];
        $valordevenda = $_POST['valordevenda'];
        $quantidade = $_POST['quantidade'];
    
        //ATUALIZA O OBJETO
        $produto = new Produto();
        $produto->nome = $nome;
        $produto->descricao = $descricao;
        $produto->valordecusto = $valordecusto;
        $produto->valordevenda = $valordevenda;
        $produto->quantidade = $quantidade;
    
        try{
            $produto->inserir();
        }
        catch(Exception $e){
            Erro::trataErro(($e));
        }
        //Salva o objeto atualizado
        
        //Manda a mensagem para o produto-listar após a alteração bem sucedida
        $msg = "Registro inserido com sucesso.";
        header("location: produto-listar.php?mensagem={$msg}");
    }   
    

    //Inicio do head do HTML
    require_once '../cabecalho.php';
  
?>
    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Cadastro de Produto</title>
</head>
<body>
    <?php
        require_once 'menu.php';
        ?>     
    
    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Cadastro de Produto</h2>
            </div>
        </div>
           
         <form name="form" class="pt-3" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input name="nome" type="text" class="form-control" id="nome">
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input name="descricao" type="text" class="form-control" id="descricao">
            </div>
            <div class="mb-3">
                <label for="valordecusto" class="form-label">Valor de custo</label>
                <input name="valordecusto" type="text" class="form-control" id="valordecusto">
            </div>
            <div class="mb-3">
                <label for="valordevenda" class="form-label">Valor de venda</label>
                <input name="valordevenda" type="text" class="form-control" id="valordevenda">
            </div>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input name="quantidade" type="text" class="form-control" id="quantidade">
            </div>

            <button name="salvar" type="submit" class="btn btn-primary">Salvar</button>

            <a class="navbar-brand" href="produto-listar.php">
                <button type="button" class="btn btn-secondary">Voltar</button>
            </a>
        </form>
    </div>

<?php
    require_once '../rodape.php';
?>