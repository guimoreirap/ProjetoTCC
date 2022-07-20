<nav class="navbar navbar-expand-lg nav-menu">
        <div class="container-fluid">
          <a class="navbar-brand" href="../principal.php">Principal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cadastros
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="cliente-listar.php">Cliente</a></li>
                  <li><a class="dropdown-item" href="fornecedor-listar.php">Fornecedor</a></li>
                  <li><a class="dropdown-item" href="produto-listar.php">Produto</a></li>
                  <li><a class="dropdown-item" href="usuario-listar.php">Usuário</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Movimentações
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="compra-listar.php">Compra</a></li>
                    <li><a class="dropdown-item" href="venda-listar.php">Venda</a></li>
                    <li><a class="dropdown-item" href="caixa-listar.php">Caixa</a></li>
                    <li><a class="dropdown-item" href="controle-pagamento-listar.php">Pagamento</a></li>
                    <li><a class="dropdown-item" href="controle-recebimento-listar.php">Recebimento</a></li>
                    <li><a class="dropdown-item" href="itens-vendas-teste.php">Teste Venda</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Relatórios
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              
              <div class="btn-group">
              <button type="button" class="btn btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
              </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><button class="dropdown-item" type="button">Configurações</button></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <a href="../sair.php">
                        <button class="dropdown-item" type="button">Sair</button>
                      </a>
                    </li>
                  </ul>
              </div>

            </form>
          </div>
        </div>
    </nav>
