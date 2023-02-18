@extends('layouts.base')

@section('title', 'SIGAA - Cursos')
@section('css')

<link rel="stylesheet" href="../css/calendario.css">
<link rel="stylesheet" href="../css/estilo.css">
<link rel="stylesheet" href="../css/estilo_departamentos.css">
<link rel="stylesheet" href="../css/curso.css">

@endsection

@section('content')
<div class="container ">
        <H2 class="py-4 fw-bold border-bottom">Cursos</H2>
        <div class="row infor">
          <div class="col-md-12 ">
            <div class="col-md-6 d-flex ">
              <div class="  col-md-2 col-sm-2 itens movee ">
                <div class="dropdown ">
                  <p  class="fw-semibold text_infor">Curso:</p>
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    --------
                  </a>    
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">BioFísica e Farmacologia</a></li>
                    <li><a class="dropdown-item" href="#">Matematica</a></li>
                    <li><a class="dropdown-item" href="#">Medicina</a></li>
                  </ul>
                </div>
              </div>
              <div class="  col-md-2 col-sm-2 itens movee ">
                <div class="dropdown ">
                  <p  class="fw-semibold text_infor">Modalidade de ensino:</p>
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    --------
                  </a>    
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">BioFísica e Farmacologia</a></li>
                    <li><a class="dropdown-item" href="#">Matematica</a></li>
                    <li><a class="dropdown-item" href="#">Medicina</a></li>
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
   
      <section>
        <div class="container py-5">
            <div class="row">
                <div class="d-flex classss border-bottom">
                    <h1>\\</h1><h3>BIOLOGIA</h3>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="offset-md-3 col-md-6">
                      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="../img/capacurso.jfif" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="../img/capacurso.jfif" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="../img/capacurso.jfif" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="container mb-3 py-3" style="margin-top: 30px;">
                <div class="row">
                    <p><h2>Últimas novidades</h2></p>
                    <h6 style="margin-left: 80px;" width="100px">Veja abaixo as noticias referentes ao nosso Curso</h6>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-3 offset-md-1">
                      <div class="image py-2">
                        <img src="../img/capacurso.jpg" width="100%"  alt="">
                      </div>
                      <h6 class="fw-bolder">Aluno Relocuciona Vacida do  COVID-19 </h6>
                      <p style="font-size:13px ; font-weight: bolder;"> I° Minicurso da Liga Acadêmica de Fertilidade e 
                        Reprodução Assistida (LAFRA/UFRN)</p>
                    </div>
                    <div class="col-md-3 ">
                      <div class="image py-2">
                        <img src="../img/capacurso.jpg" width="100%"  alt="">
                      </div>
                      <h6 class="fw-bolder">Aluno Relocuciona Vacida do  COVID-19 </h6>
                      <p style="font-size:13px ; font-weight: bolder;"> I° Minicurso da Liga Acadêmica de Fertilidade e 
                        Reprodução Assistida (LAFRA/UFRN)</p>
                    </div>
                    <div class="col-md-3 ">
                      <div class="image py-2">
                        <img src="../img/capacurso.jpg" width="100%"  alt="">
                      </div>
                      <h6 class="fw-bolder">Aluno Relocuciona Vacida do  COVID-19 </h6>
                      <p style="font-size:13px ; font-weight: bolder;"> I° Minicurso da Liga Acadêmica de Fertilidade e 
                        Reprodução Assistida (LAFRA/UFRN)</p>
                    </div>   
                </div>
            </div>
        </div>
      </section>

      <section class="departamentos py-3">
        <div class="container">
            <div class="row">
                <div class="row departrow " >
                    <div style="background-color:rgb(30, 30, 54) ; height: auto; width: 100%;" >
                    <li class=" itens d-flex py-3" style="color:white ;"><h2>UFRN | </h2> 
                      <h4>BioCiências</h4></li></div>
                    <div class="col-md-12 d-flex border border-3">
                        <div class="col-md-4 cursoss">
                          <div class="imagee">
                            <img src="../img/cursologo.png" width="100%" alt=""> 
                          </div>   
                            <h5 class="py-2 fw-bolder mx-3">Calendario do Curos</h5>
                              <p class="mx-3 fw-bolder" style="font-size: 12px;">
                                09/03/2022 - 16/03/2022
                                <br>Matrícula para o período 2022.1.
                              </p>
                              <p class="mx-3 fw-bolder" style="font-size: 12px;">
                                28/03/2022
                                <br>Início do período letivo 2022.1.
                              </p>
                              <p class="mx-3 fw-bolder" style="font-size: 12px;">
                                04/08/2022 - 11/08/2022
                                <br>Matrícula para o período 2022.2.
                              </p>
                        </div>
                        <div class="col-md-4 py-5 biologia">
                            <h1>Biologia</h1>
                            <h6 class="py-3 fw-bolder mx-2">Coordenador:</h6>
                            <li class="fw-bold mb-3">Leonardo Capistrano Ferreira</li>
                            <div class="links ">
                                <p>O Curso de Biomedicina da Universidade Federal do 
                                  Rio Grande do Norte, assim como todos aqueles oferecidos 
                                  pelas Instituições de Ensino Superior do Brasil, teve sua 
                                  origem no curso de Ciências Biológicas - Modalidade Médica 
                                  criado no país através do Parecer N0 571/66 do Conselho 
                                  Federal de Educação de 14 de dezembro de 1966.</p>
                            </div>
                        </div>
                        <div class="col-md-2 py-5 mx-5">
                          <img  class=" extensao" src="../img/arvores.png" width="100%" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

@endsection