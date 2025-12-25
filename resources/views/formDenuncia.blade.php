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

  <style>
    body {
      background: #f0f2f5;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    h2 {
      color: #1e3d59;
      font-weight: 700;
    }
    .form-section {
      background: #fff;
      border-radius: 15px;
      padding: 30px;
      margin-bottom: 25px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
      transition: transform 0.3s;
    }
    .form-section:hover {
      transform: translateY(-5px);
    }
    .form-section h5 {
      font-weight: 600;
      margin-bottom: 20px;
      color: #1e3d59;
    }
    .input-group-text {
      background: #1e3d59;
      color: white;
      border: none;
      border-radius: 10px 0 0 10px;
    }
    .form-control {
      border-radius: 0 10px 10px 0;
    }
    .btn-primary {
      background: #1e3d59;
      border: none;
      padding: 12px 30px;
      font-size: 1rem;
      font-weight: 600;
      border-radius: 50px;
    }
    .btn-primary:hover {
      background: #163246;
    }
    .select2-container .select2-selection {
      height: 45px;
      border-radius: 10px;
      padding: 6px 12px;
      border: 1px solid #ced4da;
    }
  </style>
  <style>
    .stepper-wrapper {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 12px;
    }
    .stepper-item {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 10px 14px;
      border-radius: 12px;
      background: #eef2f7;
      color: #1e3d59;
      flex: 1 1 180px;
      min-width: 160px;
      transition: all 0.2s ease;
    }
    .stepper-item.active {
      background: #1e3d59;
      color: #fff;
      box-shadow: 0 4px 12px rgba(0,0,0,0.12);
    }
    .stepper-number {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      display: inline-flex;
      justify-content: center;
      align-items: center;
      background: rgba(30, 61, 89, 0.15);
      color: #1e3d59;
      font-weight: 700;
    }
    .stepper-item.active .stepper-number {
      background: #fff;
      color: #1e3d59;
    }
  </style>


  
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
                  <h3>Casos Registados</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#l">Principal</a></li>
                    <li class="breadcrumb-item">dashboard</li>
                    <li class="breadcrumb-item active">Acompanhamento dos Casos</li>
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


<div class="container py-5">
  <h2 class="text-center mb-4"><i class="fa-solid fa-shield-halved me-2"></i>Registo de Caso de Violência Contra Criança</h2>

  <div id="stepper" class="mb-4">
    <div class="stepper-wrapper"></div>
  </div>

<!-- Dados da Denúncia -->
<div class="form-section form-step" data-step="1" data-step-title="Dados da Denúncia">
  <h5><i class="fa-solid fa-file-signature me-2"></i>Dados da Denúncia</h5>
  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Número da Denúncia</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
        <input type="text" class="form-control" id="reportNumber" placeholder="Ex: DN-2025-001">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Data da Denúncia</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-calendar-day"></i></span>
        <input id="reportDate" type="date" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Hora da Denúncia</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
        <input id="timeDate" type="time" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Canal de Recepção</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-phone-volume"></i></span>
        <select class="form-select js-example-basic-single">
          <option>Telefone / Linha 116</option>
          <option>Aplicativo Móvel</option>
          <option>USSD</option>
          <option>Email</option>
          <option>Presencial</option>
          <option>Outro</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Nome do Denunciante (se aplicável)</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user-pen"></i></span>
        <input id="reporterName" type="text" class="form-control" placeholder="Nome da pessoa que denunciou">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Contacto do Denunciante</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
        <input id="reporterContact" type="tel" class="form-control" placeholder="+258 xxx xxx xxx">
      </div>
    </div>
    <div class="col-12">
      <label class="form-label">Descrição Inicial da Denúncia</label>
      <textarea id="reportDescription" class="form-control" rows="4" placeholder="Resumo do ocorrido conforme informado pelo denunciante..."></textarea>
    </div>
    <div class="col-md-6">
      <label class="form-label">Urgência / Prioridade</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-exclamation-triangle"></i></span>
        <select id="prioritySelect" class="form-select">
          <option>Alta</option>
          <option>Média</option>
          <option>Baixa</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Situação Atual</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-info-circle"></i></span>
        <select id="statusSelect" class="form-select">
          <option>Pendente</option>
          <option>Em Investigação</option>
          <option>Concluída</option>
          <option>Encaminhada</option>
        </select>
      </div>
    </div>
    <div class="col-12">
      <label class="form-label">Observações / Informações Adicionais</label>
      <textarea class="form-control" rows="3" placeholder="Notas relevantes sobre a denúncia, contexto ou instruções especiais..."></textarea>
    </div>
  </div>
