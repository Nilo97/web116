// Interceptor para adicionar o token JWT a todas as requisições AJAX
$(document).ready(function() {
    // Adiciona o token JWT ao cabeçalho de todas as requisições AJAX
    $.ajaxSetup({
        beforeSend: function(xhr) {
            const token = localStorage.getItem('auth_token');
            if (token) {
                xhr.setRequestHeader('Authorization', 'Bearer ' + token);
            }
        }
    });
    
    // Verifica se o usuário está autenticado
    function checkAuth() {
        const token = localStorage.getItem('auth_token');
        if (!token && !window.location.pathname.includes('/login')) {
            // Redireciona para a página de login se não houver token
            window.location.href = '/login';
        }
    }
    
    // Verifica a autenticação ao carregar a página
    checkAuth();
});