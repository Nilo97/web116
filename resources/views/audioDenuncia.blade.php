@extends('layouts.app')

@section('title', 'Gestão de Utilizadores')

@section('content')


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

       
 








@push('styles')

@endpush


@push('scripts')

@endpush

@endsection