</div>


<!-- Testem,unha -->
<!-- Dados da Vítima -->
<!-- Dados da Vítima -->
<div class="form-section form-step" data-step="2" data-step-title="Dados da Vítima">
  <h5><i class="fa-solid fa-child me-2"></i>Dados da Vítima</h5>
  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Nome Completo</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
        <input id="victimName" type="text" class="form-control" placeholder="Nome da criança">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Data de Nascimento</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
        <input id="victimBirthDate" type="date" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Sexo</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-venus-mars"></i></span>
        <select class="form-select">
          <option>Masculino</option>
          <option>Feminino</option>
          <option>Outro</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Endereço Completo</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
        <input id="victimAddress" type="text" class="form-control" placeholder="Bairro, Rua, Nº, Cidade">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Contacto (Telefone/WhatsApp)</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
        <input type="tel" class="form-control" placeholder="+258 xxx xxx xxx">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Identidade / BI / Certidão de Nascimento</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span>
        <input type="text" id="victimDocumentNumber" class="form-control" placeholder="Número do documento">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">BI Frente</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-image"></i></span>
        <input type="file" id="biFront" class="form-control" accept="image/*">
      </div>
      <small class="text-muted">Selecione a imagem da frente do BI</small>
    </div>
    <div class="col-md-6">
      <label class="form-label">BI Verso</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-image"></i></span>
        <input type="file" id="biBack" class="form-control" accept="image/*">
      </div>
      <small class="text-muted">Selecione a imagem do verso do BI</small>
    </div>
    <div class="col-12" id="biCheckResult" style="display:none;">
      <div class="alert alert-info">
        <i class="fa-solid fa-info-circle me-2"></i>
        <span id="biCheckMessage"></span>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Estado de Saúde</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-heart-pulse"></i></span>
        <select class="form-select">
          <option>Saudável</option>
          <option>Com Doença</option>
          <option>Com Deficiência</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Necessidades Especiais</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-wheelchair"></i></span>
        <select class="form-select">
          <option>Não</option>
          <option>Sim</option>
        </select>
      </div>
    </div>
    <div class="col-md-12">
      <label class="form-label">Descrição da Criança / Observações Importantes</label>
      <textarea class="form-control" id="important_observations" rows="3" placeholder="Características físicas, comportamento, traços especiais..."></textarea>
    </div>
    <div class="col-md-6">
      <label class="form-label">Escola / Instituição</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-school"></i></span>
        <input type="text" class="form-control" placeholder="Nome da escola ou instituição">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Responsável Legal</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user-tie"></i></span>
        <input type="text" class="form-control" placeholder="Nome do responsável legal">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Contacto do Responsável</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
        <input type="tel" class="form-control" placeholder="+258 xxx xxx xxx">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Parentesco com a Criança</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-link"></i></span>
        <select class="form-select">
          <option>Pai</option>
          <option>Mãe</option>
          <option>Avô/Avó</option>
          <option>Outro</option>
        </select>
      </div>
    </div>
  </div>
</div>


