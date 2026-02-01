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
          <button class="btn btn-primary-light" type="button"><a href="{{route('login')}}"><i data-feather="log-out"></i>Sair</a></button>
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
        <select class="form-select" id="submission_chanel">
          <option value="1">Telefone / Linha 116</option>
          <option value="2">Aplicativo Móvel</option>
          <option value="3">USSD</option>
          <option value="4">Email</option>
          <option value="5">Presencial</option>
          <option value="6">Outro</option>
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
          <option selected disabled>A carregar...</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Situação Atual</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-info-circle"></i></span>
        <select id="statusSelect" class="form-select">
          <option selected disabled>A carregar...</option>
        </select>
      </div>
    </div>
    <div class="col-12">
      <label class="form-label">Observações / Informações Adicionais</label>
      <textarea class="form-control" rows="3" id="additionalObservations" placeholder="Notas relevantes sobre a denúncia, contexto ou instruções especiais..."></textarea>
    </div>
  </div>
</div>


<!-- Testem,unha -->
<!-- Dados da Vítima -->
<!-- Dados da Vítima -->
<div class="form-section form-step" data-step="2" data-step-title="Dados da Vítima">
  <input type="hidden" id="affected_person_id">
  <h5><i class="fa-solid fa-child me-2"></i>Dados da Vítima</h5>
  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Nome Completo</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
        <input type="text" id="afected_people_name"  class="form-control" placeholder="Nome da criança">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Data de Nascimento</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
        <input type="date" id="afected_people_date_of_birth" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Sexo</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-venus-mars"></i></span>
        <select class="form-select" id="afected_people_gender">
          <option value="1">Masculino</option>
          <option value="2">Feminino</option>
          <!-- <option>Outro</option> -->
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Endereço Completo</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
        <input type="text" id="afected_people_address" class="form-control" placeholder="Bairro, Rua, Nº, Cidade">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Contacto (Telefone/WhatsApp)</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
        <input type="tel" id="afected_people_phone_numeber" class="form-control" placeholder="+258 xxx xxx xxx">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Identidade / BI / Certidão de Nascimento</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span>
        <input type="text" id="victimDocumentNumber" class="form-control" placeholder="Número do documento">
      </div>
    </div>
    <div class="col-md-6" hidden>
      <label class="form-label">BI Frente</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-image"></i></span>
        <input type="file" id="biFront" class="form-control" accept="image/*">
      </div>
      <small class="text-muted">Selecione a imagem da frente do BI</small>
    </div>
    <div class="col-md-6" hidden>
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
        <select id="healthStatusSelect" class="form-select">
          <option selected disabled>A carregar...</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Necessidades Especiais</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-wheelchair"></i></span>
        <select class="form-select" id="afected_people_needs_special_assistance">
          <option value="2">Não</option>
          <option value="1">Sim</option>
        </select>
      </div>
    </div>
    <div class="col-md-12">
      <label class="form-label">Descrição da Criança / Observações Importantes</label>
      <textarea class="form-control" id="young_people_observations" rows="3" placeholder="Características físicas, comportamento, traços especiais..."></textarea>
    </div>
    <div class="col-md-6">
      <label class="form-label">Escola / Instituição</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-school"></i></span>
        <select id="institutionSelect" class="form-select">
          <option selected disabled>A carregar...</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Responsável Legal</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user-tie"></i></span>
        <input type="text" class="form-control" id="representative_name" placeholder="Nome do responsável legal">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Contacto do Responsável</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
        <input type="tel" id="representative_phone_number" class="form-control" placeholder="+258 xxx xxx xxx">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Parentesco com a Criança</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-link"></i></span>
        <select id="kinshipSelect" class="form-select">
          <option selected disabled>A carregar...</option>
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
        <input type="text" id="aggressor_name" class="form-control" placeholder="Nome do agressor">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Data de Nascimento</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
        <input type="date" id="aggressor_birth_date" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Sexo</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-venus-mars"></i></span>
        <select class="form-select" id="aggressor_gender">
          <option value="1">Masculino</option>
          <option value="2">Feminino</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Relação com a Vítima</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-link"></i></span>
        <select class="form-select" id="relationWithVictimAgressor">
          <option value"">(Seleccione a relação com a vitima)</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Local de Residência</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
        <input type="text" id="aggressor_address" class="form-control" placeholder="Bairro, Rua, Nº">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Contacto (Telefone/WhatsApp)</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
        <input type="tel" class="form-control" id="aggressor_phone_number" placeholder="+258 xxx xxx xxx">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Identidade / BI / Passaporte</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span>
        <input type="text" class="form-control" id="aggressor_id_number" placeholder="Número do documento">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Antecedentes / Histórico</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-book"></i></span>
        <select class="form-select" multiple="true" id="aggressor_history">
        
        </select>
      </div>
    </div>
    <div class="col-12">
      <label class="form-label">Observações Importantes</label>
      <textarea class="form-control" rows="3" id="aggressor_important_observation" placeholder="Comportamento, hábitos, informações relevantes para a investigação..."></textarea>
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
        <input type="text" id="reporter_name" class="form-control" placeholder="Nome completo da testemunha">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Data de Nascimento</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
        <input type="date" id="reporter_birth_date" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Sexo</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-venus-mars"></i></span>
        <select class="form-select" id="reporter_gender">
          <option value="1">Masculino</option>
          <option value="2">Feminino</option>

        </select>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Contacto</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
        <input type="tel" id="reporter_phone_number" class="form-control" placeholder="+258 xxx xxx xxx">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Relação com a Vítima</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-link"></i></span>
        <select class="form-select" id="relationWithVictim">
          <option value="">(Seleccione a relação com a vítima)</option>
          
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Disponibilidade para Depoimento</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
        <select class="form-select" id="reporter_availability">
          <option value="1">Imediata</option>
          <option value="2">Em breve</option>
          <option value="3">Não disponível</option>
        </select>
      </div>
    </div>
    <div class="col-12">
      <label class="form-label">Relato Detalhado</label>
      <textarea class="form-control" id="detailed_report" rows="4" placeholder="Escreva o depoimento ou informações fornecidas pela testemunha..."></textarea>
    </div>
    <div class="col-12">
      <label class="form-label">Observações Adicionais</label>
      <textarea class="form-control" id="adition_notes" rows="3" placeholder="Informações complementares, notas ou recomendações do entrevistador..."></textarea>
    </div>
  </div>
