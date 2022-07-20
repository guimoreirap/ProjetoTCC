<?php

    require_once '../classes/Cliente.php';
    require_once '../classes/Erro.php';

    try{                             
        $cliente = new Cliente();
        $lista = $cliente->listar();
    } catch(Exception $e){
        Erro::trataErro($e);
    }

    //Inicio do head HTML
    require_once '../cabecalho.php';
?>

    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Cliente</title>
</head>
<body>
    <?php
        require_once 'menu.php';
        ?>
    
    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Cliente</h2>
            </div>
        </div>

        <?php if(isset($_GET['mensagem'])): ?> 
            <div class ="alert alert-success" role="alert">
                <?= $_GET['mensagem'] ?>
            </div>
        <?php endif; ?>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Data Nasc</th>
                <th scope="col">Sexo</th>
                <th scope="col">Cidade</th>
                <th scope="col">Endereço</th>
                <th scope="col">Bairro</th>
                <th scope="col">Número</th>
                <th scope="col">Status</th>
                <th scope="col">Ação</th>

            </tr>
            </thead>

            <tbody>
                <?php foreach($lista as $key => $linha){ ?> 

                <tr>
                    <td><?= $linha['id']?></td>
                    <td><?= $linha['nome']?></td>
                    <td><?= $linha['cpf']?></td>
                    <td><?= $linha['telefone']?></td>
                    <td><?= $linha['email']?></td>
                    <td><?= $linha['datanascimento']?></td>
                    <td><?= $linha['sexo']?></td>
                    <td><?= $linha['cidade']?></td>
                    <td><?= $linha['endereco']?></td>
                    <td><?= $linha['bairro']?></td>
                    <td><?= $linha['numero']?></td>
                    <td><?= $linha['status']?></td>

                    <td  class="d-flex">
                            <form action="cliente-alterar.php" method="post">
                                <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                                <button href="" type="submit" name="alterar" value="alterar" class="btn btn-warning btn-sm">
                                        <i class="far fa-edit"></i>
                                </button>
                            </form>
                            <form action="cliente-excluir.php" method="post" onsubmit="return confirm('Tem certeza que quer excluir o registro?')">          
                                <input type="hidden" name="id" value="<?= $linha['id'] ?>">
                                
                                <button type="submit" id="excluir" name="excluir" value="excluir" class="btn btn-danger btn-sm">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                </tr>
                
                <?php }?>
            </tbody>
        </table>
        <a class="navbar-brand" href="cliente-cadastrar.php">
          <button type="button" class="btn btn-primary">Cadastrar</button>
        </a>
    </div>


<?php
    require_once '../rodape.php';
?>