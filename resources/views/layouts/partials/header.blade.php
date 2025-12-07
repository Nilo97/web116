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
                    <li><a href="#">Audio Denuncia</a></li>
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
                  <a class="nav-link" id="btn-logout" href="javascript:void(0)"><i data-feather="log-out"></i><span>Sair</span></a>
                </li>

              </ul>
            </div>
          </div>
        </nav>

      </header>

<!-- SweetAlert2 e Feather Icons -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Inicializa os ícones do Feather
  feather.replace();

  // Logout
  const logoutBtn = document.getElementById('btn-logout');
  if (logoutBtn) {
    logoutBtn.addEventListener('click', function(e) {
      e.preventDefault(); // previne ação padrão

      Swal.fire({
        title: 'Deseja sair?',
        text: "Tem certeza que pretende terminar a sessão?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#aaa',
        confirmButtonText: 'Sim, sair',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
          // Remove token ou dados de sessão
          localStorage.removeItem('auth_token');

          // Feedback visual
          Swal.fire({
            icon: 'success',
            title: 'Sessão terminada!',
            text: 'Até logo!',
            timer: 1500,
            showConfirmButton: false
          });

          // Redireciona para página de login após 1,5s
          setTimeout(() => {
            window.location.href = '/login';
          }, 1500);
        }
      });
    });
  }
});
</script>