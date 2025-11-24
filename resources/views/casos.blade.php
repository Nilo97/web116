<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="../assets/images/logo/logo.jpg" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
  <title> APP 116 </title>
  <!-- Google font-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <!-- Font Awesome-->
  <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="../assets/css/prism.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>



<body>
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="theme-loader">
      <div class="loader-p"></div>
    </div>
  </div>
  <!-- Loader ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper" id="pageWrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
      <div class="main-header-right row m-0">
        <div class="main-header-left">
          <div class="logo-wrapper">
            <a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.jpg" alt="Logo"></a>
          </div>
          <div class="dark-logo-wrapper">
            <a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.png" alt="Logo Escuro"></a>
          </div>
          <div class="toggle-sidebar">
            <i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i>
          </div>
        </div>
        <div class="left-menu-header col">
          <ul>
            <li>
              <form class="form-inline search-form">
                <div class="search-bg">
                  <i class="fa fa-search"></i>
                  <input class="form-control-plaintext" placeholder="Procurar denúncia, caso ou utilizador...">
                </div>
              </form>
              <span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
            </li>
          </ul>
        </div>
        <div class="nav-right col pull-right right-menu p-0">
          <ul class="nav-menus">
            <li>
              <a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a>
            </li>
            <li class="onhover-dropdown">
              <div class="bookmark-box"><i data-feather="star"></i></div>
              <div class="bookmark-dropdown onhover-show-div">
                <div class="form-group mb-0">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                    <input class="form-control" type="text" placeholder="Pesquisar atalhos...">
                  </div>
                </div>
                <ul class="m-t-5">
                  <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="inbox"></i>Nova Denúncia<span class="pull-right"><i data-feather="star"></i></span></li>
                  <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="message-square"></i>Mensagens<span class="pull-right"><i data-feather="star"></i></span></li>
                  <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="command"></i>Casos Ativos<span class="pull-right"><i data-feather="star"></i></span></li>
                  <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="airplay"></i>Relatórios<span class="pull-right"><i data-feather="star"></i></span></li>
                </ul>
              </div>
            </li>
            <li class="onhover-dropdown">
              <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
              <ul class="notification-dropdown onhover-show-div">
                <li>
                  <p class="f-w-700 mb-0">Notificações<span class="pull-right badge badge-primary badge-pill">3</span></p>
                </li>
                <li class="noti-primary">
                  <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                    <div class="media-body">
                      <p>Nova denúncia recebida</p><span>10 minutos atrás</span>
                    </div>
                  </div>
                </li>
                <li class="noti-secondary">
                  <div class="media"><span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                    <div class="media-body">
                      <p>Denúncia validada</p><span>1 hora atrás</span>
                    </div>
                  </div>
                </li>
                <li class="noti-success">
                  <div class="media"><span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                    <div class="media-body">
                      <p>Relatório gerado</p><span>3 horas atrás</span>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li>
              <div class="mode"><i class="fa fa-moon-o"></i></div>
            </li>
            <li class="onhover-dropdown"><i data-feather="message-square"></i>
              <ul class="chat-dropdown onhover-show-div">
                <li>
                  <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/4.jpg" alt="">
                    <div class="media-body"><span>Coordenador LFC</span>
                      <p class="f-12 light-font">Nova atualização disponível no caso #145.</p>
                    </div>
                    <p class="f-12">32 min atrás</p>
                  </div>
                </li>
                <li>
                  <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/1.jpg" alt="">
                    <div class="media-body"><span>Gestor de Caso</span>
                      <p class="f-12 light-font">Favor validar a denúncia #198.</p>
                    </div>
                    <p class="f-12">58 min atrás</p>
                  </div>
                </li>
                <li class="text-center"> <a class="f-w-700" href="javascript:void(0)">Ver todas</a></li>
              </ul>
            </li>
            <li class="onhover-dropdown p-0">
              <button class="btn btn-primary-light" type="button"><a href="login_two.html"><i data-feather="log-out"></i>Sair</a></button>
            </li>
          </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
      </div>
    </div>
    <!-- Page Header End-->


    <!-- Page Header Ends   
       
      
      
      
      -->
<<<<<<< Updated upstream
    <!-- Page Body Start-->
    <div class="page-body-wrapper horizontal-menu">
      <!-- Page Sidebar Start-->
=======
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
  
        
        <header class="main-nav">
  <div class="sidebar-user text-center">
    <a class="setting-primary" href="javascript:void(0)">
      <i data-feather="settings"></i>
    </a>
    <img class="img-90 rounded-circle" src="../assets/images/dashboard/1.png" alt="">
    <div class="badge-bottom">
      <span class="badge badge-primary">Ativo</span>
    </div>
    <a href="user-profile.html">
      <h6 class="mt-3 f-14 f-w-600">Gestor de Casos</h6>
    </a>
    <p class="mb-0 font-roboto">Linha Fala Criança</p>
  </div>

  <nav>
    <div class="main-navbar">
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
      <div id="mainnav">           
        <ul class="nav-menu custom-scrollbar">

          <li class="back-btn">
            <div class="mobile-back text-end">
              <span>Voltar</span>
              <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
            </div>
          </li>

          <!-- Painel -->
          <li class="sidebar-main-title">
            <div><h6>Painel</h6></div>
          </li>
          <li>
            <a class="nav-link" href="index.html"><i data-feather="home"></i><span>Visão Geral</span></a>
          </li>

          <!-- Denúncias -->
          <li class="sidebar-main-title">
            <div><h6>Gestão de Denúncias</h6></div>
          </li>
          <li class="dropdown">
            <a class="nav-link menu-title" href="javascript:void(0)">
              <i data-feather="file-text"></i><span>Denúncias</span></a>
            <ul class="nav-submenu menu-content">
              <li><a href="#">Nova Denúncia</a></li>
              <li><a href="#">Todas as Denúncias</a></li>
              <li><a href="#">Tipos de Denúncia</a></li>
              <li><a href="#">Estados das Denúncias</a></li>
            </ul>
          </li>

          <!-- Casos -->
          <li class="dropdown">
            <a class="nav-link menu-title" href="javascript:void(0)">
              <i data-feather="briefcase"></i><span>Casos</span></a>
            <ul class="nav-submenu menu-content">
              <li><a href="#">Casos Ativos</a></li>
              <li><a href="#">Casos Encerrados</a></li>
              <li><a href="#">Atribuição a Gestores</a></li>
              <li><a href="#">Acompanhamento</a></li>
            </ul>
          </li>

          <!-- Crianças e Envolvidos -->
          <li class="dropdown">
            <a class="nav-link menu-title" href="javascript:void(0)">
              <i data-feather="users"></i><span>Crianças e Envolvidos</span></a>
            <ul class="nav-submenu menu-content">
              <li><a href="#l">Registo de Crianças</a></li>
              <li><a href="#">Agressores</a></li>
              <li><a href="#">Familiares</a></li>
              <li><a href="#">Instituições de Apoio</a></li>
            </ul>
          </li>

          <!-- Relatórios -->
          <li class="sidebar-main-title">
            <div><h6>Relatórios e Estatísticas</h6></div>
          </li>
          <li class="dropdown">
            <a class="nav-link menu-title" href="javascript:void(0)">
              <i data-feather="bar-chart-2"></i><span>Relatórios</span></a>
            <ul class="nav-submenu menu-content">
              <li><a href="#">Relatório Geral</a></li>
              <li><a href="#">Por Tipo de Denúncia</a></li>
              <li><a href="#">Por Província</a></li>
              <li><a href="#">Por Período</a></li>
            </ul>
          </li>

          <!-- Configurações -->
          <li class="sidebar-main-title">
            <div><h6>Administração</h6></div>
          </li>
          <li class="dropdown">
            <a class="nav-link menu-title" href="javascript:void(0)">
              <i data-feather="settings"></i><span>Configurações</span></a>
            <ul class="nav-submenu menu-content">
              <li><a href="{{ route('users') }}">Gestão de Utilizadores</a></li>
              <li><a href="#">Perfis e Permissões</a></li>
              <li><a href="#">Parâmetros do Sistema</a></li>
            </ul>
          </li>

          <!-- Suporte -->
          <li class="sidebar-main-title">
            <div><h6>Ajuda</h6></div>
          </li>
          <li>
            <a class="nav-link" href="#"><i data-feather="help-circle"></i><span>Perguntas Frequentes</span></a>
          </li>
          <li>
            <a class="nav-link" href="#"><i data-feather="phone"></i><span>Contacto de Suporte</span></a>
          </li>

          <!-- Logout -->
          <li>
            <a class="nav-link" href="login.html"><i data-feather="log-out"></i><span>Sair</span></a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</header>

        
        <!-- Page Sidebar Ends-->
