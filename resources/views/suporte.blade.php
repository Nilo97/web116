@extends('layouts.app')

@section('title', 'Gestão de Utilizadores')

@section('content')
     <div class="container">

        <div class="title">
            <h1>📞 Contacto de Suporte Técnico</h1>
            <p>Entre em contacto com a equipa técnica da Kamba para suporte imediato</p>
        </div>

        <!-- TELEFONE -->
        <div class="support-card">
            <div class="icon">📱</div>
            <div class="content">
                <h3>Telefone / Chamadas</h3>
                <p>847 771 864 — Equipa Técnica Kamba</p>
                <a href="tel:+258847771864" class="call-btn">Ligar Agora</a>
            </div>
        </div>

        <!-- WHATSAPP -->
        <div class="support-card">
            <div class="icon">💬</div>
            <div class="content">
                <h3>Suporte via WhatsApp</h3>
                <p>Resposta rápida e suporte remoto</p>
                <a href="https://wa.me/258847771864" class="whatsapp-btn">Enviar Mensagem</a>
            </div>
        </div>

        <!-- EMAIL -->
        <div class="support-card">
            <div class="icon">📧</div>
            <div class="content">
                <h3>Email de Suporte</h3>
                <p>info@kamba.co.mz</p>
                <a href="mailto:info@kamba.co.mz" class="email-btn">Enviar Email</a>
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
            width: 95%;
            max-width: 900px;
            margin: 45px auto;
        }

        .title {
            text-align: center;
            margin-bottom: 30px;
        }

        .title h1 {
            font-size: 32px;
            color: #111;
            margin: 0;
        }

        .title p {
            font-size: 15px;
            margin-top: 5px;
            color: #666;
        }

        .support-card {
            background: #fff;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.09);
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            transition: 0.3s ease;
            cursor: default;
        }

        .support-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 35px rgba(0,0,0,0.12);
        }

        .icon {
            font-size: 38px;
            margin-right: 25px;
            background: #4B7BFF;
            color: white;
            width: 70px;
            height: 70px;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content h3 {
            margin: 0;
            font-size: 20px;
            font-weight: 600;
            color: #222;
        }

        .content p {
            margin: 8px 0 0;
            color: #666;
            font-size: 15px;
        }

        a.call-btn, a.whatsapp-btn, a.email-btn {
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
            padding: 10px 18px;
            border-radius: 10px;
            margin-top: 10px;
            display: inline-block;
            transition: .3s ease;
        }

        .call-btn {
            background: #4B7BFF;
            color: white;
        }

        .call-btn:hover {
            background: #355ee8;
        }

        .whatsapp-btn {
            background: #25D366;
            color: white;
        }

        .whatsapp-btn:hover {
            background: #1ea955;
        }

        .email-btn {
            background: #ffbb33;
            color: #111;
        }

        .email-btn:hover {
            background: #dfa226;
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