<!-- Dados do Agressor -->
<!-- Dados do Agressor -->
<div class="form-section form-step" data-step="3" data-step-title="Dados do Agressor">
  <h5><i class="fa-solid fa-user-slash me-2"></i>Dados do Agressor</h5>
  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Nome Completo</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user-secret"></i></span>
        <input id="aggressorName" type="text" class="form-control" placeholder="Nome do agressor">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Data de Nascimento</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
        <input id="aggressorBirthDate" type="date" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Sexo</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-venus-mars"></i></span>
        <select class="form-select">
          <option>Masculino</option>
          <option>Feminino</option>
          <option>Outro</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Relação com a Vítima</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-link"></i></span>
        <select class="form-select">
          <option>Pai/Mãe</option>
          <option>Parente</option>
          <option>Professor</option>
          <option>Vizinho</option>
          <option>Outro</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Local de Residência</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
        <input id="aggressorAddress" type="text" class="form-control" placeholder="Bairro, Rua, Nº">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Contacto (Telefone/WhatsApp)</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
        <input type="tel" class="form-control" placeholder="+258 xxx xxx xxx">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Identidade / BI / Passaporte</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span>
        <input type="text" class="form-control" placeholder="Número do documento">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Antecedentes / Histórico</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-book"></i></span>
        <select class="form-select">
          <option>Nenhum</option>
          <option>Violência prévia</option>
          <option>Crimes contra menores</option>
          <option>Outro</option>
        </select>
      </div>
    </div>
    <div class="col-12">
      <label class="form-label">Observações Importantes</label>
      <textarea class="form-control" rows="3" placeholder="Comportamento, hábitos, informações relevantes para a investigação..."></textarea>
    </div>
  </div>
</div>


  <!-- Detalhes do Caso -->


<!-- Dados da Testemunha -->
<div class="form-section form-step" data-step="4" data-step-title="Dados da Testemunha">
  <h5><i class="fa-solid fa-user-tie me-2"></i>Dados da Testemunha</h5>
  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Nome Completo</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
        <input id="witnessName" type="text" class="form-control" placeholder="Nome completo da testemunha">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Data de Nascimento</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
        <input id="witnessBirthDate" type="date" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Sexo</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-venus-mars"></i></span>
        <select class="form-select">
          <option>Masculino</option>
          <option>Feminino</option>
          <option>Outro</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Contacto</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
        <input type="tel" class="form-control" placeholder="+258 xxx xxx xxx">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Relação com a Vítima</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-link"></i></span>
        <select class="form-select">
          <option>Parente</option>
          <option>Amigo</option>
          <option>Professor</option>
          <option>Vizinho</option>
          <option>Outro</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Disponibilidade para Depoimento</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
        <select class="form-select">
          <option>Imediata</option>
          <option>Em breve</option>
          <option>Não disponível</option>
        </select>
      </div>
    </div>
    <div class="col-12">
      <label class="form-label">Relato Detalhado</label>
      <textarea id="witnessDetail" class="form-control" rows="4" placeholder="Escreva o depoimento ou informações fornecidas pela testemunha..."></textarea>
    </div>
    <div class="col-12">
      <label class="form-label">Observações Adicionais</label>
      <textarea id="witnessNotes" class="form-control" rows="3" placeholder="Informações complementares, notas ou recomendações do entrevistador..."></textarea>
    </div>
  </div>
</div>



<!-- Terceiros -->