>>>>>>> Stashed changes


      <header class="main-nav">
        <div class="sidebar-user text-center">
          <a class="setting-primary" href="javascript:void(0)">
            <i data-feather="settings"></i>
          </a>
          <img class="img-90 rounded-circle" src="../assets/images/dashboard/1.png" alt="">
          <div class="badge-bottom">
            <span class="badge badge-primary">Ativo</span>
          </div>
          <a href="user-profile.html">
            <h6 class="mt-3 f-14 f-w-600">Gestor de Casos</h6>
          </a>
          <p class="mb-0 font-roboto">Linha Fala Criança</p>
        </div>

        <nav>
          <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
              <ul class="nav-menu custom-scrollbar">

                <li class="back-btn">
                  <div class="mobile-back text-end">
                    <span>Voltar</span>
                    <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                  </div>
                </li>

                <!-- Painel -->
                <li class="sidebar-main-title">
                  <div>
                    <h6>Painel</h6>
                  </div>
                </li>
                <li>
                  <a class="nav-link" href="index.html"><i data-feather="home"></i><span>Visão Geral</span></a>
                </li>

                <!-- Denúncias -->
                <li class="sidebar-main-title">
                  <div>
                    <h6>Gestão de Denúncias</h6>
                  </div>
                </li>
                <li class="dropdown">
                  <a class="nav-link menu-title" href="javascript:void(0)">
                    <i data-feather="file-text"></i><span>Denúncias</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="#">Nova Denúncia</a></li>
                    <li><a href="#">Todas as Denúncias</a></li>
                    <li><a href="#">Tipos de Denúncia</a></li>
                    <li><a href="#">Estados das Denúncias</a></li>
                  </ul>
                </li>

                <!-- Casos -->
                <li class="dropdown">
                  <a class="nav-link menu-title" href="javascript:void(0)">
                    <i data-feather="briefcase"></i><span>Casos</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="#">Casos Ativos</a></li>
                    <li><a href="#">Casos Encerrados</a></li>
                    <li><a href="#">Atribuição a Gestores</a></li>
                    <li><a href="#">Acompanhamento</a></li>
                  </ul>
                </li>

                <!-- Crianças e Envolvidos -->
                <li class="dropdown">
                  <a class="nav-link menu-title" href="javascript:void(0)">
                    <i data-feather="users"></i><span>Crianças e Envolvidos</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="#l">Registo de Crianças</a></li>
                    <li><a href="#">Agressores</a></li>
                    <li><a href="#">Familiares</a></li>
                    <li><a href="#">Instituições de Apoio</a></li>
                  </ul>
                </li>

                <!-- Relatórios -->
                <li class="sidebar-main-title">
                  <div>
                    <h6>Relatórios e Estatísticas</h6>
                  </div>
                </li>
                <li class="dropdown">
                  <a class="nav-link menu-title" href="javascript:void(0)">
                    <i data-feather="bar-chart-2"></i><span>Relatórios</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="#">Relatório Geral</a></li>
                    <li><a href="#">Por Tipo de Denúncia</a></li>
                    <li><a href="#">Por Província</a></li>
                    <li><a href="#">Por Período</a></li>
                  </ul>
                </li>

                <!-- Configurações -->
                <li class="sidebar-main-title">
                  <div>
                    <h6>Administração</h6>
                  </div>
                </li>
                <li class="dropdown">
                  <a class="nav-link menu-title" href="javascript:void(0)">
                    <i data-feather="settings"></i><span>Configurações</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="#">Gestão de Utilizadores</a></li>
                    <li><a href="#">Perfis e Permissões</a></li>
                    <li><a href="#">Parâmetros do Sistema</a></li>
                  </ul>
                </li>

                <!-- Suporte -->
                <li class="sidebar-main-title">
                  <div>
                    <h6>Ajuda</h6>
                  </div>
                </li>
                <li>
                  <a class="nav-link" href="#"><i data-feather="help-circle"></i><span>Perguntas Frequentes</span></a>
                </li>
                <li>
                  <a class="nav-link" href="#"><i data-feather="phone"></i><span>Contacto de Suporte</span></a>
                </li>

                <!-- Logout -->
                <li>
                  <a class="nav-link" href="login.html"><i data-feather="log-out"></i><span>Sair</span></a>
                </li>

              </ul>
            </div>
          </div>
        </nav>
      </header>


      <!-- Page Sidebar Ends-->



  <!-- Conteúdo principal -->
  <div class="page-body">
      <div class="container-fluid">
        <div class="page-header">
          <div class="row">
            <div class="col-sm-6">
              <h3>Todas as Denúncias</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Denúncias</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row project-cards">
          <div class="col-md-12 project-list">
            <div class="card">
              <div class="row m-0 p-3 align-items-center">
                <div class="col-md-4">
                  <ul class="nav nav-tabs border-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-todos"><i data-feather="target"></i> Todas</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-andamento"><i data-feather="refresh-cw"></i> Em Andamento</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-concluidas"><i data-feather="check-circle"></i> Concluídas</a></li>
                  </ul>
                </div>
                <div class="col-md-4 d-flex gap-2 align-items-center">
                  <input type="date" class="form-control form-control-sm" id="start-date">
                  <input type="date" class="form-control form-control-sm" id="end-date">
                  <button class="btn btn-outline-primary btn-sm" id="btn-refresh">
                    <i data-feather="refresh-cw" class="me-1"></i> Actualizar
                  </button>
                </div>
                <div class="col-md-4 text-end">
                  <a class="btn btn-primary" href="formDenuncia.html"><i data-feather="plus-square"></i> Nova Denúncia</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tab-todos">
                    <div class="row" id="cards-container"></div>
                  </div>
                  <div class="tab-pane fade" id="tab-andamento">
                    <div class="row" id="cards-container-andamento"></div>
                  </div>
                  <div class="tab-pane fade" id="tab-concluidas">
                    <div class="row" id="cards-container-concluidas"></div>
                  </div>
                </div>

                <!-- Paginação será inserida aqui -->
                <div id="pagination-container" class="col-12"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      <!-- Container-fluid Ends-->
    </div>


    <!-- footer start-->
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 footer-copyright">
            <p class="mb-0">Copyright 2021-22 © Linha116 All rights reserved.</p>
          </div>
          <div class="col-md-6">
            <p class="pull-right mb-0"> Kamba <i class="fa fa- font-secondary"></i></p>
          </div>
        </div>
      </div>
    </footer>
  </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- SCRIPT PRINCIPAL COM PAGINAÇÃO E FILTROS -->
