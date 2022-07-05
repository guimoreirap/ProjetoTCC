<?php 
    require_once 'classes/Conexao.php';
    require_once 'cabecalho.php';
?>
    <link rel="stylesheet" href="css/style-login.css">

    <title>Login</title>
</head>
<body>
    <section class="container" id="container">
        <div class="left-side-menu">

            

            <div class="left-side-content">
                <div>
                    <h2 class="h2-left-side">Bem vindo!</h2>
                    <p>Acesse já sua conta</p>

                    

                </div>
            </div>
        </div>
            <div class="right-side-menu">
                <br>
                <br>
                <form action="autenticacao.php" method="post">
                    <h2 class="h2-right-side">Login</h2>
                    <br>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                    </div>

                    <button name="entrar" type="submit" value="Entrar" class="btn btn-outline-primary" id="right-side-button">Entrar</button>

                    <br><br>
                    <!-- MENSAGEM DE ERRO CASO O LOGIN ESTEJA INCORRETO -->
                    <?php if (isset($_GET['mensagem'])) : ?>
                        <div class="alert alert-warning" role="alert">
                            <?= $_GET['mensagem'] ?>
                        </div>
                    <?php endif ?>
                </form>
                
            </div> 
    </section>

<?php
    require_once 'rodape.php';
?>