<!-- Encaminhamento a Terceiros -->
<div class="form-section form-step" data-step="5" data-step-title="Encaminhamento a Terceiros">
  <h5><i class="fa-solid fa-share-from-square me-2"></i>Encaminhamento a Terceiros</h5>
  <div class="row g-3">
    <!-- Seleção do Terceiro -->
    <div class="col-md-6">
      <label class="form-label">Encaminhar Para</label>
      <select id="thirdPartySelect" class="form-select">
        <option value="">-- Nenhum --</option>
        <option value="policia">Polícia</option>
        <option value="hospital">Hospital</option>
        <option value="tribunal">Tribunal</option>
        <option value="outro">Outro</option>
      </select>
    </div>

    <!-- Seleção da Província/Cidade -->
    <div class="col-md-6">
      <label class="form-label">Província / Cidade</label>
      <select id="provinceSelect" class="form-select">
        <option value="">Selecione a província</option>
      </select>
    </div>
    <div class="col-md-6">
      <label class="form-label">Distrito</label>
      <input id="districtName" type="text" class="form-control" placeholder="Distrito" readonly>
    </div>

    <!-- Locais e Parecer do Terceiro -->
    <div class="col-md-12" id="thirdPartyDetails" style="display:none;">
      <div class="row g-3">
        <!-- Locais -->
        <div class="col-md-6" id="policeStationDiv" style="display:none;">
          <label class="form-label">Esquadras Próximas</label>
          <select class="form-select">
            <option>Esquadra Central</option>
            <option>Esquadra Bairro A</option>
            <option>Esquadra Bairro B</option>
          </select>
        </div>

        <div class="col-md-6" id="hospitalDiv" style="display:none;">
          <label class="form-label">Hospitais Próximos</label>
          <select class="form-select">
            <option>Hospital Central</option>
            <option>Hospital Bairro A</option>
          </select>
        </div>

        <div class="col-md-6" id="courtDiv" style="display:none;">
          <label class="form-label">Tribunais Próximos</label>
          <select class="form-select">
            <option>Tribunal Central</option>
            <option>Tribunal Bairro A</option>
          </select>
        </div>

        <!-- Parecer do Terceiro -->
        <div class="col-md-6">
          <label class="form-label">Parecer do Terceiro</label>
          <select class="form-select">
            <option value="">Selecione</option>
            <option value="aprovado">Aprovado</option>
            <option value="pendente">Pendente</option>
            <option value="rejeitado">Rejeitado</option>
          </select>
        </div>

        <!-- Contato do Terceiro -->
        <div class="col-md-6">
          <label class="form-label">Contato do Terceiro</label>
          <div class="input-group mb-2">
            <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
            <input type="tel" class="form-control" placeholder="+258 xxx xxx xxx">
          </div>
          <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
            <input type="email" class="form-control" placeholder="email@dominio.com">
          </div>
        </div>

        <!-- Descrição -->
        <div class="col-12">
          <label class="form-label">Descrição / Observações do Terceiro</label>
          <textarea class="form-control" rows="3" placeholder="Adicione o parecer detalhado do terceiro..."></textarea>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById('thirdPartySelect').addEventListener('change', function() {
  const value = this.value;
  const detailsDiv = document.getElementById('thirdPartyDetails');

  // Ocultar todos os locais
  document.getElementById('policeStationDiv').style.display = 'none';
  document.getElementById('hospitalDiv').style.display = 'none';
  document.getElementById('courtDiv').style.display = 'none';

  if (value) {
    detailsDiv.style.display = 'block';

    // Mostrar o local correto
    if(value === 'policia') document.getElementById('policeStationDiv').style.display = 'block';
    if(value === 'hospital') document.getElementById('hospitalDiv').style.display = 'block';
    if(value === 'tribunal') document.getElementById('courtDiv').style.display = 'block';

    // SweetAlert informativa
    Swal.fire({
      icon: 'info',
      title: 'Atenção!',
      text: 'A denúncia só poderá ser finalizada após o preenchimento do parecer pelo terceiro indicado. Um e-mail ou SMS será enviado para o contato do terceiro.',
      confirmButtonText: 'Entendido'
    });
  } else {
    detailsDiv.style.display = 'none';
  }
});
</script>



  <!-- Intervenientes -->
<!-- Histórico Geral do Caso (Somente Visualização) -->
<div class="form-section form-step" data-step="6" data-step-title="Histórico do Caso">
  <h5><i class="fa-solid fa-book-open-reader me-2"></i>Histórico Geral do Caso</h5>
  <div class="row g-3">
    <div class="col-12">
      <label class="form-label">Resumo Completo do Caso</label>
      <textarea class="form-control" id="complete_summary" rows="6" readonly placeholder="Este campo apresenta automaticamente todas as informações registradas: dados da vítima, agressor, testemunhas, pareceres de terceiros e demais observações."></textarea>
    </div>
    <div class="col-md-6">
      <label class="form-label">Data de Última Atualização</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-calendar-day"></i></span>
        <input type="date" id="last_update_date" class="form-control" readonly>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Último Responsável</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user-check"></i></span>
        <input type="text" id="last_update_user" class="form-control" readonly placeholder="Nome do operador ou parceiro responsável pela última atualização">
      </div>
    </div>
    <div class="col-12">
      <label class="form-label">Observações Consolidadas</label>
      <textarea class="form-control" id="consolidated_observations" rows="3" readonly placeholder="Todas as observações consolidadas, inclusive comentários de terceiros e notas internas, aparecem aqui."></textarea>
    </div>
  </div>
</div>