<script>
  const API_BASE = 'http://127.0.0.1:9800/api/reports';
  const API_FILTER = 'http://127.0.0.1:9800/api/reports/filter';
  let currentPage = 1;
  let totalPages = 1;
  let currentFilters = {};

  function formatDate(dateString) {
    const date = new Date(dateString);
    const d = String(date.getDate()).padStart(2, '0');
    const m = String(date.getMonth() + 1).padStart(2, '0');
    const y = date.getFullYear();
    const h = String(date.getHours()).padStart(2, '0');
    const min = String(date.getMinutes()).padStart(2, '0');
    return `${d}/${m}/${y} ${h}:${min}`;
  }

  function getStatusBadge(status) {
    const s = (status || '').toLowerCase();
    if (s.includes('pendente')) return '<span class="badge badge-warning">Pendente</span>';
    if (s.includes('andamento') || s.includes('progress')) return '<span class="badge badge-primary">Em Andamento</span>';
    if (s.includes('conclu') || s.includes('done')) return '<span class="badge badge-success">Concluído</span>';
    return '<span class="badge badge-secondary">' + status + '</span>';
  }

  function generateCode(id) {
    return 'L116' + String(id).padStart(4, '0');
  }

  function createCard(report) {
    const priority = report.priority ? report.priority.toUpperCase() : 'NORMAL';
    const priorityClass = priority === 'URGENTE' ? 'text-danger' : '';

    return `
      <div class="col-xxl-4 col-lg-6">
        <div class="project-box">
          ${getStatusBadge(report.status?.name)}
          <h6>${report.title || 'Sem título'}</h6>
          <div class="media mb-2">
            <img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="">
            <div class="media-body">
              <p><strong>Reportador:</strong> ${report.reporter?.full_name || 'Anónimo'}</p>
              <p><strong>Tipo:</strong> ${report.report_type?.name || 'N/D'}</p>
            </div>
          </div>
          <p><em>${report.description || 'Sem descrição'}</em></p>
          <div class="row details mb-2">
            <div class="col-12"><strong>Código:</strong> ${generateCode(report.id)}</div>
            <div class="col-12"><strong>Data:</strong> ${formatDate(report.creation_date)}</div>
            <div class="col-12"><strong>Distrito:</strong> ${report.district?.name || 'N/D'}</div>
            <div class="col-12"><strong>Prioridade:</strong> <span class="${priorityClass}">${priority}</span></div>
          </div>
          <div class="customers mb-2">
            <ul>
              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt=""></li>
              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt=""></li>
              <li class="d-inline-block ms-2"><p class="f-12">+2</p></li>
            </ul>
          </div>
          <div class="project-status mt-2">
            <div class="progress" style="height:6px"><div class="progress-bar-animated bg-primary progress-bar-striped" style="width:35%"></div></div>
          </div>
          <div class="dropdown mt-3 text-end">
            <a href="#" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v fa-lg"></i></a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="detalheDenuncia.html?id=${report.id}"><i class="fa fa-eye me-2 text-primary"></i> Ver Detalhes</a></li>
              <li><a class="dropdown-item text-danger" href="#"><i class="fa fa-trash me-2"></i> Eliminar</a></li>
            </ul>
          </div>
        </div>
      </div>`;
  }

  function renderPagination() {
    let container = document.getElementById('pagination-container');
    if (!container) {
      container = document.createElement('div');
      container.id = 'pagination-container';
      container.className = 'col-12';
      document.querySelector('.card-body').appendChild(container);
    }

    const prev = currentPage <= 1 ? 'disabled' : '';
    const next = currentPage >= totalPages ? 'disabled' : '';

    container.innerHTML = `
      <nav class="mt-4">
        <ul class="pagination justify-content-center">
          <li class="page-item ${prev}"><a class="page-link" href="#" data-page="${currentPage-1}">Anterior</a></li>
          ${Array.from({length: Math.min(5, totalPages)}, (_, i) => {
            const p = currentPage <= 3 ? i + 1 : currentPage - 2 + i;
            if (p > totalPages) return '';
            return `<li class="page-item ${p === currentPage ? 'active' : ''}"><a class="page-link" href="#" data-page="${p}">${p}</a></li>`;
          }).join('')}
          <li class="page-item ${next}"><a class="page-link" href="#" data-page="${currentPage+1}">Próximo</a></li>
        </ul>
        <div class="text-center text-muted small">
          Página ${currentPage} de ${totalPages} | 
          Total: <strong>${document.querySelectorAll('.project-box').length}</strong> denúncias exibidas
        </div>
      </nav>`;

    container.querySelectorAll('.page-link').forEach(link => {
      link.addEventListener('click', e => {
        e.preventDefault();
        const page = parseInt(link.dataset.page);
        if (page > 0 && page <= totalPages && page !== currentPage) {
          currentPage = page;
          loadReports();
        }
      });
    });
  }

  function loadReports() {
    const token = localStorage.getItem('auth_token');
    if (!token) { Swal.fire('Erro', 'Faça login primeiro.', 'error'); return; }

    const container = document.querySelector('.tab-pane.active .row');
    container.innerHTML = '<div class="col-12 text-center py-5"><div class="spinner-border text-primary" style="width:3rem;height:3rem;"></div></div>';

    let url = API_BASE;
    const params = new URLSearchParams({ page: currentPage, per_page: 9 });

    if (Object.keys(currentFilters).length > 0) {
      url = API_FILTER;
      Object.keys(currentFilters).forEach(k => params.append(k, currentFilters[k]));
    }

    fetch(url + '?' + params, {
      headers: { 'Authorization': 'Bearer ' + token }
    })
    .then(r => r.json())
    .then(res => {
      if (res.status !== 200) throw new Error(res.message || 'Erro');
      const data = res.data;
      const reports = data.reports || data;

      container.innerHTML = reports.length ? '' : '<div class="col-12 text-center py-5 text-muted h5">Nenhuma denúncia encontrada.</div>';
      reports.forEach(r => container.insertAdjacentHTML('beforeend', createCard(r)));

      totalPages = data.pages || 1;
      currentPage = data.current_page || currentPage;
      renderPagination();
    })
    .catch(err => {
      container.innerHTML = '<div class="col-12 text-center py-5 text-danger">Erro ao carregar denúncias.</div>';
      console.error(err);
    });
  }

  // Eventos
  document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('btn-refresh').addEventListener('click', e => {
      e.preventDefault();
      currentFilters = {
        start_date: document.getElementById('start-date').value,
        end_date: document.getElementById('end-date').value
      };
      currentPage = 1;
      loadReports();
    });

    // Mudança de aba
    document.querySelectorAll('[data-bs-toggle="tab"]').forEach(tab => {
      tab.addEventListener('shown.bs.tab', () => { currentPage = 1; loadReports(); });
    });

    loadReports(); // Carrega ao abrir
  });

  // Resolve erro do sidebar-menu.js (Viho)
  setTimeout(() => {
    if (typeof perfectScrollbar !== 'undefined' && perfectScrollbar.update) perfectScrollbar.update();
    if (window.sidebarToggle) window.sidebarToggle();
  }, 800);
