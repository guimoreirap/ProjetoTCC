<?php
  require_once '../cabecalho.php';
?>
    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Cadastro de Fornecedor</title>
</head>
<body>
    <?php
      require_once 'nav-bar-table.php';
    ?>     
    
    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Cadastro de Fornecedor</h2>
            </div>
        </div>
           
         <form class="">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="exampleInputNome" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">CPF</label>
                <input type="text" class="form-control" id="exampleInputEstado">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">RG</label>
                <input type="text" class="form-control" id="exampleInputEstado">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Data de nascimento</label>
                <input type="text" class="form-control" id="exampleInputEstado">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Sexo</label>
                <select name="grupousuario_id" id="grupousuario_id" class="form-select">
                    <option value="">-- Selecione --</option>
                    <option value=""> Masculino </option>
                    <option value=""> Feminino </option>
                    <option value=""> Outro </option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="exampleInputEstado">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="exampleInputEstado">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Número</label>
                <input type="text" class="form-control" id="exampleInputEstado">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="exampleInputEstado">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEstado">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Empresa</label>
                <input type="text" class="form-control" id="exampleInputEstado">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="exampleInputEstado">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Telefone da empresa</label>
                <input type="text" class="form-control" id="exampleInputEstado">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a class="navbar-brand" href="fornecedor-listar.php">
                <button type="button" class="btn btn-secondary">Voltar</button>
            </a>
        </form>
    </div>

<?php
    require_once '../rodape.php';
?>