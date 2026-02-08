<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>APP 116</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-7"><img class="bg-img-cover bg-center" src="../assets/images/login/2.jpg" alt="looginpage"></div>
          <div class="col-xl-5 p-0">
            <div class="login-card">
     <form id="loginForm" class="theme-form login-form">
        <h4>Entrar</h4>
        <h6>Bem-vindo de volta! Acesse a sua conta.</h6>
        
        <div id="loginMessage" class="alert alert-danger" style="display: none;"></div>

        <div class="form-group">
          <label>Email</label>
          <div class="input-group">
            <span class="input-group-text"><i class="icon-email"></i></span>
            <input class="form-control" type="email" id="username" required placeholder="exemplo@gmail.com">
          </div>
        </div>

        <div class="form-group">
          <label>Palavra-passe</label>
          <div class="input-group">
            <span class="input-group-text"><i class="icon-lock"></i></span>
            <input class="form-control" type="password" id="password" required placeholder="*********">
            <div class="show-hide"><span class="show"></span></div>
          </div>
        </div>

        <div class="form-group">
          <div class="checkbox">
            <input id="checkbox1" type="checkbox">
            <label class="text-muted" for="checkbox1">Lembrar palavra-passe</label>
          </div>
          <a class="link" href="forget-password.html">Esqueceu a palavra-passe?</a>
        </div>

        <div class="form-group">
          <button id="loginButton" class="btn btn-primary btn-block" type="submit">Entrar</button>
        </div>

        <div class="login-social-title">                
          <h5>Entrar com</h5>
        </div>

        <div class="form-group">
          <ul class="login-social">
            <li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
            <li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
            <li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
            <li><a href="#" target="_blank"><i data-feather="instagram"></i></a></li>
          </ul>
        </div>

        <p>Não tem conta?<a class="ms-2" href="#">Criar Conta</a></p>
      </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- page-wrapper end-->
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <!-- <script src="../assets/js/sidebar-menu.js"></script> -->
    <script src="../assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->

    <script src="../assets/js/script.js"></script>
    <!-- login js-->
    <script>
      $(document).ready(function() {
        // console.log($('#loginForm'));
        $('#loginForm').on('submit', function(e) {
          e.preventDefault();
          // alert("Ola")
          
          var username = $('#username').val();
          var password = $('#password').val();
          
          $('#loginButton').prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processando...');
          $('#loginMessage').hide();
          
          // Usar a variável de ambiente diretamente no JavaScript
          var apiLoginUrl = '{{ env("API_LOGIN_URL") }}';
          // alert(apiLoginUrl);
          console.log(apiLoginUrl);
          $.ajax({
            url: apiLoginUrl,
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify({
              username: username,
              password: password
            }),
            success: function(response) {
              // Armazena o token JWT no localStorage
              console.log(response);
              console.log(response.data.access_token);
              localStorage.setItem('auth_token', response.data.access_token);
              
              // Se a API retornar dados do usuário, armazene-os também
              if (response.data.user) {
                localStorage.setItem('user_data', JSON.stringify(response.data.user));
              }
              
              // Redireciona para a página de casos
              window.location.href = '/dashboard';
            },
            error: function(xhr) {
              $('#loginButton').prop('disabled', false).html('Entrar');
              
              // // Exibe mensagem de erro
              // var errorMessage = 'Erro ao fazer login. Verifique suas credenciais.';
              // if (xhr.responseJSON && xhr.responseJSON.message) {
              //   errorMessage = xhr.responseJSON.message;
              // }

              var errorMessage = 'Erro ao fazer login. Verifique suas credenciais.';

              if (xhr.responseJSON && xhr.responseJSON.message) {
                errorMessage = xhr.responseJSON.message;
              }

                          Swal.fire({
                icon: 'error',
                title: 'Login falhou',
                html: `<strong>${errorMessage}</strong>`,
                confirmButtonText: 'Tentar novamente',
                confirmButtonColor: '#e74c3c'
              });
              
              $('#loginMessage').text(errorMessage).show();
            }
          });
        });
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Plugin used-->
  </body>
</html>