</script>




  <!-- latest jquery-->
  <script src="../assets/js/jquery-3.5.1.min.js"></script>
  <!-- feather icon js-->
  <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- Sidebar jquery-->
  <script src="../assets/js/sidebar-menu.js"></script>
  <script src="../assets/js/config.js"></script>
  <!-- Bootstrap js-->
  <script src="../assets/js/bootstrap/popper.min.js"></script>
  <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
  <!-- Plugins JS start-->
  <script src="../assets/js/prism/prism.min.js"></script>
  <script src="../assets/js/clipboard/clipboard.min.js"></script>
  <script src="../assets/js/custom-card/custom-card.js"></script>
  <script src="../assets/js/height-equal.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/theme-customizer/customizer.js"></script>
  <!-- login js-->
  <!-- Plugin used-->
</body>

</html>

<!-- Informações da vítima e tipo de caso -->
<div class="media mb-2">
  <img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="Vitima" title="Vitima">
  <div class="media-body">
    <p><strong>Nome da Vítima:</strong>Lurdes Telma M.</p>
    <p><strong>Tipo de Caso:</strong> Violencia Sexual </p>
  </div>
</div>

<!-- Resumo da denúncia -->
<p><em>Recebida às 10h30, criança relata violencia sexual no ambiente familiar. Encaminhada para análise urgente do serviço social.</em></p>

<!-- Detalhes do acompanhamento -->
<div class="row details mb-2">
  <div class="row details mb-2">
    <div class="col-12 mb-1">
      <span><strong>Código da Denúncia:</strong> L1160001</span>
    </div>
    <div class="col-12 mb-1">
      <span><strong>Data e Hora da Denúncia:</strong> 12/09/2025 14:30</span>
    </div>
    <div class="col-12 mb-1">
      <span><strong>Origem:</strong> APP116</span>
    </div>
    <div class="col-12 mb-1">
      <span><strong>Prioridade:</strong> URGENTE</span>
    </div>
  </div>
</div>



<!-- Responsáveis / Envolvidos -->
<div class="customers mb-2">
  <ul>
    <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Assistente Social" title="Assistente Social"></li>
    <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Polícia" title="Polícia"></li>
    <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Conselho Tutelar" title="Conselho Tutelar"></li>
    <li class="d-inline-block ms-2">
      <p class="f-12">+3 Mais</p>
    </li>
  </ul>
</div>

<!-- Progresso do atendimento -->
<div class="project-status mt-2">
  <div class="media mb-1">
    <p>45%</p>
    <div class="media-body text-end"><span>Estágio de atendimento</span></div>
  </div>
  <div class="progress" style="height: 6px; border-radius: 3px;">
    <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
  </div>

</div>

<!-- Pequeno menu discreto de ações -->

<div class="dropdown mt-2 text-end">

  <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-dark"><i class="fa fa-ellipsis-v fa-lg"></i></a>
  <ul class="dropdown-menu dropdown-menu-end shadow-sm">
    <li>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <i class="fa fa-eye me-2 text-primary"></i> Visão Geral
      </a>
    </li>
    <a class="dropdown-item d-flex align-items-center" href="#">
      <i class="fa fa-clock-o me-2 text-warning"></i> Retirar da Urgência
    </a>
    </li>
    <li>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <i class="fa fa-check-circle me-2 text-success"></i> Aprovar Caso
      </a>
    </li>
    <li>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <i class="fa fa-times-circle me-2 text-secondary"></i> Reprovar
      </a>
    </li>
    <li>
      <a class="dropdown-item d-flex align-items-center text-danger" href="#">
        <i class="fa fa-trash me-2"></i> Eliminar
      </a>
    </li>
  </ul>
</div>
</div>
</div>



