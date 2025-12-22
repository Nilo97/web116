<!doctype html>
<html lang="pt">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Violência Baseada no Género</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    html, body { height: 100%; width: 100%; font-family: "Poppins", sans-serif; }
    body {
      background: linear-gradient(135deg, #05284a 0%, #0b6fbf 40%, #2aa4f4 100%);
      color: #fff; display: flex; align-items: center; justify-content: center; flex-direction: column; text-align: center; position: relative; overflow: hidden;
    }

    .menu-bar { position: absolute; top: 1rem; left: 1rem; width: 35px; height: 28px; cursor: pointer; z-index: 3; }
    .menu-bar div { width: 100%; height: 5px; background: white; margin: 4px 0; border-radius: 3px; transition: all 0.3s ease; }
    .menu-options {
      position: absolute; top: 60px; left: 1rem; background: rgba(255,255,255,0.95); color: #05284a;
      border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.2); overflow: hidden; opacity: 0; transform: translateY(-15px);
      pointer-events: none; transition: all 0.3s ease;
    }
    .menu-options.show { opacity:1; transform: translateY(0); pointer-events:auto; }
    .menu-options button { background: none; border: none; width: 100%; text-align: left; padding: 10px 20px; font-size: 0.95rem; cursor: pointer; color: #05284a; transition: background 0.3s; }
    .menu-options button:hover { background: #0b6fbf; color: #fff; }

    .conteudo { z-index: 1; }
    .imagem { width:180px; height:180px; border-radius:50%; object-fit:cover; margin-bottom:1.5rem; box-shadow:0 0 25px rgba(255,255,255,0.2); border:3px solid rgba(255,255,255,0.5);}

    h1 { font-size:2rem; margin-bottom:1rem; text-shadow:2px 2px 8px rgba(0,0,0,0.4); }
    p { font-size:1.1rem; max-width:600px; line-height:1.6; text-shadow:1px 1px 6px rgba(0,0,0,0.5); margin-bottom:2rem; }

    .botoes { display:flex; justify-content:center; gap:1.5rem; margin-top:1rem; }
    .botao { width:80px; height:80px; border-radius:50%; background: rgba(255,255,255,0.15); border:2px solid rgba(255,255,255,0.3); display:flex; align-items:center; justify-content:center; transition: all 0.3s ease; box-shadow:0 0 15px rgba(0,0,0,0.3); cursor:pointer; backdrop-filter: blur(5px);}
    .botao:hover { transform:scale(1.1); background: rgba(255,255,255,0.25); border-color: rgba(255,255,255,0.6); }
    .botao img { width:36px; height:36px; filter: drop-shadow(0 0 5px rgba(0,0,0,0.5)); }

    /* Modal */
    .modal { position:fixed; top:0; left:0; width:100%; height:100%; background: rgba(5,40,74,0.85); display:none; justify-content:center; align-items:center; z-index:5; overflow:auto; }
    .modal.active { display:flex; }
    .formulario { background:#fff; color:#05284a; padding:2rem; border-radius:16px; box-shadow:0 0 25px rgba(0,0,0,0.3); width:90%; max-width:480px; max-height:90vh; overflow-y:auto; }
    .formulario h2 { text-align:center; margin-bottom:1.2rem; color:#0b6fbf; }
    .campo { display:flex; align-items:center; background:#f3f7fa; border-radius:8px; padding:0.6rem 1rem; margin-bottom:0.8rem; border:1px solid #d9e3ec; }
    .campo img { width:20px; margin-right:10px; opacity:0.7; }
    .campo input, .campo select, .campo textarea { width:100%; border:none; background:transparent; font-size:0.95rem; color:#05284a; outline:none; }
    textarea { min-height:80px; resize:vertical; }
    button.enviar { width:100%; background:#0b6fbf; color:#fff; padding:0.8rem; border:none; border-radius:10px; font-weight:600; font-size:1rem; cursor:pointer; transition:background 0.3s; margin-top:1rem; }
    button.enviar:hover { background:#084a83; }

    body::after {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      width: 60%;
      height: 100%;
      background: url('1.png') no-repeat center center;
      background-size: contain;
      opacity: 0.9;
      z-index: 0;
      pointer-events: none;
    }

    campo {
  border: 1px solid #d9e3ec;
  border-radius: 8px;
  margin-bottom: 0.8rem;
  padding: 0.5rem;
  display: flex;
  align-items: center;
  background:#f3f7fa;
  transition: border 0.3s;
}
.campo input, .campo select, .campo textarea {
  flex:1;
  border:none;
  background:transparent;
  outline:none;
  font-size:0.95rem;
}

    @media (max-width: 768px) {
      body::after { top:0; left:0; width:100%; height:100vh; background-size:cover; opacity:0.5; }
      .conteudo { z-index: 1; margin-top: 0; display:flex; flex-direction:column; align-items:center; justify-content:center; min-height:100vh; text-align:center; }
    }

    .logo { position:absolute; top:60px; left:60px; width:180px; height:auto; z-index:2; opacity:0.1; pointer-events:none; }

    /* Imagem animada */
    .imagem { padding:5px; background: conic-gradient(red, green, black, white, red); -webkit-mask: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 90%, rgba(0,0,0,0) 100%); mask: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 90%, rgba(0,0,0,0) 100%); animation: girarBorda 6s linear infinite, flutuar 6s ease-in-out infinite; transform-origin:center; box-shadow:0 0 25px rgba(255,255,255,0.3); }
    @keyframes flutuar { 0% { transform: translateY(0px);} 25% { transform: translateY(-10px);} 50% { transform: translateY(0px);} 75% { transform: translateY(10px);} 100% { transform: translateY(0px);} }
    @keyframes girarBorda { 0% { transform: rotate(0deg);} 100% { transform: rotate(360deg);} }
    .imagem img { border-radius:50%; width:100%; height:100%; object-fit:cover; }

    /* Áudio Waves */
    .audio-waves { display:flex; justify-content:center; align-items:flex-end; gap:5px; height:100px; margin:1.5rem 0; }
    .wave { width:8px; background:#0b6fbf; animation: waveAnim 1s infinite; animation-delay: calc(var(--i) * 0.1s); border-radius:4px; }
    @keyframes waveAnim { 0%,100%{height:20%;} 50%{height:100%;} }
    #audioModal .formulario { max-width:350px; text-align:center; }

  </style>
</head>
<body>
  <img src="logo.png" class="logo">
  <div class="menu-bar" onclick="toggleMenu()"><div></div><div></div><div></div></div>
  <div class="menu-options" id="menuOptions">
    <button onclick="verHistorico()">📜 Ver histórico de denúncia</button>
    <button onclick="verMaisInformacoes()">ℹ️ Ver mais informações</button>
    <button onclick="verApoio()">💙 Apoiar</button> 
  </div>

  <div class="conteudo">
     <img src="fala.png" class="imagem">
    <h1>Diga NÃO à Violência Baseada no Género</h1>
    <p>Promova o respeito, a igualdade e a dignidade.<br>Juntos, podemos construir um futuro livre de violência.</p>

    <div class="botoes">
      <div class="botao" onclick="abrirFormulario()">
        <img src="https://cdn-icons-png.flaticon.com/512/3031/3031126.png">
      </div>
      <div class="botao" onclick="abrirAudio()">
        <img src="https://cdn-icons-png.flaticon.com/512/727/727245.png">
      </div>
    </div>
  </div>

  <!-- Modal do formulário -->
  <div class="modal" id="formModal">
  <div class="formulario">
    <h2>Formulário de Denúncia</h2>

    <!-- Nome -->
    <div class="campo" id="campo-nome">
      <img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png">
      <input id="nome" type="text" placeholder="Nome da vítima">
    </div>

    <!-- Idade -->
    <div class="campo" id="campo-idade">
      <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
      <input id="idade" type="number" placeholder="Idade">
    </div>

    <!-- Descrição -->
    <div class="campo" id="campo-descricao">
      <img src="https://cdn-icons-png.flaticon.com/512/1828/1828930.png">
      <textarea id="descricao" placeholder="Conte o que aconteceu"></textarea>
    </div>

    <!-- Afeta a quem -->
    <div class="campo" id="campo-afeta">
      <img src="https://cdn-icons-png.flaticon.com/512/3602/3602123.png">
      <select id="afeta">
        <option disabled selected>A situação afeta a quem?</option>
        <option>Eu mesmo(a)</option>
        <option>Outra pessoa</option>
      </select>
    </div>

    <!-- Tipo de caso -->
    <div class="campo" id="campo-tipoCaso">
      <img src="https://cdn-icons-png.flaticon.com/512/597/597177.png">
      <select id="tipoCaso">
        <option disabled selected>Tipo de caso</option>
        <option>Violência sexual</option>
        <option>Agressão física</option>
        <option>Bullying</option>
        <option>Negligência</option>
        <option>Outros</option>
      </select>
      <small style="font-size:0.8rem; color:#555;">O gestor irá definir o tipo oficial de caso.</small>
    </div>

    <!-- Província -->
    <div class="campo" id="campo-provincia">
      <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png">
      <select id="provincia" onchange="carregarDistritos()">
        <option disabled selected>Selecione a província</option>
        <option>Maputo</option><option>Gaza</option><option>Inhambane</option><option>Sofala</option>
        <option>Manica</option><option>Tete</option><option>Zambézia</option><option>Nampula</option>
        <option>Cabo Delgado</option><option>Niassa</option>
      </select>
    </div>

    <!-- Distrito -->
    <div class="campo" id="campo-distrito">
      <img src="https://cdn-icons-png.flaticon.com/512/484/484167.png">
      <select id="distrito">
        <option disabled selected>Selecione o distrito</option>
      </select>
    </div>

    <!-- Zona/Bairro -->
    <div class="campo" id="campo-zona">
      <img src="https://cdn-icons-png.flaticon.com/512/535/535188.png">
      <input id="zona" type="text" placeholder="Zona/Bairro">
    </div>

    <!-- Via de contato -->
    <div class="campo" id="campo-via">
      <img src="https://cdn-icons-png.flaticon.com/512/159/159832.png">
      <select id="viaContato" onchange="ajustarNumero()">
        <option disabled selected>Como deseja ser contactado?</option>
        <option>116</option>
        <option>SMS</option>
        <option>WhatsApp</option>
      </select>
    </div>

    <!-- Número dinâmico -->
    <div class="campo" id="campo-numero" style="display:none;">
      <img src="https://cdn-icons-png.flaticon.com/512/597/597177.png">
      <input id="numero" type="tel" placeholder="Digite seu número">
    </div>

    <button class="enviar" onclick="validarFormulario()">📩 Enviar Denúncia</button>
  </div>
</div>

  <!-- Modal de áudio -->
  <div class="modal" id="audioModal">
    <div class="formulario">
      <h2>🎙️ Gravando áudio...</h2>
      <p>Mantenha o botão pressionado ou fale normalmente.</p>
      <div class="audio-waves">
        <div class="wave" style="--i:0;"></div>
        <div class="wave" style="--i:1;"></div>
        <div class="wave" style="--i:2;"></div>
        <div class="wave" style="--i:3;"></div>
        <div class="wave" style="--i:4;"></div>
      </div>
      <button class="enviar" onclick="pararAudio()">Parar Gravação</button>
    </div>
  </div>



  <script>
// Dados dos distritos
const distritos = {
  "Maputo": ["KaMpfumo","Nlhamankulu","KaMaxaquene","KaMavota","KaTembe","Boane","Matola"],
  "Gaza": ["Xai-Xai","Bilene","Chókwè","Manjacaze","Chibuto"],
  "Inhambane": ["Inhambane","Maxixe","Massinga","Vilankulo","Funhalouro"],
  "Sofala": ["Beira","Dondo","Búzi","Nhamatanda"],
  "Manica": ["Chimoio","Gondola","Manica","Sussundenga"],
  "Tete": ["Tete","Moatize","Angónia","Tsangano"],
  "Zambézia": ["Quelimane","Gurué","Milange","Mocuba"],
  "Nampula": ["Nampula","Angoche","Moma","Monapo"],
  "Cabo Delgado": ["Pemba","Montepuez","Mocímboa da Praia","Chiúre"],
  "Niassa": ["Lichinga","Mandimba","Cuamba","Marrupa"]
};

// Carrega distritos
function carregarDistritos() {
  const prov = document.getElementById("provincia").value;
  const distritoSelect = document.getElementById("distrito");
  distritoSelect.innerHTML = '<option disabled selected>Selecione o distrito</option>';
  distritos[prov]?.forEach(d => {
    const opt = document.createElement("option");
    opt.textContent = d;
    distritoSelect.appendChild(opt);
  });
}

// Mostra ou esconde campo de número
function ajustarNumero() {
  const via = document.getElementById("viaContato").value;
  document.getElementById("campo-numero").style.display = (via === "SMS" || via === "WhatsApp") ? "block" : "none";
}

// Função de validação com feedback visual
function validarFormulario() {
  const campos = ["nome","idade","descricao","afeta","tipoCaso","provincia","distrito","zona","viaContato"];
  let todosOk = true;

  campos.forEach(id => {
    const el = document.getElementById(id);
    const container = document.getElementById("campo-" + id);
    if(!el.value || el.value.includes("Selecione")) {
      container.style.border = "2px solid red";
      todosOk = false;
    } else {
      container.style.border = "2px solid green";
    }
  });

  // Verificar número se aplicável
  const via = document.getElementById("viaContato").value;
  if((via === "SMS" || via === "WhatsApp")){
    const num = document.getElementById("numero");
    const containerNum = document.getElementById("campo-numero");
    if(!num.value){
      containerNum.style.border = "2px solid red";
      todosOk = false;
    } else {
      containerNum.style.border = "2px solid green";
    }
  }

  if(!todosOk){
    Swal.fire('⚠️ Atenção','Preencha todos os campos obrigatórios.','warning');
    return;
  }

  const codigo = "LFC-"+new Date().getFullYear()+"-"+Math.floor(1000+Math.random()*9000);
  Swal.fire('✅ Denúncia registada!', 'O seu código de denúncia é: <b>'+codigo+'</b><br>Guarde-o para consultar o histórico.','success');

  // Não bloqueia a página, apenas fecha o modal
  document.getElementById("formModal").classList.remove("active");
}
</script>
  <script>
    const distritos2 = {
      "Maputo": ["KaMpfumo","Nlhamankulu","KaMaxaquene","KaMavota","KaTembe","Boane","Matola"],
      "Gaza": ["Xai-Xai","Bilene","Chókwè","Manjacaze","Chibuto"],
      "Inhambane": ["Inhambane","Maxixe","Massinga","Vilankulo","Funhalouro"],
      "Sofala": ["Beira","Dondo","Búzi","Nhamatanda"],
      "Manica": ["Chimoio","Gondola","Manica","Sussundenga"],
      "Tete": ["Tete","Moatize","Angónia","Tsangano"],
      "Zambézia": ["Quelimane","Gurué","Milange","Mocuba"],
      "Nampula": ["Nampula","Angoche","Moma","Monapo"],
      "Cabo Delgado": ["Pemba","Montepuez","Mocímboa da Praia","Chiúre"],
      "Niassa": ["Lichinga","Mandimba","Cuamba","Marrupa"]
    };


    function verMaisInformacoes() {
  Swal.fire({
    title: '📘 Como usar o aplicativo',
    html: `
      <div style="text-align:left; font-size:0.95rem; line-height:1.5;">
        <p>Bem-vindo ao <b>App de Denúncia de Violência Baseada no Género</b>! Este aplicativo foi criado para garantir <b>segurança</b>, <b>privacidade</b> e <b>facilidade de uso</b>.</p>
        
        <p>💡 <b>Passo 1:</b> Clique no ícone de <b>formulário</b> para registrar uma denúncia de forma segura e rápida.</p>
        <p>🎙️ <b>Passo 2:</b> Clique no ícone de <b>microfone</b> para gravar seu relato em áudio. As ondas animadas indicam que a gravação está ativa.</p>
        <p>🔎 <b>Passo 3:</b> Para consultar o histórico, use o botão <b>"Ver histórico de denúncia"</b> e insira o código fornecido ao registrar a denúncia.</p>
        <p>🏠 <b>Passo 4:</b> Preencha corretamente os campos de localização, tipo de caso e forma de contato. Isso ajuda no atendimento rápido e seguro.</p>
        <p>💙 <b>Dica:</b> Todas as informações são confidenciais e protegidas. Use o aplicativo com responsabilidade e compartilhe com pessoas que precisam de ajuda.</p>
      </div>
    `,
    width: '600px',
    icon: 'info',
    showCloseButton: true,
    confirmButtonText: 'Fechar',
    customClass: {
      popup: 'swal2-border-radius',
      title: 'swal2-title',
      content: 'swal2-html-container'
    }
  });
}


    function carregarDistritos() {
      const prov = document.getElementById("provincia").value;
      const distritoSelect = document.getElementById("distrito");
      distritoSelect.innerHTML = '<option disabled selected>Selecione o distrito</option>';
      distritos[prov]?.forEach(d => {
        const opt = document.createElement("option");
        opt.textContent = d;
        distritoSelect.appendChild(opt);
      });
    }

    function abrirFormulario() { document.getElementById("formModal").classList.add("active"); }
    function abrirAudio() { document.getElementById("audioModal").classList.add("active"); }
    function pararAudio() { document.getElementById("audioModal").classList.remove("active"); Swal.fire('✅ Gravação concluída', 'O áudio foi gravado com sucesso.', 'success'); }
    function toggleMenu() { document.getElementById("menuOptions").classList.toggle("show"); }

    function ajustarCampos() {
      const forma = document.getElementById("formaContacto").value;
      document.getElementById("celular").style.display = forma==="Telefone"?"block":"none";
      document.getElementById("endereco").style.display = forma==="Visita"?"block":"none";
    }

    function validarFormulario() {
      const campos = ["nome","idade","tipoCaso","provincia","distrito","afeta","formaContacto","descricao"];
      for (let id of campos) {
        const el = document.getElementById(id);
        if (!el || !el.value || el.value.includes("Selecione")) {
          Swal.fire('⚠️ Atenção', 'Por favor preencha todos os campos corretamente.', 'warning');
          return;
        }
      }
      const codigo = "LFC-"+new Date().getFullYear()+"-"+Math.floor(1000+Math.random()*9000);
      Swal.fire('✅ Denúncia registada!', 'O seu código de denúncia é: <b>'+codigo+'</b><br>Guarde-o para consultar o histórico.', 'success');
      document.getElementById("formModal").classList.remove("active");
    }

function verApoio() {
  Swal.fire({
    title: '💙 Como você pode apoiar',
    html: `
      <div style="text-align:left; font-size:0.95rem; line-height:1.6;">
        <p>O seu apoio é fundamental para que possamos continuar <b>combatendo a violência baseada no género</b> e ajudando vítimas de forma segura e confidencial.</p>

        <p>🌟 <b>1. Doações Financeiras:</b>  
        Você pode contribuir mensalmente ou esporadicamente. Cada contribuição ajuda a manter o funcionamento do aplicativo, atendimento telefônico 116, campanhas de conscientização e suporte às vítimas.</p>

        <p>🤝 <b>2. Voluntariado:</b>  
        Se você tem tempo e vontade de ajudar, podemos conectá-lo a ações de suporte, programas educativos e atendimento psicológico supervisionado.</p>

        <p>📣 <b>3. Divulgação e Sensibilização:</b>  
        Compartilhe o aplicativo, informações e conteúdos educativos em redes sociais, escolas, comunidades e grupos de WhatsApp. Quanto mais pessoas souberem, mais vidas podemos proteger.</p>

        <p>💌 <b>4. Apoio Técnico e Profissional:</b>  
        Especialistas em TI, psicologia, direito e comunicação podem colaborar com consultorias, treinamentos e desenvolvimento de novas funcionalidades.</p>

        <p>🔗 <b>Como contribuir:</b>  
        - Para doações: acesse nosso site oficial ou use os canais de pagamento seguros indicados.  
        - Para voluntariado: envie uma mensagem com seu interesse, habilidades e disponibilidade.  
        - Para divulgação: use o material disponível no aplicativo e redes sociais oficiais.  
        - Para apoio técnico: entre em contato pelo email <b>suporte@lfc.org</b> ou telefone <b>116</b>.</p>

        <p>💙 Cada ação, pequena ou grande, faz diferença. Juntos, podemos criar um futuro <b>livre de violência</b> e garantir proteção, respeito e dignidade para todos.</p>
      </div>
    `,
    width: '600px',
    icon: 'heart',
    showCloseButton: true,
    confirmButtonText: 'Fechar',
    customClass: {
      popup: 'swal2-border-radius',
      title: 'swal2-title',
      content: 'swal2-html-container'
    }
  });
}



function verHistorico() {
  Swal.fire({
    title: '🔍 Consultar histórico de denúncia',
    html: `
      <div style="display:flex; flex-direction:column; gap:15px; text-align:left;">
        
        <div style="display:flex; align-items:center; gap:10px; background:#f3f7fa; padding:10px 15px; border-radius:10px; border:1px solid #d9e3ec;">
          <img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" style="width:24px; height:24px; opacity:0.7;">
          <input id="histNome" placeholder="Nome completo da vítima" style="border:none; background:transparent; width:100%; font-size:0.95rem; outline:none;">
        </div>

        <div style="display:flex; align-items:center; gap:10px; background:#f3f7fa; padding:10px 15px; border-radius:10px; border:1px solid #d9e3ec;">
          <img src="https://cdn-icons-png.flaticon.com/512/535/535239.png" style="width:24px; height:24px; opacity:0.7;">
          <input id="histCodigo" placeholder="Código da denúncia" style="border:none; background:transparent; width:100%; font-size:0.95rem; outline:none;">
        </div>

        <p style="font-size:0.85rem; color:#555; margin-top:5px;">🔹 Insira o nome e o código fornecido ao registar a denúncia para consultar o histórico.</p>
      </div>
    `,
    width: '500px',
    confirmButtonText: 'Ver histórico',
    showCancelButton: true,
    cancelButtonText: 'Cancelar',
    confirmButtonColor: '#0b6fbf',
    preConfirm: () => {
      const nome = document.getElementById("histNome").value;
      const codigo = document.getElementById("histCodigo").value;
      if (!nome || !codigo) {
        Swal.showValidationMessage('⚠️ Preencha ambos os campos corretamente');
      }
      return { nome, codigo };
    }
  }).then((result) => {
    if (result.isConfirmed) {
      const { nome, codigo } = result.value;

      // Mostrar tela de "processamento"
      Swal.fire({
        title: '⏳ Verificando seus dados...',
        html: '<p>Por favor, aguarde enquanto verificamos a sua denúncia.</p>',
        didOpen: () => {
          Swal.showLoading(); // Mostra o ícone de carregamento
        },
        allowOutsideClick: false,
        allowEscapeKey: false,
        showConfirmButton: false,
      });

      // Simular verificação de 3 segundos
      setTimeout(() => {
        Swal.fire({
          title: '📋 Histórico da denúncia',
          html: `
            <div style="text-align:left; font-size:0.95rem; line-height:1.5;">
              <p><b>Nome:</b> ${nome}</p>
              <p><b>Código:</b> ${codigo}</p>
              <p>🔹 Status da denúncia: <b>Em andamento</b> ✅</p>
              <p>🔹 O seu caso foi registado e submetido às autoridades competentes para análise.</p>
              <p>💡 Dica: Guarde o código da denúncia para futuras consultas ou atualizações do caso.</p>
            </div>
          `,
          icon: 'info',
          confirmButtonColor: '#0b6fbf',
          confirmButtonText: 'Fechar'
        });
      }, 3000); // 3 segundos de simulação
    }
  });
}

  </script>
</body>
</html>
