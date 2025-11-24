@extends('layouts.app')

@section('title', 'Configuracao')

@section('content')
 


<div class="container-fluid py-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="mb-0"><i class="fa-solid fa-gears me-2"></i>Parâmetros do Sistema</h3>
    <div>
      <button class="btn btn-outline-secondary me-2" id="btnPrint"><i class="fa-solid fa-print me-1"></i>Imprimir</button>
      <button class="btn btn-outline-primary" id="btnExport"><i class="fa-solid fa-file-export me-1"></i>Exportar</button>
    </div>
  </div>

  <!-- Tabs -->
  <ul class="nav nav-tabs mb-3" id="paramTabs" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="tipos-tab" data-bs-toggle="tab" data-bs-target="#tipos" type="button" role="tab">Tipos de Caso</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="entidades-tab" data-bs-toggle="tab" data-bs-target="#entidades" type="button" role="tab">Entidades</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="faixas-tab" data-bs-toggle="tab" data-bs-target="#faixas" type="button" role="tab">Faixas Etárias</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="prioridade-tab" data-bs-toggle="tab" data-bs-target="#prioridade" type="button" role="tab">Prioridade</button>
    </li>
  </ul>

  <div class="tab-content">

    <!-- TIPOS DE CASO -->
    <div class="tab-pane fade show active" id="tipos" role="tabpanel">
      <div class="card mb-3 shadow-sm">
        <div class="card-body d-flex justify-content-between align-items-center">
          <div>
            <h5 class="mb-0">Tipos de Caso</h5>
            <div class="small-muted">Gerencie os tipos de ocorrência registrados no sistema.</div>
          </div>
          <div>
            <button class="btn btn-sm btn-outline-secondary me-2" id="refreshTipos"><i class="fa-solid fa-arrow-rotate-right"></i> Atualizar</button>
            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalTipo" id="btnNewTipo"><i class="fa-solid fa-plus me-1"></i> Novo Tipo</button>
          </div>
        </div>
      </div>

      <div class="card shadow-sm">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="tiposTable" style="width:100%">
              <thead>
                <tr>
                  <th>Nome do Tipo</th>
                  <th>Descrição</th>
                  <th>Status</th>
                  <th style="width:130px">Ações</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- ENTIDADES -->
    <div class="tab-pane fade" id="entidades" role="tabpanel">
      <div class="card mb-3 shadow-sm">
        <div class="card-body d-flex justify-content-between align-items-center">
          <div>
            <h5 class="mb-0">Entidades</h5>
            <div class="small-muted">Organizações/Entidades parceiras (Polícia, Hospital, ONG, etc.).</div>
          </div>
          <div>
            <button class="btn btn-sm btn-outline-secondary me-2" id="refreshEntidades"><i class="fa-solid fa-arrow-rotate-right"></i> Atualizar</button>
            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalEntidade" id="btnNewEntidade"><i class="fa-solid fa-plus me-1"></i> Nova Entidade</button>
          </div>
        </div>
      </div>

      <div class="card shadow-sm">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="entidadesTable" style="width:100%">
              <thead>
                <tr>
                  <th>Nome da Entidade</th>
                  <th>Tipo</th>
                  <th>Contacto</th>
                  <th>Localização</th>
                  <th style="width:130px">Ações</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- FAIXAS ETÁRIAS -->
    <div class="tab-pane fade" id="faixas" role="tabpanel">
      <div class="card mb-3 shadow-sm">
        <div class="card-body d-flex justify-content-between align-items-center">
          <div>
            <h5 class="mb-0">Faixas Etárias</h5>
            <div class="small-muted">Defina as faixas etárias utilizadas nos relatórios.</div>
          </div>
          <div>
            <button class="btn btn-sm btn-outline-secondary me-2" id="refreshFaixas"><i class="fa-solid fa-arrow-rotate-right"></i> Atualizar</button>
            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalFaixa" id="btnNewFaixa"><i class="fa-solid fa-plus me-1"></i> Nova Faixa</button>
          </div>
        </div>
      </div>

      <div class="card shadow-sm">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="faixasTable" style="width:100%">
              <thead>
                <tr>
                  <th>Faixa</th>
                  <th>Descrição</th>
                  <th style="width:120px">Ações</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- PRIORIDADE -->
    <div class="tab-pane fade" id="prioridade" role="tabpanel">
      <div class="card mb-3 shadow-sm">
        <div class="card-body d-flex justify-content-between align-items-center">
          <div>
            <h5 class="mb-0">Prioridade</h5>
            <div class="small-muted">Configure níveis de prioridade e seus indicadores visuais.</div>
          </div>
          <div>
            <button class="btn btn-sm btn-outline-secondary me-2" id="refreshPrioridade"><i class="fa-solid fa-arrow-rotate-right"></i> Atualizar</button>
            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalPrioridade" id="btnNewPrioridade"><i class="fa-solid fa-plus me-1"></i> Nova Prioridade</button>
          </div>
        </div>
      </div>

      <div class="card shadow-sm">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="prioridadeTable" style="width:100%">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Indicador</th>
                  <th>Descrição</th>
                  <th style="width:130px">Ações</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div> <!-- tab-content -->
