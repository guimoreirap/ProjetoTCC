<?php
    require_once '../classes/Fornecedor.php';
    require_once '../classes/Erro.php';

    try{                             
        $fornecedor = new Fornecedor();
        $lista = $fornecedor->listar();
    } catch(Exception $e){
        Erro::trataErro($e);
    }
    //Inicio do head do HTML
    require_once '../cabecalho.php';
?>

    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Fornecedor</title>
</head>
<body>
    <?php
        require_once 'menu.php';
        ?>     
    
    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Fornecedor</h2>
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
                <th scope="col">Empresa</th>
                <th scope="col">Descrição</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone Empresa</th>
                <th scope="col">Telefone Pessoal</th>
                <th scope="col">Cidade</th>
                <th scope="col">Status</th> <!-- DEVE TER STATUS POIS O FORNECEDOR DA MESMA EMPRESA PODE MUDAR,FAZENDO ESSA ORGANIZAÇÃO DE QUEM É FORNECEDOR ATIVO/INATIVO DE DETERMINADA EMPRESA-->
                <th scope="col">Ação</th>

            </tr>
            </thead>

            <tbody>
                <?php foreach($lista as $key => $linha){ ?> 
                <tr>
                    <td><?= $linha['id']?></td>
                    <td><?= $linha['nome']?></td>
                    <td><?= $linha['empresa']?></td>
                    <td><?= $linha['descricao']?></td>
                    <td><?= $linha['email']?></td>
                    <td><?= $linha['telefoneempresa']?></td>
                    <td><?= $linha['telefonepessoal']?></td>
                    <td><?= $linha['cidade']?></td>
                    <td><?= $linha['status']?></td>

                    <td  class="d-flex">
                        <form action="fornecedor-alterar.php" method="post">
                            <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                            <button href="" type="submit" name="alterar" value="alterar" class="btn btn-warning btn-sm">
                                <i class="far fa-edit"></i>
                            </button>
                        </form>
                        <form action="fornecedor-excluir.php" method="post" onsubmit="return confirm('Tem certeza que quer excluir o registro?')">          
                            <input type="hidden" name="id" value="<?= $linha['id'] ?>">
                                
                            <button type="submit" id="excluir" name="excluir" value="excluir" class="btn btn-danger btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>

                </tr>

                <?php } ?>
            </tbody>
        </table>
        
          <a class="navbar-brand" href="fornecedor-cadastrar.php">
            <button type="button" class="btn btn-primary">Cadastrar</button>
          </a>
        
    </div>


<?php
    require_once '../rodape.php';
?>