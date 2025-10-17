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
    <title> APP 116</title>
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
    <link rel="stylesheet" type="text/css" href="../assets/css/dropzone.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    <!-- Inclua SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
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
              <li><a href="#">Gestão de Utilizadores</a></li>
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
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Gestor de Ficheiros</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Audios                                     </li>
                    <li class="breadcrumb-item active"></li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
       <div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-xl-3 box-col-6 pe-0">
      <div class="job-sidebar">
        <a class="btn btn-primary job-toggle" href="javascript:void(0)">Filtros</a>
        <div class="job-left-aside custom-scrollbar">
          <div class="file-sidebar">
            <div class="card">
              <div class="card-body">
                <ul>
                  <li>    
                    <div class="btn btn-primary"><i data-feather="home"></i>Todos os Casos</div>
                  </li>
                  <li>
                    <div class="btn btn-light"><i data-feather="folder"></i>Em Análise</div>
                  </li>
                  <li>
                    <div class="btn btn-light"><i data-feather="clock"></i>Recentes</div>
                  </li>
                  <li>
                    <div class="btn btn-light"><i data-feather="star"></i>Prioritários</div>
                  </li>
                  <li>
                    <div class="btn btn-light"><i data-feather="alert-circle"></i>Encaminhados</div>
                  </li>
                  <li>
                    <div class="btn btn-light"><i data-feather="trash-2"></i>Arquivados</div>
                  </li>
                </ul>
                <hr>
                <ul>
                  <li>
                    <div class="btn btn-outline-primary"><i data-feather="database"></i>Estatísticas</div>
                    <div class="m-t-15">
                      <div class="progress sm-progress-bar mb-1">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h6>400 de 1000 casos registrados</h6>
                    </div>
                  </li>
                </ul>
                <hr>
                <ul>
                  <li>
                    <div class="btn btn-outline-primary"><i data-feather="grid"></i>Planos de Intervenção</div>
                  </li>
                  <li> 
                    <div class="pricing-plan">
                      <h6>Básico</h6>
                      <h5>Atendimento Telefônico</h5>
                      <p>Registro inicial e acolhimento</p>
                      <div class="btn btn-outline-primary btn-xs">Selecionado</div>
                      <img class="bg-img" src="../assets/images/dashboard/folder.png" alt="">
                    </div>
                  </li>
                  <li> 
                    <div class="pricing-plan">
                      <h6>Avançado</h6>
                      <h5>Encaminhamento</h5>
                      <p>Encaminhamento a parceiros: Polícia, Saúde, Justiça</p>
                      <div class="btn btn-outline-primary btn-xs">Contactar</div>
                      <img class="bg-img" src="../assets/images/dashboard/folder1.png" alt="">
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Conteúdo principal -->
    <div class="col-xl-9 col-md-12 box-col-12">
      <div class="file-content">
        <div class="card">
          <div class="card-header">
            <div class="media">
              <form class="form-inline" action="#" method="get">
                <div class="form-group d-flex mb-0">
                  <i class="fa fa-search"></i>
                  <input class="form-control-plaintext" type="text" placeholder="Pesquisar casos...">
                </div>
              </form>
              <div class="media-body text-end">
                <div class="btn btn-primary" onclick="getFile()"><i data-feather="plus-square"></i>Adicionar Novo Caso</div>
                <div class="btn btn-outline-primary ms-2"><i data-feather="upload"></i>Importar Dados</div>
              </div>
            </div>
          </div>
          <div class="card-body file-manager">
  <!-- Campo de filtro -->
<div class="mb-3">
  <input type="text" id="filtroCasos" class="form-control" placeholder="Filtrar por código da denúncia ou nome da vítima" onkeyup="filtrarCasos()">
</div>

<!-- Lista de casos -->
<ul id="listaCasos" class="files d-flex flex-wrap gap-3"></ul>

<!-- Paginação -->
<div class="mt-3">
  <nav>
    <ul id="paginacao" class="pagination"></ul>
  </nav>
</div>

