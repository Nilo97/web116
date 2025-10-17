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
  <h2 class="text-center mb-5"><i class="fa-solid fa-shield-halved me-2"></i>Registo de Caso de Violência Contra Criança</h2>

  <!-- Dados da Vítima -->
 <!-- Dados da Vítima -->
<div class="form-section">
  <h5><i class="fa-solid fa-child me-2"></i>Dados da Vítima</h5>
  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Nome Completo</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
        <input type="text" class="form-control" placeholder="Nome da criança">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Data de Nascimento</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
        <input type="date" class="form-control">
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
        <input type="text" class="form-control" placeholder="Bairro, Rua, Nº, Cidade">
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
        <input type="text" class="form-control" placeholder="Número do documento">
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
      <textarea class="form-control" rows="3" placeholder="Características físicas, comportamento, traços especiais..."></textarea>
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
<div class="form-section">
  <h5><i class="fa-solid fa-user-slash me-2"></i>Dados do Agressor</h5>
  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Nome Completo</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user-secret"></i></span>
        <input type="text" class="form-control" placeholder="Nome do agressor">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Data de Nascimento</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
        <input type="date" class="form-control">
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
        <input type="text" class="form-control" placeholder="Bairro, Rua, Nº">
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
<!-- Dados da Denúncia -->
<div class="form-section">
  <h5><i class="fa-solid fa-file-signature me-2"></i>Dados da Denúncia</h5>
  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Número da Denúncia</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
        <input type="text" class="form-control" placeholder="Ex: DN-2025-001">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Data da Denúncia</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-calendar-day"></i></span>
        <input type="date" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Hora da Denúncia</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
        <input type="time" class="form-control">
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
        <input type="text" class="form-control" placeholder="Nome da pessoa que denunciou">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Contacto do Denunciante</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
        <input type="tel" class="form-control" placeholder="+258 xxx xxx xxx">
      </div>
    </div>
    <div class="col-12">
      <label class="form-label">Descrição Inicial da Denúncia</label>
      <textarea class="form-control" rows="4" placeholder="Resumo do ocorrido conforme informado pelo denunciante..."></textarea>
    </div>
    <div class="col-md-6">
      <label class="form-label">Urgência / Prioridade</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-exclamation-triangle"></i></span>
        <select class="form-select">
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
        <select class="form-select">
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

<!-- Dados da Testemunha -->
<div class="form-section">
  <h5><i class="fa-solid fa-user-tie me-2"></i>Dados da Testemunha</h5>
  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Nome Completo</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
        <input type="text" class="form-control" placeholder="Nome completo da testemunha">
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Data de Nascimento</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
        <input type="date" class="form-control">
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
      <textarea class="form-control" rows="4" placeholder="Escreva o depoimento ou informações fornecidas pela testemunha..."></textarea>
    </div>
    <div class="col-12">
      <label class="form-label">Observações Adicionais</label>
      <textarea class="form-control" rows="3" placeholder="Informações complementares, notas ou recomendações do entrevistador..."></textarea>
    </div>
  </div>
</div>



<!-- Terceiros -->

<!-- Encaminhamento a Terceiros -->
<div class="form-section">
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
        <option value="maputo">Maputo</option>
        <option value="beira">Beira</option>
        <option value="nampula">Nampula</option>
      </select>
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
<div class="form-section">
  <h5><i class="fa-solid fa-book-open-reader me-2"></i>Histórico Geral do Caso</h5>
  <div class="row g-3">
    <div class="col-12">
      <label class="form-label">Resumo Completo do Caso</label>
      <textarea class="form-control" rows="6" readonly placeholder="Este campo apresenta automaticamente todas as informações registradas: dados da vítima, agressor, testemunhas, pareceres de terceiros e demais observações."></textarea>
    </div>
    <div class="col-md-6">
      <label class="form-label">Data de Última Atualização</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-calendar-day"></i></span>
        <input type="date" class="form-control" readonly>
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Último Responsável</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user-check"></i></span>
        <input type="text" class="form-control" readonly placeholder="Nome do operador ou parceiro responsável pela última atualização">
      </div>
    </div>
    <div class="col-12">
      <label class="form-label">Observações Consolidadas</label>
      <textarea class="form-control" rows="3" readonly placeholder="Todas as observações consolidadas, inclusive comentários de terceiros e notas internas, aparecem aqui."></textarea>
    </div>
  </div>
</div>

<!-- Botão de Atualização da Denúncia -->
<div class="text-center">
  <button class="btn btn-primary btn-lg mt-3"><i class="fa-solid fa-floppy-disk me-2"></i>Atualizar Denúncia</button>
</div>


  <!-- Botão de Submissão -->
  <div class="text-center">
    <button class="btn btn-primary btn-lg mt-3"><i class="fa-solid fa-paper-plane me-2"></i>Submeter Caso</button>
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
  </body>
</html>