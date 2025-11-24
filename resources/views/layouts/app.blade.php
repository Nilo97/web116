<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head')
</head>
<body>
    @include('layouts.partials.loader')

    <div class="page-wrapper" id="pageWrapper">
        @include('layouts.partials.header')
        @include('layouts.partials.sidebar')

        <div class="page-body">
            @yield('content') {{-- Aqui vai v o conteúdo específico de cada página --}}
        </div>

        @include('layouts.partials.footer')
    </div>

    @include('layouts.partials.scripts') {{-- JS compartilhado --}}
</body>
</html>