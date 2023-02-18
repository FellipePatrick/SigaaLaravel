@extends('layouts.base')

@section('title', 'SIGAA - Calendario')

@section('css')

<link rel="stylesheet" href="../css/calendario.css">

@endsection

@section('content')
<div class="container ">
      <H2 class="py-4 fw-bold border-bottom">Calendário Academico</H2>
      <div class="row infor">
        <div class="col-md-12 ">
          <div class="col-md-6 d-flex ">
            <div class="offset-md-1 col-md-2 col-sm-2 ">
              <p class="fw-semibold text_infor">Ano:</p>
              <div class="dropdown ">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 --------
                </a>    
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">2022</a></li>
                  <li><a class="dropdown-item" href="#">2021</a></li>
                  <li><a class="dropdown-item" href="#">2022</a></li>
                </ul>
              </div>
            </div>
            <div class="  col-md-2 col-sm-2 itens movee ">
              <div class="dropdown ">
                <p  class="fw-semibold text_infor">Cursos:</p>
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  --------
                </a>    
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Biologia</a></li>
                  <li><a class="dropdown-item" href="#">Matematica</a></li>
                  <li><a class="dropdown-item" href="#">Portufues</a></li>
                </ul>
              </div>
            </div>
            <div class=" enviar  mx-5 d-flex ">
              <button type="button" class=" btn btn-primary btn-sm moveeb">enviar</button>
            </div>
          </div>
          <div class="col-md-6">     
          </div>
        </div>
      </div>
    </div>
    <section class="conteudo py-5">
      <div class="container  container_calendario mb-5">
       <div class="row d-flex ">
        <div class="col-md-3 col-sm-12 d-flex flex-column align-items-center ">
          <h4 class="fw-bold">JANEIRO</h4>
          <img src="../img/calendario.png" width="100%" class="calendario_img py-3" alt="">
          <div class="conteudoc py-2 border border-2">
            <h5 class="fw-semibold">Dia  1 - Folclore</h5>
            <h5 class="fw-semibold">Dia 16 - Dia da beterraba</h5>
            <h5 class="fw-semibold">Dia 25 - Feriado Municipal</h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-12 d-flex flex-column align-items-center ">
          <h4 class="fw-bold">FEVEREIRO</h4>
          <img src="../img/calendario.png" width="100%" class="calendario_img py-3" alt="">
          <div class="conteudoc py-2 border border-2">
            <h5 class="fw-semibold">Dia  1 - Folclore</h5>
            <h5 class="fw-semibold">Dia 16 - Dia da beterraba</h5>
            <h5 class="fw-semibold">Dia 25 - Feriado Municipal</h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-12 d-flex flex-column align-items-center ">
          <h4 class="fw-bold">MARÇO</h4>
          <img src="../img/calendario.png" width="100%" class="calendario_img py-3" alt="">
          <div class="conteudoc py-2 border border-2">
            <h5 class="fw-semibold">Dia  1 - Folclore</h5>
            <h5 class="fw-semibold">Dia 16 - Dia da beterraba</h5>
            <h5 class="fw-semibold">Dia 25 - Feriado Municipal</h5>
          </div>
        </div>  
        <div class="col-md-3 col-sm-12 d-flex flex-column align-items-center ">
          <h4 class="fw-bold">ABRIL</h4>
          <img src="../img/calendario.png" width="100%" class="calendario_img py-3" alt="">
          <div class="conteudoc py-2 border border-2">
            <h5 class="fw-semibold">Dia  1 - Folclore</h5>
            <h5 class="fw-semibold">Dia 16 - Dia da beterraba</h5>
            <h5 class="fw-semibold">Dia 25 - Feriado Municipal</h5>
          </div>
        </div>  
        </div>
       </div>
      </div>
    </section>
</div>
@endsection