<div class="col-xxl-4 col-lg-6">
  <div class="project-box"><span class="badge badge-secondary">Done</span>

    <!-- Status do caso -->
    <span class="badge badge-primary">Doing</span>

    <!-- Localização do caso -->
    <h6>Nampulo - Monapo </h6>

    <!-- Informações da vítima e tipo de caso -->
    <div class="media mb-2">
      <img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="Vitima" title="Vitima">
      <div class="media-body">
        <p><strong>Nome da Vítima:</strong>Paula Felismina M.</p>
        <p><strong>Tipo de Caso:</strong> Violencia Domestica </p>
      </div>
    </div>

    <!-- Resumo da denúncia -->
    <p><em>Recebida às 14h30, criança relata agressões no ambiente familiar. Encaminhada para análise urgente do serviço social.</em></p>

    <!-- Detalhes do acompanhamento -->
    <div class="row details mb-2">
      <div class="row details mb-2">
        <div class="col-12 mb-1">
          <span><strong>Código da Denúncia:</strong> L1160003</span>
        </div>
        <div class="col-12 mb-1">
          <span><strong>Data e Hora da Denúncia:</strong> 12/09/2025 18:30</span>
        </div>
        <div class="col-12 mb-1">
          <span><strong>Origem:</strong> APP116</span>
        </div>
        <div class="col-12 mb-1">
          <span><strong>Prioridade:</strong> <span class="text-danger">URGENTE</span></span>
        </div>
      </div>
    </div>



    <!-- Responsáveis / Envolvidos -->
    <div class="customers mb-2">
      <ul>
        <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Assistente Social" title="Assistente Social"></li>
        <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Polícia" title="Polícia"></li>
        <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Conselho Tutelar" title="Conselho Tutelar"></li>
        <li class="d-inline-block ms-2">
          <p class="f-12">+3 Mais</p>
        </li>
      </ul>
    </div>

    <!-- Progresso do atendimento -->
    <div class="project-status mt-2">
      <div class="media mb-1">
        <p>45%</p>
        <div class="media-body text-end"><span>Estágio de atendimento</span></div>
      </div>
      <div class="progress" style="height: 6px; border-radius: 3px;">
        <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

    </div>

    <!-- Pequeno menu discreto de ações -->

    <div class="dropdown mt-2 text-end">

      <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-dark"><i class="fa fa-ellipsis-v fa-lg"></i></a>
      <ul class="dropdown-menu dropdown-menu-end shadow-sm">
        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="fa fa-eye me-2 text-primary"></i> Visão Geral
          </a>
        </li>
        <a class="dropdown-item d-flex align-items-center" href="#">
          <i class="fa fa-clock-o me-2 text-warning"></i> Retirar da Urgência
        </a>
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="fa fa-check-circle me-2 text-success"></i> Aprovar Caso
          </a>
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="fa fa-times-circle me-2 text-secondary"></i> Reprovar
          </a>
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center text-danger" href="#">
            <i class="fa fa-trash me-2"></i> Eliminar
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>



<div class="col-xxl-4 col-lg-6">
  <div class="project-box"><span class="badge badge-secondary">Done</span>

    <!-- Status do caso -->
    <span class="badge badge-primary">Doing</span>

    <!-- Localização do caso -->
    <h6>Maputo Cidade - Maxaquene</h6>

    <!-- Informações da vítima e tipo de caso -->
    <div class="media mb-2">
      <img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="Vitima" title="Vitima">
      <div class="media-body">
        <p><strong>Nome da Vítima:</strong>Maria Antonia M.</p>
        <p><strong>Tipo de Caso:</strong> Abuso Infantil </p>
      </div>
    </div>

    <!-- Resumo da denúncia -->
    <p><em>Recebida às 14h30, criança relata agressões no ambiente familiar. Encaminhada para análise urgente do serviço social.</em></p>

    <!-- Detalhes do acompanhamento -->
    <div class="row details mb-2">
      <div class="row details mb-2">
        <div class="col-12 mb-1">
          <span><strong>Código da Denúncia:</strong> L1160001</span>
        </div>
        <div class="col-12 mb-1">
          <span><strong>Data e Hora da Denúncia:</strong> 12/09/2025 14:30</span>
        </div>
        <div class="col-12 mb-1">
          <span><strong>Origem:</strong> APP116</span>
        </div>
        <div class="col-12 mb-1">
          <span><strong>Prioridade:</strong> URGENTE</span>
        </div>
      </div>
    </div>



    <!-- Responsáveis / Envolvidos -->
    <div class="customers mb-2">
      <ul>
        <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Assistente Social" title="Assistente Social"></li>
        <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Polícia" title="Polícia"></li>
        <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Conselho Tutelar" title="Conselho Tutelar"></li>
        <li class="d-inline-block ms-2">
          <p class="f-12">+3 Mais</p>
        </li>
      </ul>
    </div>

    <!-- Progresso do atendimento -->
    <div class="project-status mt-2">
      <div class="media mb-1">
        <p>45%</p>
        <div class="media-body text-end"><span>Estágio de atendimento</span></div>
      </div>
      <div class="progress" style="height: 6px; border-radius: 3px;">
        <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

    </div>

    <!-- Pequeno menu discreto de ações -->

    <div class="dropdown mt-2 text-end">

      <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-dark"><i class="fa fa-ellipsis-v fa-lg"></i></a>
      <ul class="dropdown-menu dropdown-menu-end shadow-sm">
        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="fa fa-eye me-2 text-primary"></i> Visão Geral
          </a>
        </li>
        <a class="dropdown-item d-flex align-items-center" href="#">
          <i class="fa fa-clock-o me-2 text-warning"></i> Retirar da Urgência
        </a>
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="fa fa-check-circle me-2 text-success"></i> Aprovar Caso
          </a>
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="fa fa-times-circle me-2 text-secondary"></i> Reprovar
          </a>
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center text-danger" href="#">
            <i class="fa fa-trash me-2"></i> Eliminar
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>


