<?php
    require_once '../classes/Usuario.php';
    require_once '../classes/Erro.php';

    if(isset($_POST['salvar'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $telefone = $_POST['telefone'];
        $nivelpermissao = $_POST['nivelpermissao'];
        $status = $_POST['status'];
        
    
        //ATUALIZA O OBJETO
        $usuario = new Usuario($id);
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->telefone = $telefone;
        $usuario->nivelpermissao = $nivelpermissao;
        $usuario->status = $status;
    
        try{
            $usuario->atualizar();
        }
        catch(Exception $e){
            Erro::trataErro(($e));
        }
        //Salva o objeto atualizado
        
        //Manda a mensagem para o produto-listar após a alteração bem sucedida
        $msg = "Registro alterado com sucesso.";
        header("location: usuario-listar.php?mensagem={$msg}");
    }   
    

    //Inicio do head do HTML
    require_once '../cabecalho.php';
  
?>
    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Cadastro de Produto</title>
</head>
<body>
    <?php
      require_once 'nav-bar-table.php';
    ?>     
    
    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Alterar usuário</h2>
            </div>
        </div>

        <?php
            $id = $_POST['id'];
            $usuario = new Usuario($id);
        ?>
           
         <form name="form" class="pt-3" method="post">
            <input type="hidden" name="id" value="<?= $_POST['id'] ?>">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input name="nome" type="text" class="form-control" id="nome" value="<?= $usuario->nome ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input name="email" type="text" class="form-control" id="email" value="<?= $usuario->email?>">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">senha</label>
                <input name="senha" type="password" class="form-control" id="senha" placeholder="NÃO ESTÁ FUNCIONANDO" disabled>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input name="telefone" type="text" class="form-control" id="telefone" value="<?= $usuario->telefone ?>">
            </div>
            <div class="mb-3">
                <label for="nivelpermissao" class="form-label">Nível de permissão</label>
                <select class="form-select" name="nivelpermissao" id="nivelpermissao">
                    <option selected><?= $usuario->nivelpermissao?></option>
                    <option value="1">1 - Admin</option>
                    <option value="2">2 - Usuário</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input name="status" type="text" class="form-control" id="status" value="<?= $usuario->status?>">
            </div>

            <button name="salvar" type="submit" class="btn btn-primary">Salvar</button>

            <a class="navbar-brand" href="usuario-listar.php">
                <button type="button" class="btn btn-secondary">Voltar</button>
            </a>
        </form>
    </div>

<?php
    require_once '../rodape.php';
?>