<div class="d-flex justify-content-between align-items-center mt-4">
  <button id="prevStep" class="btn btn-outline-primary" type="button"><i class="fa-solid fa-arrow-left me-2"></i>Anterior</button>
  <div class="text-center flex-grow-1">
    <button class="btn btn-primary btn-lg mt-3 me-2" id="updateCaseBtn" type="button"><i class="fa-solid fa-floppy-disk me-2"></i>Atualizar Denúncia</button>
    <button class="btn btn-primary btn-lg mt-3" id="submitCaseBtn" type="button"><i class="fa-solid fa-paper-plane me-2"></i>Submeter Caso</button>
  </div>
  <button id="nextStep" class="btn btn-outline-primary" type="button">Próximo <i class="fa-solid fa-arrow-right ms-2"></i></button>
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
                <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.querySelector(".btn-primary").addEventListener("click", function() {
  
  // Exemplo: verificar se há terceiros pendentes
  const terceirosPendentes = true; // colocar a lógica real aqui
  const terceiroNome = "Polícia";  // exemplo de terceiro pendente
  const novoEstado = terceirosPendentes ? `À espera de confirmação do terceiro: ${terceiroNome}` : "Concluído";

  Swal.fire({
    title: 'O que deseja fazer?',
    text: "Escolha a ação para o caso:",
    icon: 'question',
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: 'Atualizar apenas',
    denyButtonText: `Mudar estado do caso`,
    cancelButtonText: 'Finalizar caso',
    reverseButtons: true
  }).then((result) => {
    
    if (result.isConfirmed) {
      // Atualizar apenas
      Swal.fire('Atualizado!', 'O caso foi atualizado. Pode continuar a editar quando desejar.', 'success');
      // Aqui você chama a função de update sem alterar estado

    } else if (result.isDenied) {
      // Mudar estado
      Swal.fire('Estado Alterado!', `O caso agora está em: ${novoEstado}`, 'info');
      // Aqui você chama a função para mudar o estado
    } else if (result.isDismissed) {
      // Finalizar caso
      if(terceirosPendentes){
        Swal.fire('Atenção!', `Não é possível finalizar o caso. Aguardando parecer do terceiro: ${terceiroNome}.`, 'warning');
      } else {
        Swal.fire('Caso Finalizado!', 'O caso foi finalizado com sucesso.', 'success');
        // Aqui você chama a função de finalizar o caso
      }
    }
    
  });
});
</script>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    $('.js-example-basic-single').select2({
      placeholder: "Selecione uma opção",
      width: '100%'
    });
  });
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
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="../assets/js/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2/select2-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const provinceSelect = document.getElementById('provinceSelect');
        const reportNumber = document.getElementById('reportNumber');
        const districtName = document.getElementById('districtName');
        const reportDate = document.getElementById('reportDate');
        const timeDate = document.getElementById('timeDate');
        const reporterName = document.getElementById('reporterName');
        const reporterContact = document.getElementById('reporterContact');
        const reportDescription = document.getElementById('reportDescription');
        const statusSelect = document.getElementById('statusSelect');
        const prioritySelect = document.getElementById('prioritySelect');
        const victimName = document.getElementById('victimName');
        const victimBirthDate = document.getElementById('victimBirthDate');
        const victimAddress = document.getElementById('victimAddress');
        const witnessName = document.getElementById('witnessName');
        const witnessBirthDate = document.getElementById('witnessBirthDate');
        const witnessDetail = document.getElementById('witnessDetail');
        const witnessNotes = document.getElementById('witnessNotes');
        const aggressorName = document.getElementById('aggressorName');
        const aggressorBirthDate = document.getElementById('aggressorBirthDate');
        const lastUpdateDate = document.getElementById('last_update_date');
        const lastUpdateUser = document.getElementById('last_update_user');
        const consolidatedObservations = document.getElementById('consolidated_observations');
        const completeSummary = document.getElementById('complete_summary');
        const important_observations = document.getElementById('important_observations');
        const aggressorAddress = document.getElementById('aggressorAddress');
        const formSteps = Array.from(document.querySelectorAll('.form-step'));
        const stepperWrapper = document.querySelector('.stepper-wrapper');
        const prevStepBtn = document.getElementById('prevStep');
        const nextStepBtn = document.getElementById('nextStep');
        const updateCaseBtn = document.getElementById('updateCaseBtn');
        const submitCaseBtn = document.getElementById('submitCaseBtn');
        let currentStepIndex = 0;
        let currentDistrictId = null;

        // const provincesToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJmcmVzaCI6ZmFsc2UsImlhdCI6MTc2MzkxMTg2NywianRpIjoiNDAwOWJiMTMtOGQxOS00OGY3LWI2ZmItNzIxYjFjYTkzYjk2IiwidHlwZSI6ImFjY2VzcyIsInN1YiI6IjEiLCJuYmYiOjE3NjMzkxMTg2NywiZXhwIjoxNzYzMzkxNTQ2N30.DWjBP2eF-NkN5nywHH5kXk2O3NrcVZ2XA9nsz24MjYM';
        // const reportToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJmcmVzaCI6ZmFsc2UsImlhdCI6MTc2NTc0MjMyMiwianRpIjoiYWNiOTI2MjQtYjE0OS00NzJlLWEzZjEtYTEwNmQ4NWUyZTAzIiwidHlwZSI6ImFjY2VzcyIsInN1YiI6IjEiLCJuYmYiOjE3NjU3NDIzMjIsImV4cCI6MTc2NTc0NTkyMn0.AGhkBWNQVEY4G-u36jaTP1zerG-X9wU6ROk830FEgb8';
        const token = localStorage.getItem('auth_token');
        if (!token) { Swal.fire('Erro', 'Faça login primeiro.', 'error'); return; }
        
        const reportId = {{ $id ?? 'null' }};

        // Carrega províncias e, em seguida, preenche o formulário com a denúncia
        fetch('http://127.0.0.1:9800/api/provinces', {
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 200 && data.data.provinces) {
                const provinces = data.data.provinces;
                provinces.forEach(province => {
                    const option = document.createElement('option');
                    option.value = province.id;
                    option.textContent = province.name;
                    provinceSelect.appendChild(option);
                });
                populateReport();
            } else {
                console.error('Erro ao obter as províncias:', data.message);
            }
        })
        .catch(error => {
            console.error('Erro na requisição das províncias:', error);
        });

        function buildStepper() {
          stepperWrapper.innerHTML = '';
          formSteps.forEach((step, index) => {
            const item = document.createElement('div');
            item.className = 'stepper-item';
            item.dataset.index = index;
            const num = document.createElement('span');
            num.className = 'stepper-number';
            num.textContent = index + 1;
            const title = document.createElement('span');
            title.textContent = step.dataset.stepTitle || `Etapa ${index + 1}`;
            item.appendChild(num);
            item.appendChild(title);
            stepperWrapper.appendChild(item);
            item.addEventListener('click', () => showStep(index));
          });
        }

        function showStep(index) {
          if (index < 0 || index >= formSteps.length) return;
          currentStepIndex = index;

          formSteps.forEach((step, idx) => {
            step.style.display = idx === index ? 'block' : 'none';
          });

          Array.from(stepperWrapper.children).forEach((item, idx) => {
            item.classList.toggle('active', idx === index);
          });

          prevStepBtn.disabled = index === 0;
          nextStepBtn.disabled = index === formSteps.length - 1;
          const isLast = index === formSteps.length - 1;
          updateCaseBtn.disabled = !isLast;
          submitCaseBtn.disabled = !isLast;
          window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        prevStepBtn.addEventListener('click', () => showStep(currentStepIndex - 1));
        nextStepBtn.addEventListener('click', () => showStep(currentStepIndex + 1));

        buildStepper();
        showStep(0);
        reportNumber.value = reportId;

        // BI File Upload and Check ID Multi API
        const biFront = document.getElementById('biFront');
        const biBack = document.getElementById('biBack');
        const biCheckResult = document.getElementById('biCheckResult');
        const biCheckMessage = document.getElementById('biCheckMessage');
        const victimDocumentNumber = document.getElementById('victimDocumentNumber');
        let biFrontFile = null;
        let biBackFile = null;

        function checkBiFiles() {
          if (biFrontFile && biBackFile) {
            checkIdMulti(biFrontFile, biBackFile);
          }
        }

        biFront.addEventListener('change', function(e) {
          biFrontFile = e.target.files[0];
          checkBiFiles();
        });

        biBack.addEventListener('change', function(e) {
          biBackFile = e.target.files[0];
          checkBiFiles();
        });

        function checkIdMulti(file1, file2) {
          const formData = new FormData();
          formData.append('file1', file1);
          formData.append('file2', file2);

          biCheckResult.style.display = 'block';
          biCheckMessage.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i>Verificando documentos...';

          fetch('http://127.0.0.1:4082/api/check_id_multi', {
            method: 'POST',
            body: formData
          })
          .then(response => response.json())
          .then(data => {
            if (data.status === 200 || data.status === 201) {
              biCheckResult.className = 'col-12 alert alert-success';
              biCheckMessage.innerHTML = '<i class="fa-solid fa-check-circle me-2"></i>Documentos verificados com sucesso!';
              if (data.data && data.data.document_number) {
                victimDocumentNumber.value = data.data.document_number;
              }
            } else {
              biCheckResult.className = 'col-12 alert alert-warning';
              biCheckMessage.innerHTML = `<i class="fa-solid fa-exclamation-triangle me-2"></i>${data.message || 'Erro ao verificar documentos'}`;
            }
          })
          .catch(error => {
            console.error('Erro ao verificar BI:', error);
            biCheckResult.className = 'col-12 alert alert-danger';
            biCheckMessage.innerHTML = '<i class="fa-solid fa-times-circle me-2"></i>Erro ao verificar documentos. Tente novamente.';
          });
        }

        // Form Submission Handler
        submitCaseBtn.addEventListener('click', function() {
          submitForm();
        });

        updateCaseBtn.addEventListener('click', function() {
          submitForm(false);
        });

        function submitForm(isFinalSubmission = true) {
          // Collect form data
          const formData = {
            title: reportNumber.value || 'Denúncia',
            description: reportDescription.value || '',
            district_id: currentDistrictId ? Number(currentDistrictId) : 50,
            report_type_id: 1,
            // last_update_date: lastUpdateDate.value || '',
            // last_update_user: lastUpdateUser.value || '',
            consolidated_observations: consolidatedObservations.value || '',
            summary: completeSummary.value || '',
            status_id: getStatusId(statusSelect.value),
            detailed_report: witnessNotes.value || '',
            aditional_details: witnessDetail.value || '',
            important_observation: important_observations.value || '',
            priority_id: getPriorityId(prioritySelect.value),
            reporter_name: reporterName.value || '',
            witness: buildPersonPayload(witnessName, witnessBirthDate, witnessDetail),
            affected_person: buildPersonPayload(victimName, victimBirthDate, victimAddress),
            caseworker: buildPersonPayload(null, null, null, { defaultName: 'Caseworker' }),
            aggressor: buildPersonPayload(aggressorName, aggressorBirthDate, aggressorAddress)
          };

          // Show loading
          Swal.fire({
            title: isFinalSubmission ? 'Submetendo caso...' : 'Atualizando caso...',
            text: 'Por favor, aguarde...',
            allowOutsideClick: false,
            didOpen: () => {
              Swal.showLoading();
            }
          });

          fetch(`http://127.0.0.1:9800/api/reports/${reportId}`, {
            method: 'PUT',
            headers: {
              'Content-Type': 'application/json',
              'Authorization': `Bearer ${token}`
            },
            body: JSON.stringify(formData)
          })
          .then(response => response.json())
          .then(data => {
            Swal.close();
            if (data.status === 200 || data.status === 201) {
              Swal.fire({
                icon: 'success',
                title: isFinalSubmission ? 'Caso Submetido!' : 'Caso Atualizado!',
                text: data.message || (isFinalSubmission ? 'O caso foi submetido com sucesso.' : 'O caso foi atualizado com sucesso.'),
                confirmButtonText: 'OK'
              }).then(() => {
                // Optionally redirect or reload
                // window.location.reload();
              });
            } else {
              Swal.fire({
                icon: 'error',
                title: 'Erro',
                text: data.message || 'Ocorreu um erro ao processar a solicitação.',
                confirmButtonText: 'OK'
              });
            }
          })
          .catch(error => {
            console.error('Erro ao submeter:', error);
            Swal.fire({
              icon: 'error',
              title: 'Erro',
              text: 'Erro de conexão. Verifique sua internet e tente novamente.',
              confirmButtonText: 'OK'
            });
          });
        }

        function buildPersonPayload(nameInput, birthInput, addressInput, options = {}) {
          const defaultName = options.defaultName || '';
          const person = {
            full_name: nameInput ? nameInput.value : defaultName,
            birth_date: birthInput ? birthInput.value : null,
            address: addressInput ? addressInput.value : null,
            mother_name: null,
            father_name: null
          };
          return person;
        }

        function getStatusId(statusName) {
          const statusMap = {
            'Pendente': '1',
            'Em Investigação': '2',
            'Concluída': '3',
            'Encaminhada': '4'
          };
          return statusMap[statusName] || '1';
        }

        function getPriorityId(priorityName) {
          const map = {
            'Alta': 1,
            'Média': 2,
            'Baixa': 3
          };
          return map[priorityName] || 2;
        }


        function populateReport() {
          fetch(`http://127.0.0.1:9800/api/reports/${reportId}`, {
            headers: {
              'Authorization': `Bearer ${token}`,
              'Content-Type': 'application/json'
            }
          })
          .then(response => response.json())
          .then(result => {
            if (result.status !== 200 || !result.data) {
              console.error('Erro ao obter a denúncia:', result.message);
              return;
            }

            const report = result.data;
            
            // Dados da Denúncia (Step 1)
            reportNumber.value = report.title || report.id || '';
            
            const date = report.creation_date ? new Date(report.creation_date) : null;
            if (date && !Number.isNaN(date.getTime())) {
              reportDate.value = date.toISOString().split('T')[0];
              const timeStr = date.toISOString().split('T')[1];
              timeDate.value = timeStr ? timeStr.split('.')[0].substring(0, 5) : '';
            }

            reporterName.value = report.reporter?.full_name ?? '';
            reporterContact.value = report.contact ?? '';
            reportDescription.value = report.description ?? '';
            districtName.value = report.district?.name ?? '';
            
            // Store district_id for form submission
            if (report.district?.id) {
              currentDistrictId = report.district.id;
            }

            if (report.district?.province_id) {
              const provinceOption = Array.from(provinceSelect.options).find(opt => Number(opt.value) === report.district.province_id);
              if (provinceOption) {
                provinceSelect.value = provinceOption.value;
              }
            }

            // Priority
            if (report.priority?.name) {
              const priorityOption = Array.from(prioritySelect.options).find(opt => opt.text.toLowerCase() === report.priority.name.toLowerCase());
              if (priorityOption) {
                prioritySelect.value = priorityOption.text;
              }
            }

            // Status
            if (report.status?.name) {
              const statusOption = Array.from(statusSelect.options).find(opt => opt.text.toLowerCase() === report.status.name.toLowerCase());
              if (statusOption) {
                statusSelect.value = statusOption.text;
              }
            }

            // Dados da Vítima (affected_person) - Step 2
            if (report.affected_person) {
              if (victimName) victimName.value = report.affected_person.full_name ?? '';
              if (victimBirthDate && report.affected_person.birth_date) {
                // Handle date format - could be "1996-04-18" or ISO string
                const birthDate = report.affected_person.birth_date.split('T')[0];
                victimBirthDate.value = birthDate;
              }
              if (victimAddress) victimAddress.value = report.affected_person.address ?? '';
            }

            // Dados do Agressor - Step 3
            if (report.aggressor) {
              if (aggressorName) aggressorName.value = report.aggressor.full_name ?? '';
              if (aggressorBirthDate && report.aggressor.birth_date) {
                const birthDate = report.aggressor.birth_date.split('T')[0];
                aggressorBirthDate.value = birthDate;
              }
              if (aggressorAddress) aggressorAddress.value = report.aggressor.address ?? '';
            }

            // Dados da Testemunha (witness) - Step 4
            if (report.witness) {
              if (witnessName) witnessName.value = report.witness.full_name ?? '';
              if (witnessBirthDate && report.witness.birth_date) {
                const birthDate = report.witness.birth_date.split('T')[0];
                witnessBirthDate.value = birthDate;
              }
              if (witnessDetail) witnessDetail.value = report.witness.address ?? '';
            }
          })
          .catch(error => {
            console.error('Erro na requisição da denúncia:', error);
          });
        }
    });
    </script>
  </body>
</html>