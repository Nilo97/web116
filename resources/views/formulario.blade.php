@extends('layouts.app')

@section('title', 'Gestão de Utilizadores')

@section('content')
     <div class="container py-5">
  <h2 class="text-center mb-5"><i class="fa-solid fa-shield-halved me-2"></i>Registo de Caso de Violência Contra Criança</h2>

  <!-- Dados da Vítima -->
 <!-- Dados da Vítima -->
<div class="form-section">
  <div style="
    position: fixed;
    top: 20px;
    right: 20px;
    background-color: #0d6efd;
    color: white;
    padding: 10px 15px;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    z-index: 1000;
    font-weight: 500;
    font-size: 14px;
">
  Caso a ser acompanhado por <strong>Utilizador X</strong>
</div>
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
         
  

@push('styles')

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
    
@endpush


@push('scripts')

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
@endpush
@endsection

