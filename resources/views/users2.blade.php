@extends('layouts.app')

@section('title', 'Gestão de Utilizadores')

@section('content')

      
  <div class="container-fluid">
  
<div class="container py-5">
  <h2 class="text-center mb-4"><i class="fa-solid fa-users me-2"></i>Gestão de Utilizadores</h2>
   <div class="d-flex justify-content-end mb-3">
    <button class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#createUserModal">
      <i class="fa-solid fa-user-plus me-2"></i>Criar Novo Utilizador
    </button>
  </div>

  <div class="table-responsive shadow-sm rounded">
    <table id="usersTable" class="table table-striped table-hover align-middle">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>Nome Completo</th>
          <th>Email</th>
          <th>Password</th>
          <th>Tipo de Utilizador</th>
          <th>Status</th>
          <th>Data de Criação</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>João da Silva</td>
          <td>joao@email.com</td>
          <td>••••••••</td>
          <td>Administrador</td>
          <td><span class="badge bg-success">Ativo</span></td>
          <td>12/11/2025</td>
          <td>
            <button class="btn btn-sm btn-info me-1" title="Visualizar">
              <i class="fa-solid fa-eye"></i>
            </button>
            <button class="btn btn-sm btn-warning me-1" title="Editar">
              <i class="fa-solid fa-pen-to-square"></i>
            </button>
            <button class="btn btn-sm btn-danger" title="Eliminar">
              <i class="fa-solid fa-trash"></i>
            </button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Maria Fernandes</td>
          <td>maria@email.com</td>
          <td>••••••••</td>
          <td>Operador</td>
          <td><span class="badge bg-secondary">Inativo</span></td>
          <td>15/11/2025</td>
          <td>
            <button class="btn btn-sm btn-info me-1"><i class="fa-solid fa-eye"></i></button>
            <button class="btn btn-sm btn-warning me-1"><i class="fa-solid fa-pen-to-square"></i></button>
            <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</div>
</div>

<!-- Modal Criar Novo Utilizador -->
<div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content shadow-lg">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="createUserModalLabel"><i class="fa-solid fa-user-plus me-2"></i>Criar Novo Utilizador</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form id="createUserForm" novalidate>
          <div class="row g-3">
            <!-- Nome Completo -->
            <div class="col-md-6">
              <label class="form-label"><i class="fa-solid fa-user me-2"></i>Nome Completo</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Nome completo do utilizador" required>
              </div>
              <div class="invalid-feedback">Por favor, insira o nome completo.</div>
            </div>

            <!-- Email -->
            <div class="col-md-6">
              <label class="form-label"><i class="fa-solid fa-envelope me-2"></i>Email</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Email do utilizador" required>
              </div>
              <div class="invalid-feedback">Insira um email válido.</div>
            </div>

            <!-- Telefone -->
            <div class="col-md-6">
              <label class="form-label"><i class="fa-solid fa-phone me-2"></i>Telefone / WhatsApp</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                <input type="tel" class="form-control" placeholder="+258 xxx xxx xxx" required pattern="^\+258\d{8,9}$">
              </div>
              <div class="invalid-feedback">Número de telefone inválido. Ex: +258 84 123 4567</div>
            </div>

            <!-- Sexo -->
            <div class="col-md-6">
              <label class="form-label"><i class="fa-solid fa-venus-mars me-2"></i>Sexo</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-venus-mars"></i></span>
                <select class="form-select" required>
                  <option value="">Selecionar sexo</option>
                  <option value="masculino">Masculino</option>
                  <option value="feminino">Feminino</option>
                  <option value="outro">Outro</option>
                </select>
              </div>
              <div class="invalid-feedback">Selecione o sexo.</div>
            </div>

            <!-- Password -->
            <div class="col-md-6">
              <label class="form-label"><i class="fa-solid fa-key me-2"></i>Password</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                <input type="password" class="form-control" placeholder="Senha segura" required minlength="6">
              </div>
              <div class="invalid-feedback">A senha deve ter pelo menos 6 caracteres.</div>
            </div>

            <!-- Tipo de Utilizador -->
            <div class="col-md-6">
              <label class="form-label"><i class="fa-solid fa-user-shield me-2"></i>Tipo de Utilizador</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-user-shield"></i></span>
                <select class="form-select" required>
                  <option value="">Selecionar tipo</option>
                  <option value="admin">Administrador</option>
                  <option value="operador">Operador</option>
                  <option value="parceiro">Parceiro</option>
                </select>
              </div>
              <div class="invalid-feedback">Selecione o tipo de utilizador.</div>
            </div>

            <!-- Status -->
            <div class="col-md-6">
              <label class="form-label"><i class="fa-solid fa-toggle-on me-2"></i>Status</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-toggle-on"></i></span>
                <select class="form-select" required>
                  <option value="ativo">Ativo</option>
                  <option value="inativo">Inativo</option>
                </select>
              </div>
            </div>

            <!-- Endereço -->
            <div class="col-md-12">
              <label class="form-label"><i class="fa-solid fa-location-dot me-2"></i>Endereço</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                <input type="text" class="form-control" placeholder="Rua, Bairro, Cidade">
              </div>
            </div>

            <!-- Observações -->
            <div class="col-md-12">
              <label class="form-label"><i class="fa-solid fa-file-lines me-2"></i>Observações</label>
              <textarea class="form-control" rows="3" placeholder="Notas adicionais sobre o utilizador"></textarea>
            </div>
          </div>

          <div class="text-end mt-4">
            <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk me-2"></i>Criar Utilizador</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Estilo Personalizado -->
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


<script>
// Validação em tempo real do formulário
const form = document.getElementById('createUserForm');

form.addEventListener('input', function(e) {
  const target = e.target;
  if(target.checkValidity()) {
    target.classList.remove('is-invalid');
    target.classList.add('is-valid');
  } else {
    target.classList.remove('is-valid');
    target.classList.add('is-invalid');
  }
});

// Validação no submit
form.addEventListener('submit', function(e) {
  e.preventDefault();
  if(form.checkValidity()) {
    alert('✅ Utilizador criado com sucesso!');
    // Aqui você pode adicionar o utilizador na tabela
    form.reset();
    form.querySelectorAll('.is-valid').forEach(el => el.classList.remove('is-valid'));
    form.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
    bootstrap.Modal.getInstance(document.getElementById('createUserModal')).hide();
  } else {
    e.stopPropagation();
    form.querySelectorAll('input, select, textarea').forEach(el => {
      if(!el.checkValidity()) el.classList.add('is-invalid');
    });
  }
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


@endsection

