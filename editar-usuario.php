<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GESTORMAX - Editar Usuário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/usuarios.css">
  <link rel="stylesheet" href="css/sidebar.css">
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
          <h1 class="h2">Editar Usuário</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <button id="btn-voltar" class="btn btn-outline-secondary me-2" onclick="location.href='usuarios-lista.php'">
              <i class="bi bi-arrow-left me-1"></i>Voltar
            </button>
          </div>
        </div>

        <div id="mensagem-container"></div>

        <div class="card shadow-sm">
          <div class="card-header bg-light">
            <h2 class="h5 card-title mb-1">Informações do Usuário</h2>
            <p class="text-muted small mb-0">Edite os dados do usuário</p>
          </div>
          <div class="card-body">
            <form id="form-editar-usuario">
              <input type="hidden" id="usuario-id">
              
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="editar-nome" class="form-label">Nome Completo</label>
                  <input type="text" class="form-control" id="editar-nome" required>
                </div>
                
                <div class="col-md-6">
                  <label for="editar-email" class="form-label">E-mail</label>
                  <input type="email" class="form-control" id="editar-email" required>
                </div>
                
                <div class="col-md-6">
                  <label for="editar-usuario" class="form-label">Nome de Usuário</label>
                  <input type="text" class="form-control" id="editar-usuario" required>
                </div>
                
                <div class="col-md-6">
                  <label for="editar-perfil" class="form-label">Perfil</label>
                  <select class="form-select" id="editar-perfil" required>
                    <option value="admin">Administrador</option>
                    <option value="vendedor">Vendedor</option>
                  </select>
                </div>
                
                <div class="col-md-6">
                  <label for="editar-senha" class="form-label">Nova Senha</label>
                  <input type="password" class="form-control" id="editar-senha" placeholder="Deixe em branco para manter a atual">
                </div>
                
                <div class="col-md-6">
                  <label for="editar-confirmar-senha" class="form-label">Confirmar Nova Senha</label>
                  <input type="password" class="form-control" id="editar-confirmar-senha">
                </div>
                
                <div class="col-12">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="editar-status" checked>
                    <label class="form-check-label" for="editar-status">Usuário ativo</label>
                  </div>
                </div>
              </div>
              
              <div class="d-flex justify-content-end mt-4 gap-2">
                <button type="button" id="btn-cancelar-edicao" class="btn btn-outline-secondary" onclick="location.href='usuarios-lista.php'">Cancelar</button>
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
              </div>
            </form>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
