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
            <h4>125</h4>
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
            <h4>98</h4>
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
            <h4>22</h4>
          </div>
          <i class="fa-solid fa-hourglass-half fa-2x text-warning"></i>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card shadow-sm h-100 border-start border-4 border-danger">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h6 class="card-title text-muted">Denúncias Urgentes</h6>
            <h4>5</h4>
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
const ctx = document.getElementById('monthlyCasesChart').getContext('2d');
new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
    datasets: [{
      label: 'Denúncias Recebidas',
      data: [12, 19, 14, 23, 17, 25],
      borderColor: '#0d6efd',
      backgroundColor: 'rgba(13,110,253,0.1)',
      tension: 0.3,
      fill: true
    }]
  },
  options: { responsive: true, plugins: { legend: { display: false } } }
});

const ctx2 = document.getElementById('caseTypeChart').getContext('2d');
new Chart(ctx2, {
  type: 'doughnut',
  data: {
    labels: ['Violência Física', 'Negligência', 'Abuso Sexual', 'Outro'],
    datasets: [{
      data: [40, 25, 30, 10],
      backgroundColor: ['#0d6efd','#198754','#ffc107','#dc3545'],
      borderWidth: 1
    }]
  },
  options: { responsive: true, plugins: { legend: { position: 'bottom' } } }
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

