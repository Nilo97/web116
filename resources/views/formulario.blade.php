<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registo de Caso - Linha 116</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

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
</head>
<body>

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
      <div class="col-md-3">
        <label class="form-label">Idade</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
          <input type="number" class="form-control" placeholder="Ex: 35">
        </div>
      </div>
      <div class="col-md-3">
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
          <input type="text" class="form-control" placeholder="Bairro, Rua, nº">
        </div>
      </div>
    </div>
  </div>

  <!-- Detalhes do Caso -->
  <div class="form-section">
    <h5><i class="fa-solid fa-file-circle-exclamation me-2"></i>Detalhes do Caso</h5>
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label">Tipo de Violência</label>
        <select class="form-select js-example-basic-single">
          <option>Física</option>
          <option>Psicológica</option>
          <option>Sexual</option>
          <option>Negligência</option>
          <option>Tráfico</option>
        </select>
      </div>
      <div class="col-md-6">
        <label class="form-label">Local do Incidente</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa-solid fa-map-location-dot"></i></span>
          <input type="text" class="form-control" placeholder="Ex: Escola, Casa, Rua">
        </div>
      </div>
      <div class="col-12">
        <label class="form-label">Descrição Detalhada</label>
        <textarea class="form-control" rows="4" placeholder="Descreva o que aconteceu..."></textarea>
      </div>
      <div class="col-md-6">
        <label class="form-label">Data do Incidente</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa-solid fa-calendar-day"></i></span>
          <input type="date" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <label class="form-label">Hora do Incidente</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
          <input type="time" class="form-control">
        </div>
      </div>
    </div>
  </div>

  <!-- Intervenientes -->
  <div class="form-section">
    <h5><i class="fa-solid fa-people-group me-2"></i>Outros Intervenientes</h5>
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label">Nome</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
          <input type="text" class="form-control" placeholder="Nome do interveniente">
        </div>
      </div>
      <div class="col-md-6">
        <label class="form-label">Papel</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa-solid fa-id-badge"></i></span>
          <select class="form-select">
            <option>Testemunha</option>
            <option>Denunciante</option>
            <option>Outro</option>
          </select>
        </div>
      </div>
      <div class="col-12">
        <label class="form-label">Observações</label>
        <textarea class="form-control" rows="3"></textarea>
      </div>
    </div>
  </div>

  <!-- Botão de Submissão -->
  <div class="text-center">
    <button class="btn btn-primary btn-lg mt-3"><i class="fa-solid fa-paper-plane me-2"></i>Submeter Caso</button>
  </div>
</div>

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
</body>
</html>