</div> <!-- container -->

<!-- ============================
    MODAIS (Criar / Editar reuse)
============================== -->

<!-- Modal Tipo (Tipos de Caso) -->
<div class="modal fade" id="modalTipo" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <form id="formTipo" class="needs-validation" novalidate>
        <div class="modal-header bg-light">
          <h5 class="modal-title"><i class="fa-solid fa-list-check me-2"></i><span id="modalTipoTitle">Novo Tipo de Caso</span></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="tipoIndex" value="">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label"><i class="fa-solid fa-tag me-1"></i>Nome do Tipo</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-tag"></i></span>
                <input id="tipoNome" class="form-control" required />
              </div>
              <div class="invalid-feedback">Insira o nome do tipo.</div>
            </div>
            <div class="col-md-6">
              <label class="form-label"><i class="fa-solid fa-toggle-on me-1"></i>Status</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-toggle-on"></i></span>
                <select id="tipoStatus" class="form-select" required>
                  <option value="Ativo">Ativo</option>
                  <option value="Inativo">Inativo</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <label class="form-label"><i class="fa-solid fa-align-left me-1"></i>Descrição</label>
              <textarea id="tipoDesc" class="form-control" rows="3"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success" id="saveTipoBtn"><i class="fa-solid fa-floppy-disk me-1"></i>Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Entidade -->
<div class="modal fade" id="modalEntidade" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <form id="formEntidade" class="needs-validation" novalidate>
        <div class="modal-header bg-light">
          <h5 class="modal-title"><i class="fa-solid fa-building me-2"></i><span id="modalEntidadeTitle">Nova Entidade</span></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="entidadeIndex" value="">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label"><i class="fa-solid fa-building me-1"></i>Nome da Entidade</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
                <input id="entidadeNome" class="form-control" required />
              </div>
              <div class="invalid-feedback">Insira o nome da entidade.</div>
            </div>
            <div class="col-md-6">
              <label class="form-label"><i class="fa-solid fa-list me-1"></i>Tipo</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-list"></i></span>
                <select id="entidadeTipo" class="form-select" required>
                  <option value="">Selecionar</option>
                  <option>Polícia</option>
                  <option>Hospital</option>
                  <option>ONG</option>
                  <option>Escola</option>
                  <option>Tribunal</option>
                  <option>Outro</option>
                </select>
              </div>
              <div class="invalid-feedback">Selecione o tipo.</div>
            </div>
            <div class="col-md-6">
              <label class="form-label"><i class="fa-solid fa-phone me-1"></i>Contacto</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                <input id="entidadeContacto" class="form-control" placeholder="+258 84 123 4567" />
              </div>
            </div>
            <div class="col-md-6">
              <label class="form-label"><i class="fa-solid fa-location-dot me-1"></i>Localização</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                <input id="entidadeLocal" class="form-control" />
              </div>
            </div>
            <div class="col-12">
              <label class="form-label"><i class="fa-solid fa-align-left me-1"></i>Observações</label>
              <textarea id="entidadeObs" class="form-control" rows="2"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk me-1"></i>Salvar Entidade</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Faixa Etaria -->
