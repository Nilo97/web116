@extends('layouts.app')

@section('title', 'Gestão de Utilizadores')

@section('content')


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

        
  
 








@push('styles')

@endpush


@push('scripts')

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
@endpush

@endsection

