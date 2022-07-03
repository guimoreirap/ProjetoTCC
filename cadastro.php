<?php 
    require_once 'cabecalho.php';
?>
    <link rel="stylesheet" href="css/style-cadastro.css">

    <title>Cadastro</title>
</head>
<body>
    <section class="container" id="container">
        <div class="left-side-menu">
            <div class="left-side-content">
                <div>
                    <h2 class="h2-left-side">Realize seu <br>cadastro</h2>
                    <p class="p-left-side">Preencha todos os campos</p>
                </div>
            </div>
        </div>
            <div class="right-side-menu">
                <br>
                <br>
                <form action="">
                    <h2 class="h2-right-side">Cadastro</h2>
                    <br>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome" autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Senha">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Confirmar senha">
                    </div>
                        <a href="">
                            <button type="button" class="btn btn-outline-primary" id="right-side-button">Confirmar</button>
                        </a>
                        <br><br>
                        <a href="login.html">
                            <button type="button" class="btn btn-outline-primary" id="right-side-button">Entrar</button>
                        </a>
                        <p class="p-right-side">Já possui uma conta? Acesse aqui</p>

                </form>
            </div> 
    </section>

<?php
    require_once 'rodape.php';
?>