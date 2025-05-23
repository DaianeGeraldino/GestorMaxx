<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GESTORMAX - Configurações</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/configuracoes.css">
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
            <div class="d-flex justify-content-between align-items-center mb-3">
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
          <h1 class="h2">Configurações</h1>
        </div>

        <div id="mensagem-container"></div>

        <!-- Tabs -->
        <ul class="nav nav-tabs mb-4" id="configTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="geral-tab" data-bs-toggle="tab" data-bs-target="#geral" type="button" role="tab">
              Geral
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="estoque-tab" data-bs-toggle="tab" data-bs-target="#estoque" type="button" role="tab">
              Estoque
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="dados-tab" data-bs-toggle="tab" data-bs-target="#dados" type="button" role="tab">
              Dados
            </button>
          </li>
        </ul>

        <div class="tab-content" id="configTabsContent">
          <!-- Geral -->
          <div class="tab-pane fade show active" id="geral" role="tabpanel">
            <div class="card shadow-sm mb-4">
              <div class="card-header bg-light">
                <h2 class="h5 card-title mb-1">Informações Gerais</h2>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <label for="nome-loja" class="form-label">Nome da Loja</label>
                  <input type="text" class="form-control" id="nome-loja" value="GESTORMAX">
                </div>
                
                <div class="mb-3">
                  <label for="moeda" class="form-label">Moeda</label>
                  <select class="form-select" id="moeda">
                    <option value="BRL">Real Brasileiro (R$)</option>
                    <option value="USD">Dólar Americano ($)</option>
                    <option value="EUR">Euro (€)</option>
                  </select>
                </div>
                
                <div class="mb-3">
                  <label for="tema" class="form-label">Tema</label>
                  <select class="form-select" id="tema">
                    <option value="claro">Claro</option>
                    <option value="escuro">Escuro</option>
                  </select>
                </div>
                
                <button id="btn-salvar-geral" class="btn btn-primary">Salvar Alterações</button>
              </div>
            </div>
          </div>

          <!-- Estoque -->
          <div class="tab-pane fade" id="estoque" role="tabpanel">
            <div class="card shadow-sm mb-4">
              <div class="card-header bg-light">
                <h2 class="h5 card-title mb-1">Configurações de Estoque</h2>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <label for="estoque-minimo-padrao" class="form-label">Estoque Mínimo Padrão</label>
                  <input type="number" class="form-control" id="estoque-minimo-padrao" min="1" value="10">
                  <div class="form-text">Quantidade mínima padrão para novos produtos</div>
                </div>
                
                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" id="alerta-estoque-baixo" checked>
                  <label class="form-check-label" for="alerta-estoque-baixo">
                    Alertar quando estoque estiver baixo
                  </label>
                </div>
                
                <button id="btn-salvar-estoque" class="btn btn-primary">Salvar Alterações</button>
              </div>
            </div>
          </div>

          <!-- Dados -->
          <div class="tab-pane fade" id="dados" role="tabpanel">
            <div class="card shadow-sm mb-4">
              <div class="card-header bg-light">
                <h2 class="h5 card-title mb-1">Backup e Restauração</h2>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <button id="btn-exportar" class="btn btn-outline-secondary">
                    <i class="bi bi-download me-2"></i>Exportar Dados
                  </button>
                  <div class="form-text">Faça o download de todos os seus dados</div>
                </div>
                
                <div class="mb-3">
                  <label for="importar-dados" class="btn btn-outline-secondary">
                    <i class="bi bi-upload me-2"></i>Importar Dados
                  </label>
                  <input type="file" id="importar-dados" accept=".json" class="d-none">
                  <div class="form-text">Restaure dados a partir de um backup</div>
                </div>
                
                <div class="mb-3">
                  <button id="btn-limpar-dados" class="btn btn-outline-danger">
                    <i class="bi bi-trash me-2"></i>Limpar Dados
                  </button>
                  <div class="form-text">Remover todos os produtos do sistema</div>
                </div>
              </div>
            </div>
            
            <div class="card shadow-sm">
              <div class="card-header bg-light">
                <h2 class="h5 card-title mb-1">Dados de Exemplo</h2>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <button id="btn-dados-exemplo" class="btn btn-outline-secondary">
                    <i class="bi bi-database me-2"></i>Carregar Dados de Exemplo
                  </button>
                  <div class="form-text">Carrega produtos de exemplo para testar o sistema</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Bootstrap Bundle com Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