</div>



<!-- Terceiros -->

<!-- Encaminhamento a Terceiros -->
<div class="form-section form-step" id="step-5" hidden data-step="5" data-step-title="Encaminhamento a Terceiros">
  <h5><i class="fa-solid fa-share-from-square me-2"></i>Encaminhamento a Terceiros</h5>
  <div class="row g-3">
    <!-- Seleção do Terceiro -->
    <div class="col-md-6">
      <label class="form-label">Encaminhar Para</label>
      <select id="thirdPartySelect" class="form-select">
        <option value="">-- Nenhum --</option>
        <option value="1">Polícia</option>
        <option value="2">Hospital</option>
        <option value="3">Tribunal</option>
        <option value="4">Outro</option>
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
      <select id="districtSelect" class="form-select">
        <option value="">Selecione o distrito</option>
      </select>
    </div>

    <!-- Locais e Parecer do Terceiro -->
    <div class="col-md-12" id="thirdPartyDetails" style="display:none;">
      <div class="row g-3">
        <!-- Locais -->
        <div class="col-md-6" id="policeStationDiv" style="display:none;">
          <label class="form-label">Esquadras Próximas</label>
          <select id="policeSelect" class="form-select">
            <option selected disabled>A carregar...</option>
          </select>
        </div>

        <div class="col-md-6" id="hospitalDiv" style="display:none;">
          <label class="form-label">Hospitais Próximos</label>
          <select id="hospitalSelect" class="form-select">
            <option selected disabled>A carregar...</option>
          </select>
        </div>

        <div class="col-md-6" id="courtDiv" style="display:none;">
          <label class="form-label">Tribunais Próximos</label>
          <select id="tribunalSelect" class="form-select">
            <option selected disabled>A carregar...</option>
          </select>
        </div>

        <!-- Parecer do Terceiro -->
        <div class="col-md-6">
          <label class="form-label">Parecer do Terceiro</label>
          <select id="thirdPartyOpinionSelect" class="form-select">
            <option selected disabled>A carregar...</option>
          </select>
        </div>

        <!-- Contato do Terceiro -->
        <div class="col-md-6">
          <label class="form-label">Contato do Terceiro</label>
          <div class="input-group mb-2">
            <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
            <input type="tel" class="form-control" id="thirdPartyContact" placeholder="+258 xxx xxx xxx">
          </div>
          <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
            <input type="email" class="form-control" id="thirdPartyEmail" placeholder="email@dominio.com">
          </div>
        </div>

        <!-- Descrição -->
        <div class="col-12">
          <label class="form-label">Descrição / Observações do Terceiro</label>
          <textarea class="form-control" id='third_party_description' rows="3" placeholder="Adicione o parecer detalhado do terceiro..."></textarea>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



  <!-- Intervenientes -->
<!-- Histórico Geral do Caso (Somente Visualização) -->
<div class="form-section form-step" id="step-6" hidden data-step="6" data-step-title="Histórico do Caso">
  <h5><i class="fa-solid fa-book-open-reader me-2"></i>Histórico Geral do Caso</h5>
  <div class="row g-3">
    <div class="col-12">
      <label class="form-label">Resumo Completo do Caso</label>
      <textarea class="form-control" rows="6" id="complete_sumary" readonly placeholder="Este campo apresenta automaticamente todas as informações registradas: dados da vítima, agressor, testemunhas, pareceres de terceiros e demais observações."></textarea>
    </div>
    <div class="col-md-6">
      <label class="form-label">Data de Última Atualização</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-calendar-day"></i></span>
        <input type="datetime" id="last_change" class="form-control" readonly>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Último Responsável</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user-check"></i></span>
        <input type="text" id="case_worker" class="form-control" readonly placeholder="Nome do operador ou parceiro responsável pela última atualização">
      </div>
    </div>
    <div class="col-12">
      <label class="form-label">Observações Consolidadas</label>
      <textarea class="form-control" id="consolidated_details" rows="3" readonly placeholder="Todas as observações consolidadas, inclusive comentários de terceiros e notas internas, aparecem aqui."></textarea>
    </div>
  </div>
</div>

<div class="d-flex justify-content-between align-items-center mt-5 mb-5">
  <button id="prevStep" class="btn btn-outline-primary btn-lg" type="button">
    <i class="fa-solid fa-arrow-left me-2"></i>Anterior
  </button>


  <button id="submitFinalBtn" class="btn btn-outline-primary btn-lg"  type="button" style="display:none;">
      <i class="fa-solid fa-paper-plane me-2"></i>Submeter Caso Final
    </button>
  <button id="nextStep" class="btn btn-outline-primary btn-lg" type="button">
    Próximo <i class="fa-solid fa-arrow-right ms-2"></i>
  </button>
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

// document.querySelector(".btn-primary").addEventListener("click", function() {
  
//   // Exemplo: verificar se há terceiros pendentes
//   const terceirosPendentes = true; // colocar a lógica real aqui
//   const terceiroNome = "Polícia";  // exemplo de terceiro pendente
//   const novoEstado = terceirosPendentes ? `À espera de confirmação do terceiro: ${terceiroNome}` : "Concluído";

//   Swal.fire({
//     title: 'O que deseja fazer?',
//     text: "Escolha a ação para o caso:",
//     icon: 'question',
//     showDenyButton: true,
//     showCancelButton: true,
//     confirmButtonText: 'Atualizar apenas',
//     denyButtonText: `Mudar estado do caso`,
//     cancelButtonText: 'Finalizar caso',
//     reverseButtons: true
//   }).then((result) => {
    
