@extends('layouts.app')

@section('title', 'DASHBOARD')

@section('content')
 

  <!-- Container-fluid starts-->
 <div class="container-fluid py-5">
  <h2 class="text-center mb-4"><i class="fa-solid fa-chart-simple me-2"></i>Painel Estatístico de Denúncias</h2>

  <!-- Filtros e Ações -->
<div class="row g-2 align-items-center mb-3">
  <!-- Status -->
  <div class="col-md-3">
    <select class="form-select">
      <option value="">Filtrar por Status</option>
      <option>Concluída</option>
      <option>Pendente</option>
      <option>Urgente</option>
    </select>
  </div>

  <!-- Tipo de Caso -->
  <div class="col-md-3">
    <select class="form-select">
      <option value="">Filtrar por Tipo de Caso</option>
      <option>Violência Física</option>
      <option>Abuso Sexual</option>
      <option>Negligência</option>
      <option>Outro</option>
    </select>
  </div>

  <!-- Intervalo de Datas -->
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
      <input type="date" class="form-control" placeholder="Data Início">
      <span class="input-group-text">até</span>
      <input type="date" class="form-control" placeholder="Data Fim">
    </div>
  </div>

  <!-- Botões de Ação -->
  <div class="col-md-3 text-end">
    <button class="btn btn-outline-secondary me-2"><i class="fa-solid fa-print me-1"></i>Imprimir</button>
    <button class="btn btn-outline-primary"><i class="fa-solid fa-file-export me-1"></i>Exportar</button>
  </div>
</div>


  <!-- Cards de Estatísticas -->
  <div class="row g-3 mb-5">
    <div class="col-md-3">
      <div class="card shadow-sm h-100 border-start border-4 border-primary">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h6 class="card-title text-muted">Denúncias Recebidas</h6>
            <h4 id="totalReports">0</h4>
          </div>
          <i class="fa-solid fa-inbox fa-2x text-primary"></i>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card shadow-sm h-100 border-start border-4 border-success">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h6 class="card-title text-muted">Denúncias Concluídas</h6>
            <h4 id="closedReports">0</h4>
          </div>
          <i class="fa-solid fa-check fa-2x text-success"></i>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card shadow-sm h-100 border-start border-4 border-warning">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h6 class="card-title text-muted">Denúncias Pendentes</h6>
            <h4 id="pendingReports">0</h4>
          </div>
          <i class="fa-solid fa-hourglass-half fa-2x text-warning"></i>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card shadow-sm h-100 border-start border-4 border-danger">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h6 class="card-title text-muted">Denúncias Em Progresso</h6>
            <h4 id="inProgressReports">0</h4>
          </div>
          <i class="fa-solid fa-triangle-exclamation fa-2x text-danger"></i>
        </div>
      </div>
    </div>
  </div>

  <!-- Gráficos Limpos -->
  <div class="row g-4 mb-5">
    <div class="col-md-6">
      <div class="card shadow-sm h-100">
        <div class="card-header bg-light">
          <h6 class="mb-0"><i class="fa-solid fa-chart-line me-2"></i>Denúncias por Mês</h6>
        </div>
        <div class="card-body">
          <canvas id="monthlyCasesChart" height="180"></canvas>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card shadow-sm h-100">
        <div class="card-header bg-light">
          <h6 class="mb-0"><i class="fa-solid fa-pie-chart me-2"></i>Tipos de Casos</h6>
        </div>
        <div class="card-body">
          <canvas id="caseTypeChart" height="180"></canvas>
        </div>
      </div>
    </div>
  </div>

  <!-- Tabela de Últimas Denúncias -->
  <div class="card shadow-sm">
    <div class="card-header bg-light d-flex justify-content-between align-items-center">
      <h6 class="mb-0"><i class="fa-solid fa-table-list me-2"></i>Últimas Denúncias</h6>
      <button class="btn btn-sm btn-outline-success"><i class="fa-solid fa-plus me-1"></i>Novo Caso</button>
    </div>
    <div class="card-body">
      <table class="table table-hover table-bordered align-middle">
        <thead class="table-light">
          <tr>
            <th>Número</th>
            <th>Data</th>
            <th>Denunciante</th>
            <th>Status</th>
            <th>Urgência</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>DN-2025-001</td>
            <td>12/11/2025</td>
            <td>Maria Silva</td>
            <td><span class="badge bg-success">Concluída</span></td>
            <td><span class="badge bg-danger">Alta</span></td>
            <td>
              <button class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i></button>
              <button class="btn btn-sm btn-warning"><i class="fa-solid fa-pen"></i></button>
              <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <td>DN-2025-002</td>
            <td>13/11/2025</td>
            <td>João Pedro</td>
            <td><span class="badge bg-warning">Pendente</span></td>
            <td><span class="badge bg-warning">Média</span></td>
            <td>
              <button class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i></button>
              <button class="btn btn-sm btn-warning"><i class="fa-solid fa-pen"></i></button>
              <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
      


