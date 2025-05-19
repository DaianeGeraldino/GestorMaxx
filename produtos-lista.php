<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GESTORMAX - Lista de Produtos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/produtos.css">
  <link rel="stylesheet" href="./css/sidebar.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
        <div class="position-sticky pt-3 vh-100 d-flex flex-column">
          <div class="sidebar-header text-center mb-4 px-3">
            <h1 class="h4 text-white">GESTORMAX</h1>
          </div>
          
          <nav class="flex-grow-1">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link text-white" href="dashboard.php">
                  <i class="bi bi-house-door me-2"></i>
                  Início
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="produtos-lista.php">
                  <i class="bi bi-box-seam me-2"></i>
                  Produtos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="produtos-cadastro.php">
                  <i class="bi bi-plus-circle me-2"></i>
                  Cadastrar produto
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="vendas.php">
                  <i class="bi bi-cart me-2"></i>
                  Vendas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="usuarios-lista.php">
                  <i class="bi bi-people me-2"></i>
                  Usuários
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="estatisticas.php">
                  <i class="bi bi-bar-chart-line me-2"></i>
                  Estatísticas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="configuracoes.php">
                  <i class="bi bi-gear me-2"></i>
                  Configurações
                </a>
              </li>
            </ul>
          </nav>
          
          <div class="sidebar-footer mt-auto p-3">
            <div class="d-flex justify-content-between align-items-center mb-3" >
              <span class="text-white" id="user-name">Administrador</span>
            </div>
            <button id="logout-btn" class="btn btn-outline-light w-100" onclick="location.href='login.php'">
              <i class="bi bi-box-arrow-right me-2"></i>
              Sair
            </button>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Lista de Produtos</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <a href="produtos-cadastro.html" class="btn btn-primary me-2">
              <i class="bi bi-plus-circle me-1"></i> Novo Produto
            </a>
            <div class="input-group">
              <input type="text" id="busca-produto" class="form-control" placeholder="Buscar produto...">
              <button class="btn btn-outline-secondary" type="button">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </div>
        </div>
        
        <div id="mensagem-container"></div>
        
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead class="table-dark">
              <tr>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Quantidade</th>
                <th>Custo (R$)</th>
                <th>Venda (R$)</th>
                <th>Lucro (R$)</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody id="produtos-lista">
              <tr>
                <td colspan="7" class="text-center py-4">Carregando produtos...</td>
              </tr>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>

  <div class="modal fade" id="modal-editar" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Produto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="edit-id">
          <div class="mb-3">
            <label for="edit-nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="edit-nome">
          </div>
          <div class="mb-3">
            <label for="edit-categoria" class="form-label">Categoria</label>
            <select class="form-select" id="edit-categoria">
              <option value="Maquiagem">Maquiagem</option>
              <option value="Skincare">Skincare</option>
              <option value="Cabelo">Cabelo</option>
              <option value="Unhas">Unhas</option>
              <option value="Perfumaria">Perfumaria</option>
            </select>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="edit-quantidade" class="form-label">Quantidade</label>
              <input type="number" class="form-control" id="edit-quantidade">
            </div>
            <div class="col-md-6 mb-3">
              <label for="edit-estoque-minimo" class="form-label">Estoque Mínimo</label>
              <input type="number" class="form-control" id="edit-estoque-minimo">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="edit-custo" class="form-label">Custo (R$)</label>
              <input type="number" step="0.01" class="form-control" id="edit-custo">
            </div>
            <div class="col-md-6 mb-3">
              <label for="edit-valor-venda" class="form-label">Valor de Venda (R$)</label>
              <input type="number" step="0.01" class="form-control" id="edit-valor-venda">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" id="btn-salvar-edicao" class="btn btn-primary">Salvar Alterações</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
