<?php
    require_once '../classes/Fornecedor.php';
    require_once '../classes/Erro.php';

    if(isset($_POST['salvar'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $empresa = $_POST['empresa'];
        $descricao = $_POST['descricao'];
        $email = $_POST['email'];
        $telefoneempresa = $_POST['telefoneempresa'];
        $telefonepessoal = $_POST['telefonepessoal'];
        $cidade = $_POST['cidade'];
        $status = $_POST['status'];
    
        //ATUALIZA O OBJETO
        $fornecedor = new Fornecedor($id);
        $fornecedor->nome = $nome;
        $fornecedor->empresa = $empresa;
        $fornecedor->descricao = $descricao;
        $fornecedor->email = $email;
        $fornecedor->telefoneempresa = $telefoneempresa;
        $fornecedor->telefonepessoal = $telefonepessoal;
        $fornecedor->cidade = $cidade;
        $fornecedor->status = $status;
        
        try{
            $fornecedor->atualizar();
        }
        catch(Exception $e){
            Erro::trataErro(($e));
        }
        //Salva o objeto atualizado
        
        //Manda a mensagem para o produto-listar após a alteração bem sucedida
        $msg = "Registro alterado com sucesso.";
        header("location: fornecedor-listar.php?mensagem={$msg}");
    }   
    

    //Inicio do head do HTML
    require_once '../cabecalho.php';
  
?>
    <!-- Mask para telefone e CPF-->
    <script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="../js/jquery.mask.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $("#telefoneempresa").mask("(00) 00000-0000");
            $("#telefonepessoal").mask("(00) 00000-0000");
        })
    </script>

    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Alterar fornecedor</title>
</head>
<body>
    <?php
      require_once 'nav-bar-table.php';
    ?>     
    
    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Alterar fornecedor</h2>
            </div>
        </div>

        <?php
            $id = $_POST['id'];
            $fornecedor = new Fornecedor($id);
        ?>
           
            <form name="form" class="pt-3" method="post">
                <input type="hidden" name="id" value="<?= $_POST['id'] ?>">

                <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input name="nome" type="text" class="form-control" id="nome" value="<?= $fornecedor->nome ?>">
            </div>
            <div class="mb-3">
                <label for="empresa" class="form-label">Empresa</label>
                <input name="empresa" type="text" class="form-control" id="empresa" value="<?= $fornecedor->empresa ?>">
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input name="descricao" type="text" class="form-control" id="descricao" value="<?= $fornecedor->descricao ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email" value="<?= $fornecedor->email ?>">
            </div>
            <div class="mb-3">
                <label for="telefoneempresa" class="form-label">Telefone Empresa</label>
                <input name="telefoneempresa" type="text" class="form-control" id="telefoneempresa" value="<?= $fornecedor->telefoneempresa ?>">
            </div>
            <div class="mb-3">
                <label for="telefonepessoal" class="form-label">Telefone Pessoal</label>
                <input name="telefonepessoal" type="text" class="form-control" id="telefonepessoal" value="<?= $fornecedor->telefonepessoal ?>">
            </div>
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input name="cidade" type="text" class="form-control" id="cidade" value="<?= $fornecedor->cidade ?>">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" id="status">
                    <option selected><?= $fornecedor->status ?></option>
                    <option value="1">1 - Ativo</option>
                    <option value="0">0 - Inativo</option>
                </select>            
            </div>

            <button name="salvar" type="submit" class="btn btn-primary">Salvar</button>

            <a class="navbar-brand" href="fornecedor-listar.php">
                <button type="button" class="btn btn-secondary">Voltar</button>
            </a>
        </form>
    </div>

<?php
    require_once '../rodape.php';
?>