<script>
const casos = [
  {codigo:'DEN-2025-001', vitima:'Maria Silva', duracao:'3:24', provincia:'Maputo', tipo:'Violência doméstica', audio:'audios/denuncia_001.mp3', cor:'#007bff'},
  {codigo:'DEN-2025-002', vitima:'Ana Costa', duracao:'2:15', provincia:'Gaza', tipo:'Assédio sexual', audio:'audios/denuncia_002.mp3', cor:'#28a745'},
  {codigo:'DEN-2025-003', vitima:'Joana Dias', duracao:'4:02', provincia:'Inhambane', tipo:'Violência psicológica', audio:'audios/denuncia_003.mp3', cor:'#ffc107'},
  {codigo:'DEN-2025-004', vitima:'Sofia Martins', duracao:'1:50', provincia:'Maputo', tipo:'Violência física', audio:'audios/denuncia_004.mp3', cor:'#17a2b8'},
  {codigo:'DEN-2025-005', vitima:'Paula Fernandes', duracao:'3:10', provincia:'Zambézia', tipo:'Assédio sexual', audio:'audios/denuncia_005.mp3', cor:'#6f42c1'},
  {codigo:'DEN-2025-006', vitima:'Carla Nunes', duracao:'2:40', provincia:'Nampula', tipo:'Violência doméstica', audio:'audios/denuncia_006.mp3', cor:'#fd7e14'},
  {codigo:'DEN-2025-007', vitima:'Liliana Santos', duracao:'3:55', provincia:'Sofala', tipo:'Violência psicológica', audio:'audios/denuncia_007.mp3', cor:'#e83e8c'},
  {codigo:'DEN-2025-008', vitima:'Fernanda Lima', duracao:'2:30', provincia:'Tete', tipo:'Assédio sexual', audio:'audios/denuncia_008.mp3', cor:'#20c997'},
  {codigo:'DEN-2025-009', vitima:'Patrícia Melo', duracao:'4:10', provincia:'Cabo Delgado', tipo:'Violência física', audio:'audios/denuncia_009.mp3', cor:'#fd3954'},
  {codigo:'DEN-2025-010', vitima:'Juliana Rocha', duracao:'3:05', provincia:'Niassa', tipo:'Violência doméstica', audio:'audios/denuncia_010.mp3', cor:'#6610f2'}
];

let paginaAtual = 1;
const casosPorPagina = 5;

function renderizarCasos() {
  const lista = document.getElementById('listaCasos');
  lista.innerHTML = '';
  const inicio = (paginaAtual-1) * casosPorPagina;
  const fim = inicio + casosPorPagina;
  const casosPagina = casos.slice(inicio, fim);

  casosPagina.forEach(c => {
    lista.innerHTML += `
    <li class="file-box p-3" style="width:300px; border-radius:10px; background:${c.cor}20; box-shadow:0 2px 8px rgba(0,0,0,0.1);">
      <div class="d-flex justify-content-between align-items-start mb-2">
        <i class="fa fa-microphone fa-2x" style="color:${c.cor}"></i>
        <div class="dropdown">
          <button class="btn btn-light btn-sm rounded-circle shadow-sm" data-bs-toggle="dropdown">
            <i class="fa fa-ellipsis-v"></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#" onclick="baixarAudio('${c.codigo}')"><i class="fa fa-download me-2"></i>Baixar áudio</a></li>
            <li><a class="dropdown-item" href="#" onclick="bloquearAudio('${c.codigo}')"><i class="fa fa-lock me-2"></i>Bloquear acesso</a></li>
            <li><a class="dropdown-item" href="#" onclick="encaminharCaso('${c.codigo}')"><i class="fa fa-share me-2"></i>Encaminhar caso</a></li>
          </ul>
        </div>
      </div>
      <div>
        <h6 style="color:${c.cor}">Áudio de denúncia</h6>
        <p class="mb-1"><b>Vítima:</b> ${c.vitima}</p>
        <p class="mb-1"><b>Código:</b> ${c.codigo}</p>
        <p class="mb-1"><b>Duração:</b> ${c.duracao}</p>
        <p class="mb-1"><b>Província:</b> ${c.provincia}</p>
        <p class="mb-1"><b>Tipo:</b> ${c.tipo}</p>
        <audio controls style="width:100%;">
          <source src="${c.audio}" type="audio/mpeg">
        </audio>
      </div>
    </li>`;
  });

  renderizarPaginacao();
}

function renderizarPaginacao() {
  const pag = document.getElementById('paginacao');
  pag.innerHTML = '';
  const totalPaginas = Math.ceil(casos.length / casosPorPagina);
  for(let i=1; i<=totalPaginas; i++) {
    pag.innerHTML += `<li class="page-item ${i===paginaAtual?'active':''}"><a class="page-link" href="#" onclick="mudarPagina(${i})">${i}</a></li>`;
  }
}

function mudarPagina(n) {
  paginaAtual = n;
  renderizarCasos();
}