//     if (result.isConfirmed) {
//       // Atualizar apenas
//       Swal.fire('Atualizado!', 'O caso foi atualizado. Pode continuar a editar quando desejar.', 'success');
//       // Aqui você chama a função de update sem alterar estado

//     } else if (result.isDenied) {
//       // Mudar estado
//       Swal.fire('Estado Alterado!', `O caso agora está em: ${novoEstado}`, 'info');
//       // Aqui você chama a função para mudar o estado
//     } else if (result.isDismissed) {
//       // Finalizar caso
//       if(terceirosPendentes){
//         Swal.fire('Atenção!', `Não é possível finalizar o caso. Aguardando parecer do terceiro: ${terceiroNome}.`, 'warning');
//       } else {
//         Swal.fire('Caso Finalizado!', 'O caso foi finalizado com sucesso.', 'success');
//         // Aqui você chama a função de finalizar o caso
//       }
//     }
    
//   });
// });
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
        const complete_sumary = document.getElementById('complete_sumary');
        const last_change = document.getElementById('last_change');
        const case_worker = document.getElementById('case_worker');
        const consolidated_details = document.getElementById('consolidated_details');
        
      
      
      
        const reporter_name = document.getElementById('reporter_name');
        const reporter_birth_date = document.getElementById('reporter_birth_date');
        const reporter_gender = document.getElementById('reporter_gender');
        const reporter_phone_number = document.getElementById('reporter_phone_number');
        
        const relationWithVictim = document.getElementById('relationWithVictim');
        const detailed_report = document.getElementById('detailed_report');
        const adition_notes = document.getElementById('adition_notes');
        const reporter_availability = document.getElementById('reporter_availability');
        const third_party_description = document.getElementById('third_party_description')
        const provinceSelect = document.getElementById('provinceSelect');
        const aggressor_name = document.getElementById('aggressor_name');
        const aggressor_birth_date = document.getElementById('aggressor_birth_date');
        const aggressor_gender = document.getElementById('aggressor_gender');
        const relationWithVictimAgressor = document.getElementById('relationWithVictimAgressor');
        const aggressor_address = document.getElementById('aggressor_address');
        const aggressor_phone_number = document.getElementById('aggressor_phone_number')
        const aggressor_id_number = document.getElementById('aggressor_id_number');
        const aggressor_history = document.getElementById('aggressor_history')
        const reportNumber = document.getElementById('reportNumber');
        const districtSelect = document.getElementById('districtSelect');
        const additionalObservations = document.getElementById('additionalObservations');
        const affected_people_name = document.getElementById('afected_people_name');
        const affected_people_date_of_birth = document.getElementById('afected_people_date_of_birth');
        const affected_people_gender = document.getElementById('afected_people_gender');
        const affected_people_address = document.getElementById('afected_people_address');
        const healthStatusSelect = document.getElementById('healthStatusSelect')
        const affected_person_id = document.getElementById('affected_person_id')
        const representative_phone_number = document.getElementById('representative_phone_number')
        const representative_name = document.getElementById('representative_name')
        const aggressor_important_observation = document.getElementById('aggressor_important_observation');
        const affected_people_phone_numeber = document.getElementById('afected_people_phone_numeber');
        const affected_people_needs_special_assistance = document.getElementById('afected_people_needs_special_assistance');
        const affected_people_special_assistance_description = document.getElementById('young_people_observations');
        const institutionSelect = document.getElementById('institutionSelect');
        const reportDate = document.getElementById('reportDate');
        // const reporter_phone_number = document.getElementById('reporterContact');
        
        const third_party_email = document.getElementById('thirdPartyEmail');
        const timeDate = document.getElementById('timeDate');
        const reporterName = document.getElementById('reporterName');
        const reporterContact = document.getElementById('reporterContact');
        const reportDescription = document.getElementById('reportDescription');
        const kinshipSelect = document.getElementById('kinshipSelect');
        const statusSelect = document.getElementById('statusSelect');
        const thirdPartySelect = document.getElementById('thirdPartySelect');
        const afected_people_gender = document.getElementById('afected_people_gender');
        // const reportDescription = document.getElementById('reportDescription');
        const submission_chanel = document.getElementById('submission_chanel');
        const formSteps = Array.from(document.querySelectorAll('.form-step'));
        const stepperWrapper = document.querySelector('.stepper-wrapper');
        const prevStepBtn = document.getElementById('prevStep');
        const nextStepBtn = document.getElementById('nextStep');
        const updateCaseBtn = document.getElementById('updateCaseBtn');
        const submitCaseBtn = document.getElementById('submitCaseBtn');
        const thirdPartyContact = document.getElementById('thirdPartyContact');
        const thirdPartyEmail = document.getElementById('thirdPartyEmail');
        const thirdPartyDescription = document.getElementById('third_party_description');
        let currentStepIndex = 0;
        let currentDistrictId = null;

        // const provincesToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJmcmVzaCI6ZmFsc2UsImlhdCI6MTc2MzkxMTg2NywianRpIjoiNDAwOWJiMTMtOGQxOS00OGY3LWI2ZmItNzIxYjFjYTkzYjk2IiwidHlwZSI6ImFjY2VzcyIsInN1YiI6IjEiLCJuYmYiOjE3NjMzkxMTg2NywiZXhwIjoxNzYzMzkxNTQ2N30.DWjBP2eF-NkN5nywHH5kXk2O3NrcVZ2XA9nsz24MjYM';
        // const reportToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJmcmVzaCI6ZmFsc2UsImlhdCI6MTc2NTc0MjMyMiwianRpIjoiYWNiOTI2MjQtYjE0OS00NzJlLWEzZjEtYTEwNmQ4NWUyZTAzIiwidHlwZSI6ImFjY2VzcyIsInN1YiI6IjEiLCJuYmYiOjE3NjU3NDIzMjIsImV4cCI6MTc2NTc0NTkyMn0.AGhkBWNQVEY4G-u36jaTP1zerG-X9wU6ROk830FEgb8';
        const token = localStorage.getItem('auth_token');
        if (!token) { Swal.fire('Erro', 'Faça login primeiro.', 'error'); return; }
        const user = JSON.parse(localStorage.getItem('user_data'));
        console.log(user);
        if(user.roles.length > 0) {
          if(user.roles[0].name === 'Conselheiro') {
            document.getElementById('step-5').setAttribute('hidden','true');
            document.getElementById('step-6').setAttribute('hidden','true');
            // window.location.href = '/dashboard';
          } else {
            document.getElementById('step-5').removeAttribute('hidden');
            document.getElementById('step-6').removeAttribute('hidden');
            // window.location.href = '/casos';
          }
        }
        const reportId = {{ $id ?? 'null' }};


       // Load all form options from API
       if (token) {
         $.ajax({
             url: 'http://127.0.0.1:9800/api/form-options',
             type: 'GET',
             headers: {
                 'Authorization': `Bearer ${token}`,
                 'Content-Type': 'application/json'
             },
             success: function(response) {
                 if (response.status === 200 && response.data) {
                     const data = response.data;
                     
                     // Populate Provinces
                     const provinceSelect = $('#provinceSelect');
                     provinceSelect.empty().append('<option value="">Selecione a província</option>');
                     if (data.provinces) {
                         data.provinces.forEach(function(province) {
                             provinceSelect.append(new Option(province.name, province.id));
                         });
                     }
                     
                     // Populate Districts (will be filtered by province)
                     window.allDistricts = data.districts || [];
                     
                     // Populate Priorities
                     const prioritySelect = $('#prioritySelect');
                     prioritySelect.empty().append('<option selected disabled>Selecione a urgência</option>');
                     if (data.priorities) {
                         data.priorities.forEach(function(priority) {
                             prioritySelect.append(new Option(priority.name, priority.id));
                         });
                     }

                     const aggressor_historySelect = $('#aggressor_history');
                     aggressor_historySelect.empty().append('<option selected disabled>Selecione os crimes</option>');
                     if (data.Crimes) {
                         data.Crimes.forEach(function(crime) {
                          aggressor_historySelect.append(new Option(crime.name, crime.id));
                         });
                     }
                     
                     // Populate Statuses
                     const statusSelect = $('#statusSelect');
                     statusSelect.empty().append('<option selected disabled>Selecione a situação</option>');
                     if (data.statuses) {
                         data.statuses.forEach(function(status) {
                             statusSelect.append(new Option(status.name, status.id));
                         });
                     }

                     const thirdPartySelect = $('#thirdPartySelect');
                     thirdPartySelect.empty().append('<option selected disabled>Selecione a Instituicão</optaion>');
                     if (data.institutions) {
                         data.institutions.forEach(function(status) {
                          thirdPartySelect.append(new Option(status.name, status.id));
                         });
                     }
                     
                     // Populate Health Statuses
                     const healthStatusSelect = $('#healthStatusSelect');
                     healthStatusSelect.empty().append('<option selected disabled>Selecione o estado de saúde</option>');
                     if (data.health_statuses) {
                         data.health_statuses.forEach(function(healthStatus) {
                             healthStatusSelect.append(new Option(healthStatus.name, healthStatus.id));
                         });
                     }
                     
                     // Populate Kinships
                     const kinshipSelect = $('#kinshipSelect');
                     kinshipSelect.empty().append('<option selected disabled>Selecione o parentesco</option>');
                     if (data.kinships) {
                         data.kinships.forEach(function(kinship) {
                             kinshipSelect.append(new Option(kinship.name, kinship.id));
                         });
                     }
                     const relationWithVictimAgressor = $('#relationWithVictimAgressor');
                     relationWithVictimAgressor.empty().append('<option selected disabled>Selecione o parentesco</option>');
                     if (data.kinships) {
                         data.kinships.forEach(function(kinship) {
                          relationWithVictimAgressor.append(new Option(kinship.name, kinship.id));
                         });
                     }
                     
                     // Populate Institutions
                     const institutionSelect = $('#institutionSelect');
                     institutionSelect.empty().append('<option selected disabled>Selecione a instituição</option>');
                     if (data.institutions) {
                         data.institutions.forEach(function(institution) {
                             institutionSelect.append(new Option(institution.name, institution.id));
                         });
                     }
                     const relationWithVictim = $('#relationWithVictim');
                     relationWithVictim.empty().append('<option selected disabled>Selecione o parentesco</option>');
                     if (data.kinships) {
                         data.kinships.forEach(function(kinship) {
                          relationWithVictim.append(new Option(kinship.name, kinship.id));
                         });
                     }
                     // Store polices, hospitals and tribunals for filtering by district
                     window.allPolices = data.polices || [];
                     window.allHospitals = data.hospitals || [];
                     window.allTribunals = data.tribunals || [];
                     
                     // Populate Third Party Opinion (using statuses)
                     const thirdPartyOpinionSelect = $('#thirdPartyOpinionSelect');
                     thirdPartyOpinionSelect.empty().append('<option selected disabled>Selecione o parecer</option>');
                     if (data.statuses) {
                         data.statuses.forEach(function(status) {
                             thirdPartyOpinionSelect.append(new Option(status.name, status.id));
                         });
                     }
                     
                     // Store report types for later use
                     window.reportTypes = data.report_types || [];
                     
                     // After loading all options, populate the form with report data
                     populateReport();
                 }
             },
             error: function(xhr, status, error) {
                 console.error('Erro ao buscar opções do formulário:', error);
                 $('#prioritySelect').empty().append('<option selected disabled>Erro ao carregar</option>');
                 $('#statusSelect').empty().append('<option selected disabled>Erro ao carregar</option>');
                 $('#healthStatusSelect').empty().append('<option selected disabled>Erro ao carregar</option>');
                 $('#kinshipSelect').empty().append('<option selected disabled>Erro ao carregar</option>');
                 $('#institutionSelect').empty().append('<option selected disabled>Erro ao carregar</option>');
             }
         });
     } else {
         console.error('Token de autenticação não encontrado.');
         $('#prioritySelect').empty().append('<option selected disabled>Não autorizado</option>');
         $('#statusSelect').empty().append('<option selected disabled>Não autorizado</option>');
     }
     
     // Filter districts when province is selected
     $('#provinceSelect').on('change', function() {
         const selectedProvinceId = $(this).val();
         const districtSelect = $('#districtSelect');
         districtSelect.empty().append('<option value="">Selecione o distrito</option>');
         
         if (selectedProvinceId && window.allDistricts) {
             const filteredDistricts = window.allDistricts.filter(function(district) {
                 return district.province_id == selectedProvinceId;
             });
             
             filteredDistricts.forEach(function(district) {
                 districtSelect.append(new Option(district.name, district.id));
             });
         }
     });
     
     // Update currentDistrictId when district is selected and filter third party options
     $('#districtSelect').on('change', function() {
         currentDistrictId = $(this).val() ? Number($(this).val()) : null;
         // Update third party options if a third party type is already selected
         const thirdPartyType = $('#thirdPartySelect').val();
         if (thirdPartyType && currentDistrictId) {
             updateThirdPartyOptions();
         }
     });
     
     // Function to update third party options based on selected district
     function updateThirdPartyOptions() {
         const selectedDistrictId = currentDistrictId;
         const thirdPartyType = $('#thirdPartySelect').val();
         
         if (!selectedDistrictId) {
             // Show message if district is not selected
             if (thirdPartyType === '1') {
                 $('#policeSelect').empty().append('<option disabled>Selecione primeiro o distrito</option>');
             }
             if (thirdPartyType === 'hospital') {
                 $('#hospitalSelect').empty().append('<option disabled>Selecione primeiro o distrito</option>');
             }
             return;
         }
         
         // Filter and populate polices by district
         if (thirdPartyType === '1' && window.allPolices) {
             const policeSelect = $('#policeSelect');
             policeSelect.empty().append('<option selected disabled>Selecione a esquadra</option>');
             
             // Check if polices have district information for filtering
             let filteredPolices = window.allPolices;
             if (selectedDistrictId && window.allPolices.length > 0 && window.allPolices[0].district) {
                 filteredPolices = window.allPolices.filter(function(police) {
                     return police.district && police.district.id == selectedDistrictId;
                 });
             }
             
             if (filteredPolices.length > 0) {
                 filteredPolices.forEach(function(police) {
                     policeSelect.append(new Option(police.name, police.id));
                 });
             } else {
                 policeSelect.append('<option disabled>Nenhuma esquadra encontrada neste distrito</option>');
             }
         }
         
         // Filter and populate hospitals by district
         if (thirdPartyType === '2' && window.allHospitals) {
             const hospitalSelect = $('#hospitalSelect');
             hospitalSelect.empty().append('<option selected disabled>Selecione o hospital</option>');
             
             const filteredHospitals = window.allHospitals.filter(function(hospital) {
                 return hospital.district && hospital.district.id == selectedDistrictId;
             });
             
             if (filteredHospitals.length > 0) {
                 filteredHospitals.forEach(function(hospital) {
                     hospitalSelect.append(new Option(hospital.name, hospital.id));
                 });
             } else {
                 hospitalSelect.append('<option disabled>Nenhum hospital encontrado neste distrito</option>');
             }
         }
         
         // Populate tribunals (might not have district filtering)
         if (thirdPartyType === '3' && window.allTribunals) {
             const tribunalSelect = $('#tribunalSelect');
             tribunalSelect.empty().append('<option selected disabled>Selecione o tribunal</option>');
             
             window.allTribunals.forEach(function(tribunal) {
                 tribunalSelect.append(new Option(tribunal.name, tribunal.id));
             });
         }
     }
     
     // Update third party options when third party type changes
     $('#thirdPartySelect').on('change', function() {
         const value = this.value;
         const detailsDiv = document.getElementById('thirdPartyDetails');
         
         // Hide all third party option divs
         document.getElementById('policeStationDiv').style.display = 'none';
         document.getElementById('hospitalDiv').style.display = 'none';
         document.getElementById('courtDiv').style.display = 'none';
         
         if (value) {
             detailsDiv.style.display = 'block';
             
             // Show the correct option div
             if(value === 'policia') {
                 document.getElementById('policeStationDiv').style.display = 'block';
                 updateThirdPartyOptions();
             }
             if(value === 'hospital') {
                 document.getElementById('hospitalDiv').style.display = 'block';
                 updateThirdPartyOptions();
             }
             if(value === 'tribunal') {
                 document.getElementById('courtDiv').style.display = 'block';
                 updateThirdPartyOptions();
             }
             
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



        // populateReport will be called after form options are loaded
        // This is handled in the form-options AJAX success callback

        function buildStepper() {
          stepperWrapper.innerHTML = '';
          formSteps.forEach((step, index) => {
            if(user.roles[0].name === 'Conselheiro' && index >=4) {
              return;
            }
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
            // }
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

          // alert(index);

          prevStepBtn.disabled = index === 0;
          nextStepBtn.style.display = index === formSteps.length - 1 ? 'none' : 'block';

          // Mostra o botão de submissão apenas na última etapa
          const submitFinalBtn = document.getElementById('submitFinalBtn');
          if (index === formSteps.length - 1) {
            submitFinalBtn.style.display = 'inline-block';
          } else {
            submitFinalBtn.style.display = 'none';
          }

          window.scrollTo({ top: 0, behavior: 'smooth' });
          if(user.roles[0].name === 'Conselheiro' && (index >= 3)) {
            nextStepBtn.style.display = 'none';
            submitFinalBtn.style.display = 'inline-block';
          }
        }
        const submitFinalBtn = document.getElementById('submitFinalBtn');
        submitFinalBtn.addEventListener('click', function() {
          Swal.fire({
            title: 'Submeter Caso Final?',
            text: "Após a submissão final, o caso será encaminhado e não poderá ser editado novamente sem autorização.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#1e3d59',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Sim, submeter!',
            cancelButtonText: 'Cancelar'
          }).then((result) => {
            if (result.isConfirmed) {
              submitForm(true); // true = submissão final
            }
          });
        });
        // function showStep(index) {
        //   if (index < 0 || index >= formSteps.length) return;
        //   currentStepIndex = index;

        //   formSteps.forEach((step, idx) => {
        //     step.style.display = idx === index ? 'block' : 'none';
        //   });

        //   Array.from(stepperWrapper.children).forEach((item, idx) => {
        //     item.classList.toggle('active', idx === index);
        //   });

        //   prevStepBtn.disabled = index === 0;
        //   nextStepBtn.disabled = index === formSteps.length - 1;
        //   const isLast = index === formSteps.length - 1;
        //   updateCaseBtn.disabled = !isLast;
        //   submitCaseBtn.disabled = !isLast;
        //   window.scrollTo({ top: 0, behavior: 'smooth' });
        // }

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
        // submitCaseBtn.addEventListener('click', function() {
        //   submitForm();
        // });

        // updateCaseBtn.addEventListener('click', function() {
        //   submitForm(false);
        // });

        function submitForm(isFinalSubmission = true) {
          // Collect form data
          const prioritySelect = document.getElementById('prioritySelect');
          const selectedCrimes = Array.from(aggressor_history.selectedOptions).map(option => parseInt(option.value));
          const formData = {
            title: reportNumber.value || 'Denúncia',
            district_id: districtSelect.value ? Number(districtSelect.value) : (currentDistrictId ? Number(currentDistrictId) : 50),
            third_party_opinion_id: thirdPartySelect.value ? Number(thirdPartySelect.value) : null,
            third_party_opinion_id: $('#thirdPartyOpinionSelect').val(),
            //  ? Number(thirdPartySelect.value) : null,
            reporter_victim_kinship_id: kinshipSelect.value ? Number(kinshipSelect.value) : null,
            victim_legal_representative_kinship_id: relationWithVictim.value ? Number(relationWithVictim.value) : null,
            aggressor_victim_kinship_id: relationWithVictimAgressor.value ? Number(relationWithVictimAgressor.value) : null,
            report_type_id: 1,
            initial_description:reportDescription.value || '',
            reporter_availability: reporter_availability.value,
            important_observation: aggressor_important_observation.value,
            reporter_contact: reporterContact.value || '',
            aggressor_document_number: aggressor_id_number.value,
            status_id: statusSelect.value ? Number(statusSelect.value) : 1,
            priority_id: prioritySelect.value ? Number(prioritySelect.value) : null,
            special_needs:affected_people_needs_special_assistance.value? Number(affected_people_needs_special_assistance.value) : null,
            reporter_name: reporterName.value || '',
            representative_name: representative_name.value || '',
            representative_phone_number: representative_phone_number.value || '',
            affected_person:{
              // id:affected_person_id,
              name: affected_people_name.value || '',
              birth_date: affected_people_date_of_birth.value || '',
              gender_id: affected_people_gender.value || '',
              address: affected_people_address.value || '',
              phone_number: affected_people_phone_numeber.value || '',
              health_status_id:healthStatusSelect.value || '',
              document_number: victimDocumentNumber.value || ''
              // needs_special_assistance: affected_people_needs_special_assistance.value || '',
              // special_assistance_description: affected_people_special_assistance_description.value || '',
              // institution_id: institutionSelect.value ? Number(institutionSelect.value) : null,
            },
            // affected_person:{
            //   id:affected_person_id,
            //   name: affected_people_name.value || '',
            //   birth_date: affected_people_date_of_birth.value || '',
            //   gender_id: affected_people_gender.value || '',
            //   address: affected_people_address.value || '',
            //   phone_number: affected_people_phone_numeber.value || '',
            //   hs_id:healthStatusSelect.value || '',
            //   // needs_special_assistance: affected_people_needs_special_assistance.value || '',
            //   // special_assistance_description: affected_people_special_assistance_description.value || '',
            //   // institution_id: institutionSelect.value ? Number(institutionSelect.value) : null,
            // },
            aggressor:{
              // id:affected_person_id,
              name: aggressor_name.value || '',
              birth_date: aggressor_birth_date.value || '',
              gender_id: aggressor_gender.value || '',
              address: aggressor_address.value || '',
              phone_number: aggressor_phone_number.value || '',
              id_number:aggressor_id_number.value,
              health_status_id:''
              // needs_special_assistance: affected_people_needs_special_assistance.value || '',
              // special_assistance_description: affected_people_special_assistance_description.value || '',
              // institution_id: institutionSelect.value ? Number(institutionSelect.value) : null,
            },
            witness:{
              // id:affected_person_id,
              name: reporter_name.value || '',
              birth_date: reporter_birth_date.value || '',
              gender_id: reporter_gender.value || '',
              address: '',
              phone_number: reporter_phone_number.value || '',
              id_number: '',
              health_status_id:''
              // needs_special_assistance: affected_people_needs_special_assistance.value || '',
              // special_assistance_description: affected_people_special_assistance_description.value || '',
              // institution_id: institutionSelect.value ? Number(institutionSelect.value) : null,
            },
            crimes: selectedCrimes,
            aditional_notes: adition_notes.value,


            consolidated_observations: consolidated_details.value,
            summary: complete_sumary.value,



            aditional_details: detailed_report.value || '',
            reporter_phone_number: reporter_phone_number.value || '',
            detailed_report: reportDescription.value || '',
            third_party_contact: thirdPartyContact.value || '',
            third_party_email: third_party_email.value || '',
            submission_chanel: submission_chanel.value || '',
            third_party_description: third_party_description.value || '',
            // description: reportDescription.value || ''
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
                window.location.reload();
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
            const date = report.creation_date ? new Date(report.creation_date) : null;
            if (date && !Number.isNaN(date.getTime())) {
              reportDate.value = date.toISOString().split('T')[0];
              timeDate.value = date.toISOString().split('T')[1].split('.')[0];
            }
            $('#additionalObservations').val(report.aditional_details ?? '');
            $('#reportDescription').val(report.detailed_report ?? '');
            submission_chanel.value = report.submission_chanel?? '';
            affected_person_id.value = report.affected_person?.id ?? '';



            
            // const aggressor_id_number = document.getElementById('aggressor_id_number');
            // const aggressor_history = document.getElementById('aggressor_history')


            complete_sumary.value = report.summary;
            last_change.value = report.modified_date;
            case_worker.value = report.caseworker?.full_name;
            consolidated_details.value = report.consolidated_observations;
            thirdPartyContact.value = report.third_party_contact;
            third_party_email.value = report.third_party_email;
            third_party_description.value = report.third_party_description;
            // thirdPartyContact.value = report.third_party_contact;
            reportDescription.value = report.initial_description;
            adition_notes.value = report.aditional_notes;
            reporter_name.value = report.reporter?.full_name;
            reporter_birth_date.value = report.reporter?.birth_date;
            reporter_gender.value = report.reporter.gender;
            // reporter_phone_number.value = report.reporter_phone_number;
            // relationWithVictim.value = report.aditional_notes;
            detailed_report.value = report.detailed_report;
            reporter_availability.value =report.reporter_availability;
            
            aggressor_important_observation.value = report.important_observation;
            aggressor_name.value =report.aggressor?.full_name;
            aggressor_birth_date.value = report.aggressor?.birth_date;
            aggressor_gender.value =report.aggressor?.gender;
            reporter_phone_number.value = report.reporter?.phone_number;
            relationWithVictimAgressor.value = report.aggressor_victim_kinship?.id;
            aggressor_address.value =report.aggressor?.address;
            aggressor_phone_number.value = report.aggressor_phone_number;
            aggressor_id_number.value =report.aggressor_document_number;
            afected_people_gender.value = report.affected_person?.gender;
            console.log(afected_people_gender );
            console.log(prioritySelect);
            complete_sumary.value = montarResumo(result);
            consolidated_details.value = montarObservacoesConsolidadas(result);
            // aggressor_birth_date.value = report.aggressor?.full_name;
            affected_people_name.value = report.affected_person?.full_name ?? '';
            affected_people_date_of_birth.value = report.affected_person?.birth_date ?? '';
            // alert(report.affected_person?.gender);
            healthStatusSelect.value = report.affected_person?.health_status?.id ?? '';
            victimDocumentNumber.value = report.affected_person?.id_number ?? '';
            // afected_people_gender
            affected_people_phone_numeber.value = report.affected_person?.phone_number ?? '';
            affected_people_address.value = report.affected_person?.address ?? '';
            affected_people_needs_special_assistance.value = report.special_needs ?? '';
            affected_people_special_assistance_description.value = report.description ?? '';
            representative_name.value = report.representative_name;
            representative_phone_number.value = report.representative_phone_number;
            reporter_phone_number.value = report.reporter?.reporter_phone_number ?? '';
            reporterName.value = report.reporter?.full_name ?? '';
            reporterContact.value = report.contact ?? '';
            reportDescription.value = report.description ?? '';
            
            // Store district_id for form submission
            if (report.district?.id) {
              currentDistrictId = report.district.id;
            }

            // Set province first, which will trigger district filtering
            if (report.district?.province_id) {
              const provinceOption = Array.from(provinceSelect.options).find(opt => Number(opt.value) === report.district.province_id);
              if (provinceOption) {
                provinceSelect.value = provinceOption.value;
                // Trigger change event to populate districts
                $(provinceSelect).trigger('change');
                
                // Set district after districts are loaded
                setTimeout(() => {
                  if (report.district?.id) {
                    const districtOption = Array.from(districtSelect.options).find(opt => Number(opt.value) === report.district.id);
                    if (districtOption) {
                      districtSelect.value = districtOption.value;
                    }
                  }
                }, 100);
              }
            }

            
            const crimes = report.crimes;

// Extrair os IDs dos crimes
            const crimeIds = crimes.map(crime => String(crime.id));

            // Percorrer as opções do select e marcar as correspondentes
            Array.from(aggressor_history.options).forEach(option => {
                if (crimeIds.includes(option.value)) {
                    option.selected = true;
                }
            });
            // Set priority
            if (report.priority?.id) {
              const prioritySelect = document.getElementById('prioritySelect');
              const priorityOption = Array.from(prioritySelect.options).find(opt => Number(opt.value) === report.priority.id);
              if (priorityOption) {
                prioritySelect.value = priorityOption.value;
              }
            }
            console.log(report.victim_legal_representative_kinship);
            if (report.victim_legal_representative_kinship?.id) {
              const prioritySelect = document.getElementById('kinshipSelect');
              const kinshipOption = Array.from(kinshipSelect.options).find(opt => Number(opt.value) === report.victim_legal_representative_kinship.id);
              if (kinshipOption) {
                // alert(kinshipOption.value);
                prioritySelect.value = kinshipOption.value;
              }
            }
            if (report.reporter_victim_kinship?.id) {
              const relationWithVictimSelect = document.getElementById('relationWithVictim');
              const relationWithVictimOption = Array.from(relationWithVictimSelect.options).find(opt => Number(opt.value) === report.reporter_victim_kinship.id);
              if (relationWithVictimOption) {
                // alert(kinshipOption.value);
                relationWithVictimSelect.value = relationWithVictimOption.value;
              }
            }


            if (report.institution?.id) {
              const thirdPartySelect = document.getElementById('thirdPartySelect');
              const thirdPartyOption = Array.from(thirdPartySelect.options).find(opt => Number(opt.value) === report.institution.id);
              if (thirdPartyOption) {
                // alert(kinshipOption.value);
                thirdPartySelect.value = thirdPartyOption.value;
          
                const value = this.value;
                const detailsDiv = document.getElementById('thirdPartyDetails');
                
                // Hide all third party option divs
                document.getElementById('policeStationDiv').style.display = 'none';
                document.getElementById('hospitalDiv').style.display = 'none';
                document.getElementById('courtDiv').style.display = 'none';
                
                if (value) {
                    detailsDiv.style.display = 'block';
                    
                    // Show the correct option div
                    if(value === '1') {
                        document.getElementById('policeStationDiv').style.display = 'block';
                        updateThirdPartyOptions();
                    }
                    if(value === '2') {
                        document.getElementById('hospitalDiv').style.display = 'block';
                        updateThirdPartyOptions();
                    }
                    if(value === '3') {
                        document.getElementById('courtDiv').style.display = 'block';
                        updateThirdPartyOptions();
                    }
                    
                    // SweetAlert informativa
                    // Swal.fire({
                    //     icon: 'info',
                    //     title: 'Atenção!',
                    //     text: 'A denúncia só poderá ser finalizada após o preenchimento do parecer pelo terceiro indicado. Um e-mail ou SMS será enviado para o contato do terceiro.',
                    //     confirmButtonText: 'Entendido'
                    // });
                } else {
                    detailsDiv.style.display = 'none';
                }
          
          
              }
            }


            // 
            // Set status
            if (report.status?.id) {
              const statusOption = Array.from(statusSelect.options).find(opt => Number(opt.value) === report.status.id);
              if (statusOption) {
                statusSelect.value = statusOption.value;
              }
            }
            if (report.status?.id) {
              const thirdPartyOpinionSelectOption = Array.from(document.getElementById('thirdPartyOpinionSelect').options).find(opt => Number(opt.value) === report.status.id);
              if (thirdPartyOpinionSelectOption) {
                document.getElementById('thirdPartyOpinionSelect').value = thirdPartyOpinionSelectOption.value;
              }
            }

            // alert(afected_people_gender.value );s

            // if (report.status?.name) {
            //   const statusOption = Array.from(statusSelect.options).find(opt => opt.text.toLowerCase() === report.status.name.toLowerCase());
            //   if (statusOption) {
            //     statusSelect.value = statusOption.text;
            //   }
            // }
          })
          .catch(error => {
            console.error('Erro na requisição da denúncia:', error);
          });
        }
    });
    function montarResumo(json) {
      const d = json.data;

      const crimes = d.crimes?.map(c => `- ${c.name}`).join("\n") || "Não informado";

      return `
        RESUMO DA DENÚNCIA
        =================

        📌 INFORMAÇÕES GERAIS
        Título: ${d.title}
        Tipo de Denúncia: ${d.report_type?.name || "Não informado"}
        Prioridade: ${d.priority?.name || "Não informado"}
        Estado: ${d.status?.name || "Não informado"}
        Data de Criação: ${new Date(d.creation_date).toLocaleString()}

        📍 LOCALIZAÇÃO
        Distrito: ${d.district?.name || "Não informado"}
        Contacto: ${d.contact || "Não informado"}

        👤 VÍTIMA
        Nome: ${d.affected_person?.full_name || "Não informado"}
        Data de Nascimento: ${d.affected_person?.birth_date || "Não informado"}
        Telefone: ${d.affected_person?.phone_number || "Não informado"}
        Endereço: ${d.affected_person?.address || "Não informado"}
        Condição de Saúde: ${d.affected_person?.health_status?.name || "Não informado"}

        👤 AGRESSOR
        Nome: ${d.aggressor?.full_name || "Não informado"}
        Data de Nascimento: ${d.aggressor?.birth_date || "Não informado"}
        Telefone: ${d.aggressor?.phone_number || "Não informado"}
        Documento: ${d.aggressor_document_number || "Não informado"}
        Parentesco com a vítima: ${d.aggressor_victim_kinship?.name || "Não informado"}

        👁️ TESTEMUNHA
        Nome: ${d.witness?.full_name || "Não informado"}
        Telefone: ${d.witness?.phone_number || "Não informado"}
        Endereço: ${d.witness?.address || "Não informado"}

        🧾 CRIMES REPORTADOS
        ${crimes}

        📝 DESCRIÇÃO
        ${d.description || "Não informado"}

        📝 RELATO DETALHADO
        ${d.detailed_report || "Não informado"}

        ⚠️ OBSERVAÇÕES IMPORTANTES
        ${d.important_observation || "Nenhuma"}

        🗒️ OBSERVAÇÕES ADICIONAIS
        ${d.aditional_notes || "Nenhuma"}

        👤 DENUNCIANTE
        Nome: ${d.reporter?.full_name || "Não informado"}
        Parentesco com a vítima: ${d.reporter_victim_kinship?.name || "Não informado"}

        👤 REPRESENTANTE LEGAL
        Nome: ${d.representative_name || "Não informado"}
        Telefone: ${d.representative_phone_number || "Não informado"}

        =================
        FIM DO RESUMO
        `.trim();
    }
    function montarObservacoesConsolidadas(json) {
      const d = json.data;
      const obs = [];

      if (d.consolidated_observations) {
        obs.push(`🧾 OBSERVAÇÕES CONSOLIDADAS\n${d.consolidated_observations}`);
      }

      if (d.important_observation) {
        obs.push(`⚠️ OBSERVAÇÕES IMPORTANTES\n${d.important_observation}`);
      }

      if (d.aditional_notes) {
        obs.push(`📝 OBSERVAÇÕES ADICIONAIS\n${d.aditional_notes}`);
      }

      if (d.third_party_opinion?.name) {
        obs.push(`👤 PARECER DE TERCEIROS\n${d.third_party_opinion.name}`);
      }

      if (d.third_party_contact || d.third_party_email) {
        obs.push(
          `📞 CONTACTO DO TERCEIRO\n` +
          `Telefone: ${d.third_party_contact || "Não informado"}\n` +
          `Email: ${d.third_party_email || "Não informado"}`
        );
      }

      if (d.summary) {
        obs.push(`📌 NOTAS INTERNAS\n${d.summary}`);
      }

      return obs.length
        ? obs.join("\n\n-------------------------\n\n")
        : "Não existem observações registradas até o momento.";
    }

    </script>
  </body>
</html>