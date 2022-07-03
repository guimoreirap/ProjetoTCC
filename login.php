<?php 
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
                <form action="">
                    <h2 class="h2-right-side">Login</h2>
                    <br>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Senha">
                    </div>
                        <a href="">
                            <button type="button" class="btn btn-outline-primary" id="right-side-button">Entrar</button>
                        </a>
                        <br><br>
                        <a href="cadastro.html">
                            <button type="button" class="btn btn-outline-primary" id="right-side-button">Cadastrar-se</button>
                        </a>
                </form>
            </div> 
    </section>

<?php
    require_once 'rodape.php';
?>