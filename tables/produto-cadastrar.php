<?php
  require_once '../cabecalho.php';
?>
    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Cadastro de Produto</title>
</head>
<body>
    <?php
      require_once 'nav-bar-table.php';
    ?>     
    
    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Cadastro de Produto</h2>
            </div>
        </div>
           
         <form class="">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="exampleInputNome" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Valor de custo</label>
                <input type="text" class="form-control" id="exampleInputEstado">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Valor de venda</label>
                <input type="text" class="form-control" id="exampleInputEstado">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Quantidade</label>
                <input type="text" class="form-control" id="exampleInputEstado">
            </div>

            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Validade</label>
                <input type="text" class="form-control" id="exampleInputEstado">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Lote</label>
                <input type="text" class="form-control" id="exampleInputEstado">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Marca</label>
                <select name="grupousuario_id" id="grupousuario_id" class="form-select">
                    <option value="">-- Selecione --</option>
                    <option value=""> Masculino </option>
                    <option value=""> Feminino </option>
                    <option value=""> Outro </option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tipo de produto</label>
                <select name="grupousuario_id" id="grupousuario_id" class="form-select">
                    <option value="">-- Selecione --</option>
                    <option value=""> Masculino </option>
                    <option value=""> Feminino </option>
                    <option value=""> Outro </option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a class="navbar-brand" href="produto-listar.php">
                <button type="button" class="btn btn-secondary">Voltar</button>
            </a>
        </form>
    </div>

<?php
    require_once '../rodape.php';
?>