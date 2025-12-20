@extends('layouts.app')

@section('title', 'Gestão de Utilizadores')

@section('content')
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
          <th>Funções</th>
          <th>Status</th>
          <th>Data de Criação</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <!-- O conteúdo será preenchido dinamicamente -->
      </tbody>
    </table>
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
              <label class="form-label">Nome Completo</label>
              <input type="text" id="name" class="form-control" placeholder="Nome completo do utilizador" required>
            </div>

            <!-- Email -->
            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" id="email" class="form-control" placeholder="Email do utilizador" required>
            </div>

            <!-- Username -->
            <div class="col-md-6">
                <label class="form-label">Username</label>
                <input type="text" id="username" class="form-control" placeholder="Nome de usuário" required>
            </div>

            <!-- Telefone -->
            <div class="col-md-6">
              <label class="form-label">Telefone / WhatsApp</label>
              <input type="tel" id="phone_number" class="form-control" placeholder="+258 xxx xxx xxx" required>
            </div>

            <!-- Password -->
            <div class="col-md-6">
              <label class="form-label">Password</label>
              <input type="password" id="password" class="form-control" placeholder="Senha segura" required minlength="6">
            </div>

            <!-- Funções (Roles) -->
            <div class="col-md-6">
              <label class="form-label">Funções</label>
              <select id="rolesSelect" class="form-select" style="width: 100% !important;" multiple required>
                <!-- Opções de funções serão carregadas aqui -->
              </select>
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

const authToken = localStorage.getItem('auth_token');
if (!authToken) {
        console.error('Token de autenticação não encontrado.');
        tableBody.innerHTML = '<tr><td colspan="7" class="text-center">Erro: Token de autenticação não encontrado. Faça o login novamente.</td></tr>';
        return;
    }
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

@push('scripts')
<script>
function loadUsers() {
  const tableBody = document.querySelector('#usersTable tbody');
    const rolesApiUrl = `{{ env('API_ROLES_URL', 'http://127.0.0.1:9800/api/roles') }}`;
    const authToken = localStorage.getItem('auth_token');
    const apiUrl = `{{ env('API_USERS_URL', 'http://127.0.0.1:9800/api/users?page=1&per_page=10') }}`;

    if (!authToken) {
        console.error('Token de autenticação não encontrado.');
        tableBody.innerHTML = '<tr><td colspan="7" class="text-center">Erro: Token de autenticação não encontrado. Faça o login novamente.</td></tr>';
        return;
    }
  const createUserModal = document.getElementById('createUserModal');
    const rolesSelect = document.getElementById('rolesSelect');
    console.log(rolesSelect);
    createUserModal.addEventListener('show.bs.modal', function () {
        fetch(rolesApiUrl, {
            headers: {
                'Authorization': `Bearer ${authToken}`,
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            rolesSelect.innerHTML = ''; // Limpa opções existentes
            data.data.roles.forEach(role => {
                const option = new Option(role.name, role.id);
                rolesSelect.add(option);
            });
            // Inicializar Select2
            $(rolesSelect).select2({
                dropdownParent: $('#createUserModal .modal-body'),
                placeholder: 'Selecione as funções',
                allowClear: true
            });
        })
        .catch(error => console.error('Erro ao carregar funções:', error));
    });

  


    tableBody.innerHTML = '<tr><td colspan="7" class="text-center">Carregando...</td></tr>';

    fetch(apiUrl, {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${authToken}`,
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        tableBody.innerHTML = '';
        const users = data.data.users;

        if (users && users.length > 0) {
            users.forEach(user => {
                const row = tableBody.insertRow();
                
                row.insertCell(0).textContent = user.id;
                row.insertCell(1).textContent = user.name;
                row.insertCell(2).textContent = user.email;

                const roles = user.roles.map(role => role.name).join(', ');
                row.insertCell(3).textContent = roles || 'N/A';

                // A API não fornece status, então usamos um placeholder
                const statusCell = row.insertCell(4);
                statusCell.innerHTML = `<span class="badge bg-success">Ativo</span>`; 

                row.insertCell(5).textContent = new Date(user.creation_date).toLocaleDateString();

                const actionsCell = row.insertCell(6);
                actionsCell.innerHTML = `
                    <button class="btn btn-primary btn-sm me-1" title="Editar"><i class="fa-solid fa-pencil"></i></button>
                    <button class="btn btn-danger btn-sm" title="Eliminar"><i class="fa-solid fa-trash"></i></button>
                `;
            });
        } else {
            tableBody.innerHTML = '<tr><td colspan="7" class="text-center">Nenhum utilizador encontrado.</td></tr>';
        }
    })
    .catch(error => {
        console.error('Erro ao buscar utilizadores:', error);
        tableBody.innerHTML = '<tr><td colspan="7" class="text-center">Falha ao carregar os utilizadores.</td></tr>';
    });
}
document.addEventListener('DOMContentLoaded', function () {
  loadUsers();
});

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

    // alert("test")
    const formData = new FormData(createUserForm);
        const selectedRoles = $(rolesSelect).val();
        // const authToken = localStorage.getItem('auth_token');
        const userData = {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            username: document.getElementById('email').value, // Gera username a partir do email
            password: document.getElementById('password').value,
            phone_number: document.getElementById('phone_number').value,
            roles: selectedRoles.map(id => parseInt(id, 10))
        };

        fetch('http://127.0.0.1:9800/api/users', {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${ localStorage.getItem('auth_token')}`,
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(userData)
        })
        .then(response => {
            if (response.status === 201) {
                return response.json();
            }
            throw new Error('Falha ao criar utilizador');
        })
        .then(data => {
            Swal.fire({
                icon: 'success',
                title: 'Sucesso!',
                text: data.message,
                timer: 2000,
                showConfirmButton: false
            });
            bootstrap.Modal.getInstance(createUserModal).hide();
            createUserForm.reset();
            $(rolesSelect).val(null).trigger('change');
            loadUsers(); // Recarrega a tabela de utilizadores
        })
        .catch(error => {
            console.error('Erro:', error);
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algo deu errado! Não foi possível criar o utilizador.'
            });
        });
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
@endpush

