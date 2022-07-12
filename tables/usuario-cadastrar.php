<?php
    require_once '../classes/Usuario.php'; 
    require_once '../classes/Erro.php';
    
    if(isset($_POST['salvar'])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $telefone = $_POST['telefone'];
        $nivelpermissao = $_POST['nivelpermissao'];
        $status = $_POST['status'];
    
        //ATUALIZA O OBJETO
        $usuario = new Usuario();
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->senha = $senha;
        $usuario->telefone = $telefone;
        $usuario->nivelpermissao = $nivelpermissao;
        $usuario->status = $status;
    
        try{
            $usuario->inserir();
        }
        catch(Exception $e){
            Erro::trataErro(($e));
        }
        //Salva o objeto atualizado
        
        //Manda a mensagem para o produto-listar após a alteração bem sucedida
        $msg = "Registro inserido com sucesso.";
        header("location: usuario-listar.php?mensagem={$msg}");
    }   
    

    //Inicio do head do HTML
    require_once '../cabecalho.php';
  
?>
    <!-- Mask para telefone e CPF-->
    <script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="../js/jquery.mask.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $("#telefone").mask("(00) 00000-0000");
        })
    </script>

    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <?php
      require_once 'nav-bar-table.php';
    ?>     
    
    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Cadastro de Usuário</h2>
            </div>
        </div>
           
         <form name="form" class="pt-3" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input name="nome" type="text" class="form-control" id="nome">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input name="senha" type="password" class="form-control" id="senha">
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input name="telefone" type="text" class="form-control" id="telefone">
            </div>
            <div class="mb-3">
                <label for="nivelpermissao" class="form-label">Nível de permissão</label>
                <select class="form-select" name="nivelpermissao" id="nivelpermissao">
                    <option selected>-- Escolha um --</option>
                    <option value="1">1 - Admin</option>
                    <option value="2">2 - Usuário</option>
                </select>            
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input name="status" type="text" class="form-control" id="status" placeholder="0 - Inativo / 1 - Ativo">
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