<div class="col-xxl-4 col-lg-6">
  <div class="project-box"><span class="badge badge-secondary">Done</span>

    <!-- Status do caso -->
    <span class="badge badge-primary">Doing</span>

    <!-- Localização do caso -->
    <h6>Maputo Cidade - Maxaquene</h6>

    <!-- Informações da vítima e tipo de caso -->
    <div class="media mb-2">
      <img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="Vitima" title="Vitima">
      <div class="media-body">
        <p><strong>Nome da Vítima:</strong>Maria Antonia M.</p>
        <p><strong>Tipo de Caso:</strong> Abuso Infantil </p>
      </div>
    </div>

    <!-- Resumo da denúncia -->
    <p><em>Recebida às 14h30, criança relata agressões no ambiente familiar. Encaminhada para análise urgente do serviço social.</em></p>

    <!-- Detalhes do acompanhamento -->
    <div class="row details mb-2">
      <div class="row details mb-2">
        <div class="col-12 mb-1">
          <span><strong>Código da Denúncia:</strong> L1160001</span>
        </div>
        <div class="col-12 mb-1">
          <span><strong>Data e Hora da Denúncia:</strong> 12/09/2025 14:30</span>
        </div>
        <div class="col-12 mb-1">
          <span><strong>Origem:</strong> APP116</span>
        </div>
        <div class="col-12 mb-1">
          <span><strong>Prioridade:</strong> URGENTE</span>
        </div>
      </div>
    </div>



    <!-- Responsáveis / Envolvidos -->
    <div class="customers mb-2">
      <ul>
        <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Assistente Social" title="Assistente Social"></li>
        <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Polícia" title="Polícia"></li>
        <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Conselho Tutelar" title="Conselho Tutelar"></li>
        <li class="d-inline-block ms-2">
          <p class="f-12">+3 Mais</p>
        </li>
      </ul>
    </div>

    <!-- Progresso do atendimento -->
    <div class="project-status mt-2">
      <div class="media mb-1">
        <p>45%</p>
        <div class="media-body text-end"><span>Estágio de atendimento</span></div>
      </div>
      <div class="progress" style="height: 6px; border-radius: 3px;">
        <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

    </div>

    <!-- Pequeno menu discreto de ações -->

    <div class="dropdown mt-2 text-end">

      <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-dark"><i class="fa fa-ellipsis-v fa-lg"></i></a>
      <ul class="dropdown-menu dropdown-menu-end shadow-sm">
        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="fa fa-eye me-2 text-primary"></i> Visão Geral
          </a>
        </li>
        <a class="dropdown-item d-flex align-items-center" href="#">
          <i class="fa fa-clock-o me-2 text-warning"></i> Retirar da Urgência
        </a>
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="fa fa-check-circle me-2 text-success"></i> Aprovar Caso
          </a>
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="fa fa-times-circle me-2 text-secondary"></i> Reprovar
          </a>
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center text-danger" href="#">
            <i class="fa fa-trash me-2"></i> Eliminar
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>

</div>