<div class="modal fade" id="modalFaixa" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <form id="formFaixa" class="needs-validation" novalidate>
        <div class="modal-header bg-light">
          <h5 class="modal-title"><i class="fa-solid fa-child-reaching me-2"></i><span id="modalFaixaTitle">Nova Faixa Etária</span></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="faixaIndex" value="">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label"><i class="fa-solid fa-arrows-left-right me-1"></i>Faixa</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-arrows-left-right"></i></span>
                <input id="faixaNome" class="form-control" placeholder="Ex: 0-5 anos" required />
              </div>
              <div class="invalid-feedback">Insira a faixa etária.</div>
            </div>
            <div class="col-md-6">
              <label class="form-label"><i class="fa-solid fa-toggle-on me-1"></i>Status</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-toggle-on"></i></span>
                <select id="faixaStatus" class="form-select">
                  <option value="Ativo">Ativo</option>
                  <option value="Inativo">Inativo</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <label class="form-label"><i class="fa-solid fa-align-left me-1"></i>Descrição</label>
              <textarea id="faixaDesc" class="form-control" rows="2"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk me-1"></i>Salvar Faixa</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Prioridade -->
<div class="modal fade" id="modalPrioridade" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <form id="formPrioridade" class="needs-validation" novalidate>
        <div class="modal-header bg-light">
          <h5 class="modal-title"><i class="fa-solid fa-exclamation-triangle me-2"></i><span id="modalPrioridadeTitle">Nova Prioridade</span></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="prioIndex" value="">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label"><i class="fa-solid fa-tag me-1"></i>Nome</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-tag"></i></span>
                <input id="prioNome" class="form-control" required />
              </div>
              <div class="invalid-feedback">Insira o nome da prioridade.</div>
            </div>
            <div class="col-md-6">
              <label class="form-label"><i class="fa-solid fa-palette me-1"></i>Indicador (cor)</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-palette"></i></span>
                <select id="prioCor" class="form-select" required>
                  <option value="#dc3545">Vermelho</option>
                  <option value="#ffc107">Amarelo</option>
                  <option value="#198754">Verde</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <label class="form-label"><i class="fa-solid fa-align-left me-1"></i>Descrição</label>
              <textarea id="prioDesc" class="form-control" rows="2"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk me-1"></i>Salvar Prioridade</button>
        </div>
      </form>
    </div>
  </div>
</div>




@push('styles')

