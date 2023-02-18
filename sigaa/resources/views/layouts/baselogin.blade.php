<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="icon" type="image" href="../img/logo.png" />
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/estilo.css">
        @yield('css')
    </head>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
              <div class="logo_nav fontes  fw-semibold  px-1">
                </div>
              <div class="asd fontes fw-bold" style="font-size: 35px;"><a href="/">UFRN</a></div>
              <div class="">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                  <h6 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Sistema Integrado de Gestão de <br> Atividades Acadêmicas</h6>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="/">Menu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="https://sigaa.ufrn.br/sigaa/public/home.jsf">SIGAA</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="https://www.google.com/">Sair</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link navbar-fixed-bottom disabled" href="#">09/10/2022</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
    </header>
    
    @yield('content')

    <footer class="">
        <div class="container-fluid marcador copyright ">
            <div class="row py-3 px-3">
                <div class="col-md-6 fw-bold">
                    <p>SIGAA - Sistema Integrado de Gestão de Atividades Acadêmicas</p>
                </div>
            </div>
            <div class="row px-3 fw-semibold">
                <div class="col-md-6">
                    <a href="">Acesse a Central de Ajuda</a>
                </div>     
            </div>
            <div class="row px-3 texto_footer d-flex">
                
              <div class="col-md-4 col-sm-6 col-xs-3 d-flex flex-column bd-highlight mb-3 mt-3">
                    <h6 class="fw-bold">Docentes</h6>
                    <a href="">Acesse Paginas</a>
                    <a href="">Consulte chefes</a>
                    <a href="">Coordenadores</a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-3 d-flex flex-column bd-highlight mb-3 mt-3">
                  <h6 class="fw-bold">Especializados</h6>
                  <a href="">Unidades</a>
                  <a href="">Documentos</a>
                  <a href="">Coordenadores</a>       
          </div>
          <div class="col-md-4 col-sm-6 col-xs-3 d-flex flex-column bd-highlight mb-3 mt-3">
                <h6 class="fw-bold">Sistema</h6>
                <a href="">Diretores</a>
                <a href="">Centros</a>
                <a href="">Investidores</a>
        </div>
            </div>
            <div class="row">
              <div class="col-md-6">
              </div>
              <div class="col-md-3 offset-md-3 offset-sm-1 col-sm-10 py-4 texto_footer fw-bold ">
                  <a href="" class="px-1">Privacidade</a>
                  <a href="" class="px-1">Acessibilidade</a>
                  <a href="" class="px-1">Termos</a>
              </div>
           </div>
            <div class="row">
                <div class="col-md-6 offset-md-5" style="color: rgba(255, 255, 255, 0.5); font-size: 10px;">
                    @ 2022 COG - Interprise System
                </div>
            </div>
        </div>
    </footer>
</html>