<div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
  <div class="row">
    <div class="col-xxl-4 col-lg-6">
      <div class="project-box"><span class="badge badge-secondary">Done</span>

        <!-- Status do caso -->
        <span class="badge badge-primary">Doing</span>

        <!-- Localização do caso -->
        <h6>Maputo Cidade - Maxaquene</h6>

        <!-- Informações da vítima e tipo de caso -->
        <div class="media mb-2">
          <img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="Vitima" title="Vitima">
          <div class="media-body">
            <p><strong>Nome da Vítima:</strong>Maria Antonia M.</p>
            <p><strong>Tipo de Caso:</strong> Abuso Infantil </p>
          </div>
        </div>

        <!-- Resumo da denúncia -->
        <p><em>Recebida às 14h30, criança relata agressões no ambiente familiar. Encaminhada para análise urgente do serviço social.</em></p>

        <!-- Detalhes do acompanhamento -->
        <div class="row details mb-2">
          <div class="row details mb-2">
            <div class="col-12 mb-1">
              <span><strong>Código da Denúncia:</strong> L1160001</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Data e Hora da Denúncia:</strong> 12/09/2025 14:30</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Origem:</strong> APP116</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Prioridade:</strong> URGENTE</span>
            </div>
          </div>
        </div>



        <!-- Responsáveis / Envolvidos -->
        <div class="customers mb-2">
          <ul>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Assistente Social" title="Assistente Social"></li>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Polícia" title="Polícia"></li>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Conselho Tutelar" title="Conselho Tutelar"></li>
            <li class="d-inline-block ms-2">
              <p class="f-12">+3 Mais</p>
            </li>
          </ul>
        </div>

        <!-- Progresso do atendimento -->
        <div class="project-status mt-2">
          <div class="media mb-1">
            <p>45%</p>
            <div class="media-body text-end"><span>Estágio de atendimento</span></div>
          </div>
          <div class="progress" style="height: 6px; border-radius: 3px;">
            <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

        </div>

        <!-- Pequeno menu discreto de ações -->

        <div class="dropdown mt-2 text-end">

          <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-dark"><i class="fa fa-ellipsis-v fa-lg"></i></a>
          <ul class="dropdown-menu dropdown-menu-end shadow-sm">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-eye me-2 text-primary"></i> Visão Geral
              </a>
            </li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="fa fa-clock-o me-2 text-warning"></i> Retirar da Urgência
            </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-check-circle me-2 text-success"></i> Aprovar Caso
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-times-circle me-2 text-secondary"></i> Reprovar
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                <i class="fa fa-trash me-2"></i> Eliminar
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>


    <div class="col-xxl-4 col-lg-6">
      <div class="project-box"><span class="badge badge-secondary">Done</span>

        <!-- Status do caso -->
        <span class="badge badge-primary">Doing</span>

        <!-- Localização do caso -->
        <h6>Maputo Cidade - Maxaquene</h6>

        <!-- Informações da vítima e tipo de caso -->
        <div class="media mb-2">
          <img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="Vitima" title="Vitima">
          <div class="media-body">
            <p><strong>Nome da Vítima:</strong>Maria Antonia M.</p>
            <p><strong>Tipo de Caso:</strong> Abuso Infantil </p>
          </div>
        </div>

        <!-- Resumo da denúncia -->
        <p><em>Recebida às 14h30, criança relata agressões no ambiente familiar. Encaminhada para análise urgente do serviço social.</em></p>

        <!-- Detalhes do acompanhamento -->
        <div class="row details mb-2">
          <div class="row details mb-2">
            <div class="col-12 mb-1">
              <span><strong>Código da Denúncia:</strong> L1160001</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Data e Hora da Denúncia:</strong> 12/09/2025 14:30</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Origem:</strong> APP116</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Prioridade:</strong> URGENTE</span>
            </div>
          </div>
        </div>



        <!-- Responsáveis / Envolvidos -->
        <div class="customers mb-2">
          <ul>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Assistente Social" title="Assistente Social"></li>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Polícia" title="Polícia"></li>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Conselho Tutelar" title="Conselho Tutelar"></li>
            <li class="d-inline-block ms-2">
              <p class="f-12">+3 Mais</p>
            </li>
          </ul>
        </div>

        <!-- Progresso do atendimento -->
        <div class="project-status mt-2">
          <div class="media mb-1">
            <p>45%</p>
            <div class="media-body text-end"><span>Estágio de atendimento</span></div>
          </div>
          <div class="progress" style="height: 6px; border-radius: 3px;">
            <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

        </div>

        <!-- Pequeno menu discreto de ações -->

        <div class="dropdown mt-2 text-end">

          <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-dark"><i class="fa fa-ellipsis-v fa-lg"></i></a>
          <ul class="dropdown-menu dropdown-menu-end shadow-sm">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-eye me-2 text-primary"></i> Visão Geral
              </a>
            </li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="fa fa-clock-o me-2 text-warning"></i> Retirar da Urgência
            </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-check-circle me-2 text-success"></i> Aprovar Caso
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-times-circle me-2 text-secondary"></i> Reprovar
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                <i class="fa fa-trash me-2"></i> Eliminar
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>


    <div class="col-xxl-4 col-lg-6">
      <div class="project-box"><span class="badge badge-secondary">Done</span>

        <!-- Status do caso -->
        <span class="badge badge-primary">Doing</span>

        <!-- Localização do caso -->
        <h6>Maputo Cidade - Maxaquene</h6>

        <!-- Informações da vítima e tipo de caso -->
        <div class="media mb-2">
          <img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="Vitima" title="Vitima">
          <div class="media-body">
            <p><strong>Nome da Vítima:</strong>Maria Antonia M.</p>
            <p><strong>Tipo de Caso:</strong> Abuso Infantil </p>
          </div>
        </div>

        <!-- Resumo da denúncia -->
        <p><em>Recebida às 14h30, criança relata agressões no ambiente familiar. Encaminhada para análise urgente do serviço social.</em></p>

        <!-- Detalhes do acompanhamento -->
        <div class="row details mb-2">
          <div class="row details mb-2">
            <div class="col-12 mb-1">
              <span><strong>Código da Denúncia:</strong> L1160001</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Data e Hora da Denúncia:</strong> 12/09/2025 14:30</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Origem:</strong> APP116</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Prioridade:</strong> URGENTE</span>
            </div>
          </div>
        </div>



        <!-- Responsáveis / Envolvidos -->
        <div class="customers mb-2">
          <ul>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Assistente Social" title="Assistente Social"></li>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Polícia" title="Polícia"></li>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Conselho Tutelar" title="Conselho Tutelar"></li>
            <li class="d-inline-block ms-2">
              <p class="f-12">+3 Mais</p>
            </li>
          </ul>
        </div>

        <!-- Progresso do atendimento -->
        <div class="project-status mt-2">
          <div class="media mb-1">
            <p>45%</p>
            <div class="media-body text-end"><span>Estágio de atendimento</span></div>
          </div>
          <div class="progress" style="height: 6px; border-radius: 3px;">
            <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

        </div>

        <!-- Pequeno menu discreto de ações -->

        <div class="dropdown mt-2 text-end">

          <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-dark"><i class="fa fa-ellipsis-v fa-lg"></i></a>
          <ul class="dropdown-menu dropdown-menu-end shadow-sm">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-eye me-2 text-primary"></i> Visão Geral
              </a>
            </li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="fa fa-clock-o me-2 text-warning"></i> Retirar da Urgência
            </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-check-circle me-2 text-success"></i> Aprovar Caso
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-times-circle me-2 text-secondary"></i> Reprovar
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                <i class="fa fa-trash me-2"></i> Eliminar
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>


    <div class="col-xxl-4 col-lg-6">
      <div class="project-box"><span class="badge badge-secondary">Done</span>

        <!-- Status do caso -->
        <span class="badge badge-primary">Doing</span>

        <!-- Localização do caso -->
        <h6>Maputo Cidade - Maxaquene</h6>

        <!-- Informações da vítima e tipo de caso -->
        <div class="media mb-2">
          <img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="Vitima" title="Vitima">
          <div class="media-body">
            <p><strong>Nome da Vítima:</strong>Maria Antonia M.</p>
            <p><strong>Tipo de Caso:</strong> Abuso Infantil </p>
          </div>
        </div>

        <!-- Resumo da denúncia -->
        <p><em>Recebida às 14h30, criança relata agressões no ambiente familiar. Encaminhada para análise urgente do serviço social.</em></p>

        <!-- Detalhes do acompanhamento -->
        <div class="row details mb-2">
          <div class="row details mb-2">
            <div class="col-12 mb-1">
              <span><strong>Código da Denúncia:</strong> L1160001</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Data e Hora da Denúncia:</strong> 12/09/2025 14:30</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Origem:</strong> APP116</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Prioridade:</strong> URGENTE</span>
            </div>
          </div>
        </div>



        <!-- Responsáveis / Envolvidos -->
        <div class="customers mb-2">
          <ul>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Assistente Social" title="Assistente Social"></li>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Polícia" title="Polícia"></li>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Conselho Tutelar" title="Conselho Tutelar"></li>
            <li class="d-inline-block ms-2">
              <p class="f-12">+3 Mais</p>
            </li>
          </ul>
        </div>

        <!-- Progresso do atendimento -->
        <div class="project-status mt-2">
          <div class="media mb-1">
            <p>45%</p>
            <div class="media-body text-end"><span>Estágio de atendimento</span></div>
          </div>
          <div class="progress" style="height: 6px; border-radius: 3px;">
            <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

        </div>

        <!-- Pequeno menu discreto de ações -->

        <div class="dropdown mt-2 text-end">

          <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-dark"><i class="fa fa-ellipsis-v fa-lg"></i></a>
          <ul class="dropdown-menu dropdown-menu-end shadow-sm">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-eye me-2 text-primary"></i> Visão Geral
              </a>
            </li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="fa fa-clock-o me-2 text-warning"></i> Retirar da Urgência
            </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-check-circle me-2 text-success"></i> Aprovar Caso
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-times-circle me-2 text-secondary"></i> Reprovar
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                <i class="fa fa-trash me-2"></i> Eliminar
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>


    <div class="col-xxl-4 col-lg-6">
      <div class="project-box"><span class="badge badge-secondary">Done</span>

        <!-- Status do caso -->
        <span class="badge badge-primary">Doing</span>

        <!-- Localização do caso -->
        <h6>Maputo Cidade - Maxaquene</h6>

        <!-- Informações da vítima e tipo de caso -->
        <div class="media mb-2">
          <img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="Vitima" title="Vitima">
          <div class="media-body">
            <p><strong>Nome da Vítima:</strong>Maria Antonia M.</p>
            <p><strong>Tipo de Caso:</strong> Abuso Infantil </p>
          </div>
        </div>

        <!-- Resumo da denúncia -->
        <p><em>Recebida às 14h30, criança relata agressões no ambiente familiar. Encaminhada para análise urgente do serviço social.</em></p>

        <!-- Detalhes do acompanhamento -->
        <div class="row details mb-2">
          <div class="row details mb-2">
            <div class="col-12 mb-1">
              <span><strong>Código da Denúncia:</strong> L1160001</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Data e Hora da Denúncia:</strong> 12/09/2025 14:30</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Origem:</strong> APP116</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Prioridade:</strong> URGENTE</span>
            </div>
          </div>
        </div>



        <!-- Responsáveis / Envolvidos -->
        <div class="customers mb-2">
          <ul>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Assistente Social" title="Assistente Social"></li>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Polícia" title="Polícia"></li>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Conselho Tutelar" title="Conselho Tutelar"></li>
            <li class="d-inline-block ms-2">
              <p class="f-12">+3 Mais</p>
            </li>
          </ul>
        </div>

        <!-- Progresso do atendimento -->
        <div class="project-status mt-2">
          <div class="media mb-1">
            <p>45%</p>
            <div class="media-body text-end"><span>Estágio de atendimento</span></div>
          </div>
          <div class="progress" style="height: 6px; border-radius: 3px;">
            <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

        </div>

        <!-- Pequeno menu discreto de ações -->

        <div class="dropdown mt-2 text-end">

          <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-dark"><i class="fa fa-ellipsis-v fa-lg"></i></a>
          <ul class="dropdown-menu dropdown-menu-end shadow-sm">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-eye me-2 text-primary"></i> Visão Geral
              </a>
            </li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="fa fa-clock-o me-2 text-warning"></i> Retirar da Urgência
            </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-check-circle me-2 text-success"></i> Aprovar Caso
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-times-circle me-2 text-secondary"></i> Reprovar
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                <i class="fa fa-trash me-2"></i> Eliminar
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>


    <div class="col-xxl-4 col-lg-6">
      <div class="project-box"><span class="badge badge-secondary">Done</span>

        <!-- Status do caso -->
        <span class="badge badge-primary">Doing</span>

        <!-- Localização do caso -->
        <h6>Maputo Cidade - Maxaquene</h6>

        <!-- Informações da vítima e tipo de caso -->
        <div class="media mb-2">
          <img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="Vitima" title="Vitima">
          <div class="media-body">
            <p><strong>Nome da Vítima:</strong>Maria Antonia M.</p>
            <p><strong>Tipo de Caso:</strong> Abuso Infantil </p>
          </div>
        </div>

        <!-- Resumo da denúncia -->
        <p><em>Recebida às 14h30, criança relata agressões no ambiente familiar. Encaminhada para análise urgente do serviço social.</em></p>

        <!-- Detalhes do acompanhamento -->
        <div class="row details mb-2">
          <div class="row details mb-2">
            <div class="col-12 mb-1">
              <span><strong>Código da Denúncia:</strong> L1160001</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Data e Hora da Denúncia:</strong> 12/09/2025 14:30</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Origem:</strong> APP116</span>
            </div>
            <div class="col-12 mb-1">
              <span><strong>Prioridade:</strong> URGENTE</span>
            </div>
          </div>
        </div>



        <!-- Responsáveis / Envolvidos -->
        <div class="customers mb-2">
          <ul>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Assistente Social" title="Assistente Social"></li>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Polícia" title="Polícia"></li>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="Conselho Tutelar" title="Conselho Tutelar"></li>
            <li class="d-inline-block ms-2">
              <p class="f-12">+3 Mais</p>
            </li>
          </ul>
        </div>

        <!-- Progresso do atendimento -->
        <div class="project-status mt-2">
          <div class="media mb-1">
            <p>45%</p>
            <div class="media-body text-end"><span>Estágio de atendimento</span></div>
          </div>
          <div class="progress" style="height: 6px; border-radius: 3px;">
            <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

        </div>

        <!-- Pequeno menu discreto de ações -->

        <div class="dropdown mt-2 text-end">

          <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-dark"><i class="fa fa-ellipsis-v fa-lg"></i></a>
          <ul class="dropdown-menu dropdown-menu-end shadow-sm">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-eye me-2 text-primary"></i> Visão Geral
              </a>
            </li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="fa fa-clock-o me-2 text-warning"></i> Retirar da Urgência
            </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-check-circle me-2 text-success"></i> Aprovar Caso
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fa fa-times-circle me-2 text-secondary"></i> Reprovar
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                <i class="fa fa-trash me-2"></i> Eliminar
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
  <div class="row">
    <div class="col-xxl-4 col-lg-6">
      <div class="project-box"><span class="badge badge-secondary">Done</span>
        <h6>Endless admin Design</h6>
        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
          <div class="media-body">
            <p>Themeforest, australia</p>
          </div>
        </div>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <div class="row details">
          <div class="col-6"><span>Issues </span></div>
          <div class="col-6 font-secondary">12 </div>
          <div class="col-6"> <span>Resolved</span></div>
          <div class="col-6 font-secondary">5</div>
          <div class="col-6"> <span>Comment</span></div>
          <div class="col-6 font-secondary">7</div>
        </div>
        <div class="customers">
          <ul>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
            <li class="d-inline-block ms-2">
              <p class="f-12">+10 More</p>
            </li>
          </ul>
        </div>
        <div class="project-status mt-4">
          <div class="media mb-0">
            <p>70% </p>
            <div class="media-body text-end"><span>Done</span></div>
          </div>
          <div class="progress" style="height: 5px">
            <div class="progress-bar-animated bg-secondary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Container-fluid Ends-->
</div>





<!-- footer start-->
<footer class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 footer-copyright">
        <p class="mb-0">Copyright 2021-22 © Linha116 All rights reserved.</p>
      </div>
      <div class="col-md-6">
        <p class="pull-right mb-0"> Kamba <i class="fa fa- font-secondary"></i></p>
      </div>
    </div>
  </div>
</footer>
</div>
</div>
<!-- latest jquery-->
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<!-- feather icon js-->
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
<script src="../assets/js/sidebar-menu.js"></script>
<script src="../assets/js/config.js"></script>
<!-- Bootstrap js-->
<script src="../assets/js/bootstrap/popper.min.js"></script>
<script src="../assets/js/bootstrap/bootstrap.min.js"></script>
<!-- Plugins JS start-->
<script src="../assets/js/prism/prism.min.js"></script>
<script src="../assets/js/clipboard/clipboard.min.js"></script>
<script src="../assets/js/custom-card/custom-card.js"></script>
<script src="../assets/js/height-equal.js"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="../assets/js/script.js"></script>
<script src="../assets/js/theme-customizer/customizer.js"></script>
<!-- login js-->
<!-- Plugin used-->
</body>

</html>