<!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

  <style>
    /* Visual sóbrio, bordas e cards leves */
    body { background: #f7f8fb; font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; }
    .card { border-radius: 0.6rem; }
    .tab-pane .card { border: 0; }
    .table thead th { background: #f1f3f5; font-weight:600; }
    .btn-icon { width:36px; height:36px; display:inline-flex; align-items:center; justify-content:center; padding:0; border-radius:6px; }
    .border-start-accent { border-left-width: .4rem !important; border-left-style: solid; border-left-color: #0d6efd; }
    .border-start-accent.success{ border-left-color: #198754; }
    .small-muted { color:#6c757d; font-size:0.9rem; }
    /* Validation */
    input.is-valid, select.is-valid, textarea.is-valid { border-color: #198754 !important; box-shadow: 0 0 0 .125rem rgba(25,135,84,.12); }
    input.is-invalid, select.is-invalid, textarea.is-invalid { border-color: #dc3545 !important; box-shadow: 0 0 0 .125rem rgba(220,53,69,.08); }
    .dataTables_wrapper .dataTables_paginate .paginate_button { padding: .2rem .6rem; }
    /* Compact table on small screens */
    @media (max-width: 767px) {
      .table-responsive { font-size: .92rem; }
      .btn-lg { font-size: .9rem; padding: .45rem .8rem; }
    }
  </style>

@push('scripts')

<!-- Dependencies -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
/* ===========================
   Dados iniciais (fictícios)
   =========================== */
let tiposData = [
  { nome: 'Violência Física', descricao: 'Agressões físicas contra a criança', status: 'Ativo' },
  { nome: 'Abuso Sexual', descricao: 'Abuso sexual e exploração', status: 'Ativo' },
  { nome: 'Negligência', descricao: 'Negligência familiar', status: 'Ativo' }
];

let entidadesData = [
  { nome: 'Polícia da República', tipo: 'Polícia', contacto: '+258 21 322 000', local: 'Maputo', obs: 'Contato central' },
  { nome: 'Hospital Central', tipo: 'Hospital', contacto: '+258 21 312 111', local: 'Maputo', obs: '' }
];

let faixasData = [
  { faixa: '0-5 anos', descricao: 'Bebés e pré-escolares', status: 'Ativo' },
  { faixa: '6-12 anos', descricao: 'Crianças em idade escolar', status: 'Ativo' }
];

let prioData = [
  { nome: 'Alta', cor: '#dc3545', descricao: 'Intervenção imediata' },
  { nome: 'Média', cor: '#ffc107', descricao: 'Monitorar e priorizar' },
  { nome: 'Baixa', cor: '#198754', descricao: 'Sem risco imediato' }
];

/* ===========================
   Inicialização DataTables
   =========================== */
let tiposTable, entidadesTable, faixasTable, prioTable;

function initTables() {
  tiposTable = $('#tiposTable').DataTable({
    data: tiposData,
    columns: [
      { data: 'nome' },
      { data: 'descricao' },
      { data: 'status', render: data => data === 'Ativo' ? '<span class="badge bg-success">Ativo</span>' : '<span class="badge bg-secondary">Inativo</span>' },
      { data: null, orderable:false, render: (d, t, row, meta) => actionButtons('tipos', meta.row) }
    ],
    pageLength: 5
  });

  entidadesTable = $('#entidadesTable').DataTable({
    data: entidadesData,
    columns: [
      { data: 'nome' },
      { data: 'tipo' },
      { data: 'contacto' },
      { data: 'local' },
      { data: null, orderable:false, render: (d,t,row,meta)=> actionButtons('entidades', meta.row) }
    ],
    pageLength: 5
  });

  faixasTable = $('#faixasTable').DataTable({
    data: faixasData,
    columns: [
      { data: 'faixa' },
      { data: 'descricao' },
      { data: null, orderable:false, render: (d,t,row,meta)=> actionButtons('faixas', meta.row) }
    ],
    pageLength: 5
  });

  prioTable = $('#prioridadeTable').DataTable({
    data: prioData,
    columns: [
      { data: 'nome' },
      { data: 'cor', render: c => `<div class="d-flex align-items-center"><div style="width:18px;height:12px;background:${c};border-radius:3px;margin-right:8px;border:1px solid rgba(0,0,0,.08)"></div><small class="small-muted">${c}</small></div>` },
      { data: 'descricao' },
      { data: null, orderable:false, render: (d,t,row,meta)=> actionButtons('prioridade', meta.row) }
    ],
    pageLength: 5
  });
}

function actionButtons(section, idx) {
  return `
    <div class="d-flex gap-1">
      <button class="btn btn-sm btn-info btn-icon" title="Ver" onclick="viewItem('${section}', ${idx})"><i class="fa-solid fa-eye"></i></button>
      <button class="btn btn-sm btn-warning btn-icon" title="Editar" onclick="editItem('${section}', ${idx})"><i class="fa-solid fa-pen-to-square"></i></button>
      <button class="btn btn-sm btn-danger btn-icon" title="Eliminar" onclick="deleteItem('${section}', ${idx})"><i class="fa-solid fa-trash"></i></button>
    </div>
  `;
}

/* ===========================
   Exibir / Editar / Deletar
   =========================== */
function viewItem(section, idx) {
  // Simples modal informativo
  let item;
  if(section==='tipos') item = tiposData[idx];
  if(section==='entidades') item = entidadesData[idx];
  if(section==='faixas') item = faixasData[idx];
  if(section==='prioridade') item = prioData[idx];

  let html = '<div class="mb-2">';
  for(const key in item) html += `<div><strong>${key}:</strong> ${item[key] ? item[key] : ''}</div>`;
  html += '</div>';

  Swal.fire({
    title: 'Visualizar',
    html,
    width: 600,
    confirmButtonText: 'Fechar'
  });
}

function editItem(section, idx) {
  if(section==='tipos') {
    $('#tipoIndex').val(idx);
    $('#modalTipoTitle').text('Editar Tipo de Caso');
    $('#tipoNome').val(tiposData[idx].nome);
    $('#tipoDesc').val(tiposData[idx].descricao);
    $('#tipoStatus').val(tiposData[idx].status);
    $('#modalTipo').modal('show');
  }
  if(section==='entidades') {
    $('#entidadeIndex').val(idx);
    $('#modalEntidadeTitle').text('Editar Entidade');
    $('#entidadeNome').val(entidadesData[idx].nome);
    $('#entidadeTipo').val(entidadesData[idx].tipo);
    $('#entidadeContacto').val(entidadesData[idx].contacto);
    $('#entidadeLocal').val(entidadesData[idx].local);
    $('#entidadeObs').val(entidadesData[idx].obs);
    $('#modalEntidade').modal('show');
  }
  if(section==='faixas') {
    $('#faixaIndex').val(idx);
    $('#modalFaixaTitle').text('Editar Faixa Etária');
    $('#faixaNome').val(faixasData[idx].faixa);
    $('#faixaDesc').val(faixasData[idx].descricao);
    $('#faixaStatus').val(faixasData[idx].status);
    $('#modalFaixa').modal('show');
  }
  if(section==='prioridade') {
    $('#prioIndex').val(idx);
    $('#modalPrioridadeTitle').text('Editar Prioridade');
    $('#prioNome').val(prioData[idx].nome);
    $('#prioCor').val(prioData[idx].cor);
    $('#prioDesc').val(prioData[idx].descricao);
    $('#modalPrioridade').modal('show');
  }
}

function deleteItem(section, idx) {
  Swal.fire({
    title: 'Tem certeza?',
    text: "Esta ação eliminará o item permanentemente!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Sim, eliminar',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if(result.isConfirmed) {
      if(section==='tipos') tiposData.splice(idx,1);
      if(section==='entidades') entidadesData.splice(idx,1);
      if(section==='faixas') faixasData.splice(idx,1);
      if(section==='prioridade') prioData.splice(idx,1);
      reloadTables();
      Swal.fire('Eliminado', 'Item removido com sucesso.', 'success');
    }
  });
}

/* ===========================
   Save / Create handlers
   =========================== */

function reloadTables() {
  tiposTable.clear().rows.add(tiposData).draw();
  entidadesTable.clear().rows.add(entidadesData).draw();
  faixasTable.clear().rows.add(faixasData).draw();
  prioTable.clear().rows.add(prioData).draw();
}

/* --- TIPOS --- */
$('#formTipo').on('submit', function(e){
  e.preventDefault();
  const nome = $('#tipoNome').val().trim();
  const desc = $('#tipoDesc').val().trim();
  const status = $('#tipoStatus').val();

  if(!nome) { markInvalid('#tipoNome'); return; } else { markValid('#tipoNome'); }
  const idx = $('#tipoIndex').val();
  if(idx==='') {
    tiposData.push({ nome, descricao: desc, status });
  } else {
    tiposData[idx] = { nome, descricao: desc, status };
  }
  $('#modalTipo').modal('hide');
  $('#formTipo')[0].reset();
  $('#tipoIndex').val('');
  reloadTables();
});

/* --- ENTIDADES --- */
$('#formEntidade').on('submit', function(e){
  e.preventDefault();
  const nome = $('#entidadeNome').val().trim();
  const tipo = $('#entidadeTipo').val();
  const contacto = $('#entidadeContacto').val().trim();
  const local = $('#entidadeLocal').val().trim();
  const obs = $('#entidadeObs').val().trim();

  if(!nome || !tipo) { if(!nome) markInvalid('#entidadeNome'); if(!tipo) markInvalid('#entidadeTipo'); return; } 
  markValid('#entidadeNome'); markValid('#entidadeTipo');

  const idx = $('#entidadeIndex').val();
  if(idx==='') entidadesData.push({ nome, tipo, contacto, local, obs });
  else entidadesData[idx] = { nome, tipo, contacto, local, obs };

  $('#modalEntidade').modal('hide');
  $('#formEntidade')[0].reset();
  $('#entidadeIndex').val('');
  reloadTables();
});

/* --- FAIXAS --- */
$('#formFaixa').on('submit', function(e){
  e.preventDefault();
  const faixa = $('#faixaNome').val().trim();
  const desc = $('#faixaDesc').val().trim();
  const status = $('#faixaStatus').val();
  if(!faixa) { markInvalid('#faixaNome'); return; } else { markValid('#faixaNome'); }
  const idx = $('#faixaIndex').val();
  if(idx==='') faixasData.push({ faixa, descricao: desc, status });
  else faixasData[idx] = { faixa, descricao: desc, status };
  $('#modalFaixa').modal('hide');
  $('#formFaixa')[0].reset();
  $('#faixaIndex').val('');
  reloadTables();
});

/* --- PRIORIDADE --- */
$('#formPrioridade').on('submit', function(e){
  e.preventDefault();
  const nome = $('#prioNome').val().trim();
  const cor = $('#prioCor').val();
  const desc = $('#prioDesc').val().trim();
  if(!nome) { markInvalid('#prioNome'); return; } else markValid('#prioNome');
  const idx = $('#prioIndex').val();
  if(idx==='') prioData.push({ nome, cor, descricao: desc });
  else prioData[idx] = { nome, cor, descricao: desc };
  $('#modalPrioridade').modal('hide');
  $('#formPrioridade')[0].reset();
  $('#prioIndex').val('');
  reloadTables();
});

/* ===========================
   Helpers: validation visuals
   =========================== */
function markInvalid(selector) {
  $(selector).addClass('is-invalid').removeClass('is-valid').focus();
}
function markValid(selector) {
  $(selector).addClass('is-valid').removeClass('is-invalid');
}

/* Add realtime validation */
$('input, select, textarea').on('input change', function(){
  if($(this).prop('required')) {
    if($(this).val() && $(this).val().toString().trim() !== '') markValid(this);
    else $(this).removeClass('is-valid is-invalid');
  }
});

/* ===========================
   Inicialização e eventos UI
   =========================== */
$(document).ready(function(){
  initTables();

  // Pre-popula com dados fictícios ao carregar
  reloadTables();

  // Reset modal titles on open for 'new'
  $('#btnNewTipo').on('click', function(){
    $('#modalTipoTitle').text('Novo Tipo de Caso');
    $('#tipoIndex').val('');
    $('#formTipo')[0].reset();
    $('#formTipo').find('.is-valid, .is-invalid').removeClass('is-valid is-invalid');
  });
  $('#btnNewEntidade').on('click', function(){
    $('#modalEntidadeTitle').text('Nova Entidade');
    $('#entidadeIndex').val('');
    $('#formEntidade')[0].reset();
    $('#formEntidade').find('.is-valid, .is-invalid').removeClass('is-valid is-invalid');
  });
  $('#btnNewFaixa').on('click', function(){
    $('#modalFaixaTitle').text('Nova Faixa Etária');
    $('#faixaIndex').val('');
    $('#formFaixa')[0].reset();
    $('#formFaixa').find('.is-valid, .is-invalid').removeClass('is-valid is-invalid');
  });
  $('#btnNewPrioridade').on('click', function(){
    $('#modalPrioridadeTitle').text('Nova Prioridade');
    $('#prioIndex').val('');
    $('#formPrioridade')[0].reset();
    $('#formPrioridade').find('.is-valid, .is-invalid').removeClass('is-valid is-invalid');
  });

  // Refresh buttons (just redraws from memory)
  $('#refreshTipos').on('click', reloadTables);
  $('#refreshEntidades').on('click', reloadTables);
  $('#refreshFaixas').on('click', reloadTables);
  $('#refreshPrioridade').on('click', reloadTables);

  // Print / Export: basic behavior
  $('#btnPrint').on('click', function(){ window.print(); });
  $('#btnExport').on('click', function(){
    Swal.fire('Exportar', 'Funcionalidade de exportação será adicionada. Podemos exportar CSV/PDF quando desejar.', 'info');
  });
});


function actionButtons(type, index) {
  return `
    <button class="btn btn-sm btn-primary me-1" onclick="editItem('${type}', ${index})">
        <i class="fa-solid fa-pen"></i>
    </button>
    <button class="btn btn-sm btn-danger" onclick="deleteItem('${type}', ${index})">
        <i class="fa-solid fa-trash"></i>
    </button>
  `;
}

/* ===========================
   Editar Item
=========================== */
function editItem(type, index) {
  if (type === 'tipos') {
    let d = tiposData[index];
    $('#modalTipoTitle').text('Editar Tipo de Caso');
    $('#tipoNome').val(d.nome);
    $('#tipoDesc').val(d.descricao);
    $('#tipoStatus').val(d.status);
    $('#tipoIndex').val(index);
    $('#modalTipo').modal('show');
  }

  if (type === 'entidades') {
    let d = entidadesData[index];
    $('#modalEntidadeTitle').text('Editar Entidade');
    $('#entidadeNome').val(d.nome);
    $('#entidadeTipo').val(d.tipo);
    $('#entidadeContacto').val(d.contacto);
    $('#entidadeLocal').val(d.local);
    $('#entidadeObs').val(d.obs);
    $('#entidadeIndex').val(index);
    $('#modalEntidade').modal('show');
  }

  if (type === 'faixas') {
    let d = faixasData[index];
    $('#modalFaixaTitle').text('Editar Faixa Etária');
    $('#faixaNome').val(d.faixa);
    $('#faixaDesc').val(d.descricao);
    $('#faixaStatus').val(d.status);
    $('#faixaIndex').val(index);
    $('#modalFaixa').modal('show');
  }

  if (type === 'prioridade') {
    let d = prioData[index];
    $('#modalPrioridadeTitle').text('Editar Prioridade');
    $('#prioNome').val(d.nome);
    $('#prioDesc').val(d.descricao);
    $('#prioCor').val(d.cor);
    $('#prioIndex').val(index);
    $('#modalPrioridade').modal('show');
  }
}

/* ===========================
   Remover Item
=========================== */
function deleteItem(type, index) {
  Swal.fire({
    icon: "warning",
    title: "Pretende eliminar?",
    text: "Esta ação é irreversível!",
    showCancelButton: true,
    confirmButtonText: "Sim, eliminar",
    cancelButtonText: "Cancelar"
  }).then(result => {
    if (result.isConfirmed) {

      if (type === 'tipos') tiposData.splice(index,1);
      if (type === 'entidades') entidadesData.splice(index,1);
      if (type === 'faixas') faixasData.splice(index,1);
      if (type === 'prioridade') prioData.splice(index,1);

      updateTables();
      Swal.fire("Eliminado!", "O registo foi removido.", "success");
    }
  });
}

/* ===========================
   Atualizar DataTables
=========================== */
function updateTables() {
  tiposTable.clear().rows.add(tiposData).draw();
  entidadesTable.clear().rows.add(entidadesData).draw();
  faixasTable.clear().rows.add(faixasData).draw();
  prioTable.clear().rows.add(prioData).draw();
}


</script>

@endpush


@endpush




@endsection