function filtrarCasos() {
  const filtro = document.getElementById('filtroCasos').value.toLowerCase();
  const listaFiltrada = casos.filter(c => 
    c.codigo.toLowerCase().includes(filtro) || c.vitima.toLowerCase().includes(filtro)
  );
  paginaAtual = 1;
  const lista = document.getElementById('listaCasos');
  lista.innerHTML = '';
  listaFiltrada.forEach(c => {
    lista.innerHTML += `
    <li class="file-box p-3" style="width:300px; border-radius:10px; background:${c.cor}20; box-shadow:0 2px 8px rgba(0,0,0,0.1);">
      <div class="d-flex justify-content-between align-items-start mb-2">
        <i class="fa fa-microphone fa-2x" style="color:${c.cor}"></i>
        <div class="dropdown">
          <button class="btn btn-light btn-sm rounded-circle shadow-sm" data-bs-toggle="dropdown">
            <i class="fa fa-ellipsis-v"></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#" onclick="baixarAudio('${c.codigo}')"><i class="fa fa-download me-2"></i>Baixar áudio</a></li>
            <li><a class="dropdown-item" href="#" onclick="bloquearAudio('${c.codigo}')"><i class="fa fa-lock me-2"></i>Bloquear acesso</a></li>
            <li><a class="dropdown-item" href="#" onclick="encaminharCaso('${c.codigo}')"><i class="fa fa-share me-2"></i>Encaminhar caso</a></li>
          </ul>
        </div>
      </div>
      <div>
        <h6 style="color:${c.cor}">Áudio de denúncia</h6>
        <p class="mb-1"><b>Vítima:</b> ${c.vitima}</p>
        <p class="mb-1"><b>Código:</b> ${c.codigo}</p>
        <p class="mb-1"><b>Duração:</b> ${c.duracao}</p>
        <p class="mb-1"><b>Província:</b> ${c.provincia}</p>
        <p class="mb-1"><b>Tipo:</b> ${c.tipo}</p>
        <audio controls style="width:100%;">
          <source src="${c.audio}" type="audio/mpeg">
        </audio>
      </div>
    </li>`;
  });
}

// Inicializa a lista
renderizarCasos();
</script>



            <h5 class="mt-4">Parceiros Envolvidos</h5>
            <ul class="folder">
              <li class="folder-box">
                <div class="media"><i class="fa fa-university f-36 txt-warning"></i>
                  <div class="media-body ms-3">
                    <h6 class="mb-0">Polícia</h6>
                    <p>204 casos encaminhados</p>
                  </div>
                </div>
              </li>
              <li class="folder-box">
                <div class="media"><i class="fa fa-hospital-o f-36 txt-warning"></i>
                  <div class="media-body ms-3">
                    <h6 class="mb-0">Saúde</h6>
                    <p>101 casos atendidos</p>
                  </div>
                </div>
              </li>
              <li class="folder-box">
                <div class="media"><i class="fa fa-balance-scale f-36 txt-warning"></i>
                  <div class="media-body ms-3">
                    <h6 class="mb-0">Justiça</h6>
                    <p>25 processos em andamento</p>
                  </div>
                </div>
              </li>
              <li class="folder-box">
                <div class="media"><i class="fa fa-users f-36 txt-warning"></i>
                  <div class="media-body ms-3">
                    <h6 class="mb-0">Assistência Social</h6>
                    <p>108 famílias acompanhadas</p>
                  </div>
                </div>
              </li>
            </ul>
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
                <p class="mb-0">Copyright 2021-22 © LFC 116.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">LFC <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
        <div class="icon-hover-bottom p-fixed fa-fa-icon-show-div opecity-0">
          <div class="container-fluid">
            <div class="row">
              <div class="icon-popup">
                <div class="close-icon"><i class="icofont icofont-close"></i></div>
                <div class="icon-first"><i id="icon_main"></i></div>
                <div class="icon-class">
                  <label class="icon-title">data-feather</label><span id="fclass1"></span>
                </div>
                <div class="icon-last icon-last">
                  <label class="icon-title">Markup</label>
                  <div class="form-inline">
                    <div class="form-group">
                      <input class="inp-val form-control m-r-10" id="input_copy" type="text" value="" readonly="readonly">
                      <button class="btn btn-primary notification" onclick="myFunction()">Copy text</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
    <script src="../assets/js/dropzone/dropzone.js"></script>
    <script src="../assets/js/dropzone/dropzone-script.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>