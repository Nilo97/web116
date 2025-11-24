@extends('layouts.app')

@section('title', 'Gestão de Utilizadores')

@section('content')
   <div class="container">
        <h1>❓ Perguntas Frequentes – Administrador do Sistema</h1>

        <!-- FAQ 1 -->
        <div class="faq-card">
            <div class="question">
                Como efetuar o backup do sistema?
                <span class="arrow">▶</span>
            </div>
            <div class="answer">
                Para realizar o backup:<br>
                - Vá ao menu **Administração → Sistema → Backup**.<br>
                - Escolha o tipo de backup (Base de Dados, Ficheiros ou Completo).<br>
                - Clique em **Gerar Backup**.<br>
                - Faça download para guardar em local seguro.
            </div>
        </div>

        <!-- FAQ 2 -->
        <div class="faq-card">
            <div class="question">
                Como alterar o estado de um caso?
                <span class="arrow">▶</span>
            </div>
            <div class="answer">
                - Acesse **Casos → Ver Detalhes**.<br>
                - Clique em **Editar Estado**.<br>
                - Escolha o novo estado (Aberto, Em Atendimento, Resolvido, Fechado).<br>
                - Clique em **Atualizar** para salvar.
            </div>
        </div>

        <!-- FAQ 3 -->
        <div class="faq-card">
            <div class="question">
                Como criar um novo utilizador no sistema?
                <span class="arrow">▶</span>
            </div>
            <div class="answer">
                - Vá a **Administração → Utilizadores**.<br>
                - Clique em **Adicionar Utilizador**.<br>
                - Preencha os dados (Nome, Email, Perfil, Senha).<br>
                - Clique em **Salvar**.
            </div>
        </div>

        <!-- FAQ 4 -->
        <div class="faq-card">
            <div class="question">
                Como ver relatórios do sistema?
                <span class="arrow">▶</span>
            </div>
            <div class="answer">
                Aceda ao menu **Relatórios** onde poderá:<br>
                - Filtrar por data, província, operador ou tipo de caso.<br>
                - Exportar para PDF ou Excel.<br>
                - Ver gráficos analíticos atualizados.
            </div>
        </div>

        <!-- FAQ 5 -->
        <div class="faq-card">
            <div class="question">
                Como restaurar um backup?
                <span class="arrow">▶</span>
            </div>
            <div class="answer">
                - Vá a **Administração → Sistema → Restaurar**.<br>
                - Carregue o ficheiro de backup (.zip ou .sql).<br>
                - Confirme a operação (atenção: isto substitui dados atuais).<br>
                - Aguarde a finalização do processo.
            </div>
        </div>

    </div>

      
  

@push('styles')
  <style>
        body {
            font-family: "Poppins", sans-serif;
            background: #f5f7fb;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
        }

        h1 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 20px;
            color: #111;
        }

        .faq-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            padding: 20px;
            margin-bottom: 15px;
            cursor: pointer;
            transition: .3s;
            border-left: 4px solid transparent;
        }

        .faq-card:hover {
            transform: translateY(-3px);
            border-left: 4px solid #4B7BFF;
        }

        .question {
            font-size: 18px;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .answer {
            display: none;
            margin-top: 10px;
            font-size: 15px;
            line-height: 1.6;
            padding-left: 5px;
            animation: fadeIn .3s ease;
        }

        .arrow {
            transition: .3s ease;
        }

        .faq-card.active .arrow {
            transform: rotate(90deg);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-5px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
@endpush


@push('scripts')
<script>
        // Controlo do accordion
        document.querySelectorAll('.faq-card').forEach(card => {
            card.addEventListener('click', () => {
                card.classList.toggle('active');
                
                const answer = card.querySelector('.answer');
                answer.style.display = answer.style.display === "block" ? "none" : "block";
            });
        });
    </script>
@endpush
@endsection

