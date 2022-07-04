<?php
    require_once '../classes/Usuario.php';
    require_once '../classes/Erro.php';

    try{                             
        $usuario = new Usuario();
        $lista = $usuario->listar();
    } catch(Exception $e){
        Erro::trataErro($e);
    }

    //Inicio do head HTML
    require_once '../cabecalho.php';
?>
    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Usuário</title>
</head>
<body>
    <?php
      require_once 'nav-bar-table.php';
    ?>     

    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Usuário</h2>
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
                <th scope="col">Nome</th> <!-- NOME DO FUNCIONARIO/USUARIO -->
                <th scope="col">E-mail</th> <!-- E-MAIL PARA ENTRAR NO SISTEMA -->
                <th scope="col">Telefone</th>
                <th scope="col">Nível de permissão</th> <!-- NIVEL DE GERENTE DO SISTEMA OU DE USUARIO COMUM ONDE TERÃO DIFERENTES PERMISSÕES DENTRO DO SISTEMAS -->
                <th scope="col">Status</th> <!-- INATIVO / ATIVO -->
                <th scope="col">Ação</th>

            </tr>
            </thead>

            <tbody>
                <?php foreach($lista as $key => $linha){ ?>
                    <tr>
                        <td><?= $linha['id']?></td>
                        <td><?= $linha['nome']?></td>
                        <td><?= $linha['email']?></td>
                        <td><?= $linha['telefone']?></td>
                        <td><?= $linha['nivelpermissao']?></td>
                        <td><?= $linha['status']?></td>

                        <td  class="d-flex">
                            <form action="usuario-alterar.php" method="post">
                                <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                                <button href="" type="submit" name="alterar" value="alterar" class="btn btn-warning btn-sm">
                                        <i class="far fa-edit"></i>
                                </button>
                            </form>
                            <form action="usuario-excluir.php" method="post" onsubmit="return confirm('Tem certeza que quer excluir o registro?')">          
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
        <a class="navbar-brand" href="usuario-cadastrar.php">
          <button type="button" class="btn btn-primary">Cadastrar</button>
        </a>

        <br>
        <h5>PERGUNTAR PARA O GOIANO, FAZ SENTIDO TER UM CADASTRAR USUARIO AQUI? POIS JA EXISTET UM NA TELA DE LOGIN INICIAL, ONDE TODO USUARIO CADASTRADO TERA PERMISSAO MAIS BAIXA</h5>
        <H6>NESSA TELA O USUARIO COM PERMISSAO DE GERENTE PODERÁ DAR PERMISSAO MAIOR AOS USUARIOS, OU INATIVA-LOS/ATIVA-LOS, ATÉ MESMO EXCLUIR</H6>
        <H6>FAZ SENTIDO EXCLUIR UM USUARIO, OU APENAS INATIVA-LO? SE FOR APENAS INATIVAR PRECISO ALTERAR O BOTAO EXCLUIR</H6> 
        <H6>SE FOR PARA APENAS INATIVAR, FAZER A ALTERAÇÃO NO BOTÃO DE ALTERAR, E REMOVER O ICONE DE EXCLUIR</H6>
    </div>


<?php
    require_once '../rodape.php';
?>