@push('styles')
<style>
.table-striped tbody tr:hover {
  background-color: #f0f8ff !important;
  cursor: pointer;
  transition: 0.3s;
}

.table thead th {
  font-weight: 600;
  font-size: 14px;
  text-transform: uppercase;
}

.table td, .table th {
  vertical-align: middle;
}

.btn-sm {
  width: 36px;
  height: 36px;
  padding: 0;
  display: inline-flex;
  align-items: center;
  justify-content: center;
}
</style>
@endpush






@push('scripts')
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Variáveis globais para os gráficos
let monthlyChart = null;
let typeChart = null;

// Função para buscar dados da API
async function loadDashboardData() {
  const authToken = localStorage.getItem('auth_token');
  if (!authToken) {
    console.error('Token de autenticação não encontrado.');
    return;
  }

  try {
    const response = await fetch('http://127.0.0.1:9800/api/dashboard/summary', {
      headers: {
        'Authorization': `Bearer ${authToken}`,
        'Content-Type': 'application/json',
        'Accept': 'application/json'
      }
    });

    if (!response.ok) {
      throw new Error('Erro ao carregar dados do dashboard');
    }

    const result = await response.json();
    const data = result.data;

    // Atualizar cards de estatísticas
    updateStatisticsCards(data.reportsByStatus);

    // Atualizar gráficos
    updateMonthlyChart(data.reportsByMonth);
    updateTypeChart(data.reportsByType);

  } catch (error) {
    console.error('Erro ao carregar dados:', error);
  }
}

// Função para atualizar os cards de estatísticas
function updateStatisticsCards(reportsByStatus) {
  let totalReports = 0;
  let closedReports = 0;
  let pendingReports = 0;
  let inProgressReports = 0;

  reportsByStatus.forEach(status => {
    totalReports += status.total;
    
    if (status.status === 'Fechado') {
      closedReports = status.total;
    } else if (status.status === 'Pendente') {
      pendingReports = status.total;
    } else if (status.status === 'Em progresso') {
      inProgressReports = status.total;
    }
  });

  document.getElementById('totalReports').textContent = totalReports;
  document.getElementById('closedReports').textContent = closedReports;
  document.getElementById('pendingReports').textContent = pendingReports;
  document.getElementById('inProgressReports').textContent = inProgressReports;
}

// Função para atualizar o gráfico mensal
function updateMonthlyChart(reportsByMonth) {
  const ctx = document.getElementById('monthlyCasesChart').getContext('2d');
  
  const labels = reportsByMonth.map(item => item.month);
  const data = reportsByMonth.map(item => item.total);
  const colors = reportsByMonth.map(item => item.color);

  // Destruir gráfico existente se houver
  if (monthlyChart) {
    monthlyChart.destroy();
  }

  monthlyChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: labels,
      datasets: [{
        label: 'Denúncias Recebidas',
        data: data,
        borderColor: '#0d6efd',
        backgroundColor: 'rgba(13,110,253,0.1)',
        tension: 0.3,
        fill: true
      }]
    },
    options: { 
      responsive: true, 
      plugins: { 
        legend: { display: false } 
      } 
    }
  });
}

// Função para atualizar o gráfico de tipos
function updateTypeChart(reportsByType) {
  const ctx2 = document.getElementById('caseTypeChart').getContext('2d');
  
  // Filtrar apenas tipos com total > 0 para melhor visualização
  const filteredTypes = reportsByType.filter(item => item.total > 0);
  
  const labels = filteredTypes.map(item => item.type);
  const data = filteredTypes.map(item => item.total);
  const backgroundColor = filteredTypes.map(item => item.color);

  // Destruir gráfico existente se houver
  if (typeChart) {
    typeChart.destroy();
  }

  typeChart = new Chart(ctx2, {
    type: 'doughnut',
    data: {
      labels: labels,
      datasets: [{
        data: data,
        backgroundColor: backgroundColor,
        borderWidth: 1
      }]
    },
    options: { 
      responsive: true, 
      plugins: { 
        legend: { position: 'bottom' } 
      } 
    }
  });
}

// Carregar dados quando a página estiver pronta
document.addEventListener('DOMContentLoaded', function() {
  loadDashboardData();
});
</script>


<!-- SweetAlert para confirmar exclusão -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.querySelectorAll('.btn-danger').forEach(button => {
  button.addEventListener('click', function() {
    Swal.fire({
      title: 'Tem certeza?',
      text: "Esta ação eliminará o utilizador permanentemente!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Sim, eliminar!',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Eliminado!',
          'O utilizador foi eliminado.',
          'success'
        )
        // Aqui você adiciona a lógica para eliminar no backend
      }
    })
  });
});
</script>

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
@endpush


@endsection

