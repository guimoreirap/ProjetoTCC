<?php
    require_once '../classes/Cliente.php';
    require_once '../classes/Erro.php';

    if(isset($_POST['salvar'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $datanascimento = $_POST['datanascimento'];
        $sexo = $_POST['sexo'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $numero = $_POST['numero'];
        $status = $_POST['status'];
        
    
        //ATUALIZA O OBJETO
        $cliente = new Cliente($id);
        $cliente->nome = $nome;
        $cliente->cpf = $cpf;
        $cliente->telefone = $telefone;
        $cliente->email = $email;
        $cliente->datanascimento = $datanascimento;
        $cliente->sexo = $sexo;
        $cliente->cidade = $cidade;
        $cliente->endereco = $endereco;
        $cliente->bairro = $bairro;
        $cliente->numero = $numero;
        $cliente->status = $status;
    
        try{
            $cliente->atualizar();
        }
        catch(Exception $e){
            Erro::trataErro(($e));
        }
        //Salva o objeto atualizado
        
        //Manda a mensagem para o produto-listar após a alteração bem sucedida
        $msg = "Registro alterado com sucesso.";
        header("location: cliente-listar.php?mensagem={$msg}");
    }   
    

    //Inicio do head do HTML
    require_once '../cabecalho.php';
  
?>
    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Alterar cliente</title>
</head>
<body>
    <?php
      require_once 'nav-bar-table.php';
    ?>     
    
    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Alterar cliente</h2>
            </div>
        </div>

        <?php
            $id = $_POST['id'];
            $cliente = new Cliente($id);
        ?>
           
            <form name="form" class="pt-3" method="post">
                <input type="hidden" name="id" value="<?= $_POST['id'] ?>">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input name="nome" type="text" class="form-control" id="nome" value="<?= $cliente->nome ?>">
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input name="cpf" type="text" class="form-control" id="cpf" value="<?= $cliente->cpf ?>">
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input name="telefone" type="text" class="form-control" id="telefone" value="<?= $cliente->telefone ?>">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input name="email" type="email" class="form-control" id="email" value="<?= $cliente->email ?>">
            </div>
            <div class="mb-3">
                <label for="datanascimento" class="form-label">Data de nascimento</label>
                <input name="datanascimento" type="date" class="form-control" id="datanascimento" value="<?= $cliente->datanascimento ?>">
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo</label>
                <select name="sexo" id="sexo" class="form-select">
                    <option selected><?= $cliente->sexo?></option>
                    <option value="Masculino"> Masculino </option>
                    <option value="Feminino"> Feminino </option>
                    <option value="Outro"> Outro </option>
                </select>
            </div>
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input name="cidade" type="text" class="form-control" id="cidade" value="<?= $cliente->cidade ?>">
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input name="endereco" type="text" class="form-control" id="endereco" value="<?= $cliente->endereco ?>">
            </div>
            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro</label>
                <input name="bairro" type="text" class="form-control" id="bairro" value="<?= $cliente->bairro ?>">
            </div>
            <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <input name="numero" type="text" class="form-control" id="numero" value="<?= $cliente->numero ?>">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input name="status" type="text" class="form-control" id="status" value="<?= $cliente->status ?>">
            </div>

            <button name="salvar" type="submit" class="btn btn-primary">Salvar</button>

            <a class="navbar-brand" href="cliente-listar.php">
                <button type="button" class="btn btn-secondary">Voltar</button>
            </a>
        </form>
    </div>

<?php
    require_once '../rodape.php';
?>