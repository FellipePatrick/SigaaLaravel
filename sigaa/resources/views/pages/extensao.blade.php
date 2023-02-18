@extends('layouts.base')

@section('title', 'SIGAA - Extensão')
@section('title', 'SIGAA - Acervo')
@section('css')

<link rel="stylesheet" href="../css/calendario.css">
<link rel="stylesheet" href="../css/estilo_departamentos.css">

@endsection


@section('content')
<div class="container ">
      <H2 class="py-4 fw-bold border-bottom"> Projetos de Extensão</H2>
      <div class="row infor">
          <div class="col-md-12 ">
            <div class="col-md-6 d-flex ">
              <div class=" col-md-2 col-sm-2 ">
                <p class="fw-semibold text_infor">Coordenador:</p>
                <div class="dropdown ">
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   --------
                  </a>    
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">José de Alencar</a></li>
                    <li><a class="dropdown-item" href="#">Eduardo Marinho</a></li>
                    <li><a class="dropdown-item" href="#">Fellipe Patrick</a></li>
                  </ul>
                </div>
              </div>
              <div class="  col-md-2 col-sm-2 itens movee ">
                <div class="dropdown ">
                  <p  class="fw-semibold text_infor">Titulo:</p>
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    --------
                  </a>    
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Biologia no Mundo</a></li>
                    <li><a class="dropdown-item" href="#">Hora de Viajar</a></li>
                    <li><a class="dropdown-item" href="#">Era uma vez</a></li>
                  </ul>
                </div>
              </div>
              <div class=" enviar  mx-5 ">
                <button type="button" class=" btn btn-primary btn-sm moveeb">enviar</button>
              </div>
              </div>       
            </div>
            <div class="col-md-6">     
            </div>
          </div>
          <div class="col-md-6">     
          </div>
        </div>
    </div>
    <section class="departamentos py-5">
      <div class="container">
          <div class="row">
              <div class="row departrow " >
                  <div style="background-color:rgb(30, 30, 54) ; height: auto; width: 100%;" >
                  <li class=" itens d-flex py-3" style="color:white ;"><h2>UFRN | </h2> 
                    <h4>Eco-Sistemas</h4></li>
                  </div>
                  <div class="col-md-12 d-flex border border-3">
                      <div class="col-md-4">
                        <div class="imagee">
                          <img src="../img/logo bio.png" width="100%" alt=""> 
                        </div>   
                            <ul class="ul_infos">
                            <h5 class="py-2 fw-bolder">Integrantes do Projeto</h5>
                              Edilson Dantas <br>
                              Jonas Ican
                              <h5 class="py-2" >Telefones</h5>
                              3215.3419
                              <h5 class="py-2">Unidade Responsavel</h5>
                              CAENE
                          </ul>
                      </div>
                      <div class="col-md-4 col-sm-6 py-4 extensaotext">
                          <h1>Eco-Sistemas</h1>
                          <h5 class="py-3 fw-bolder mx-2">Coordenador:</h5>
                          <li>Fellipe Patrick</li>
                          <h5 class="py-3 fw-bolder mx-2">Descrição do Escopo do Projeto: </h5>
                          <div class="links ">
                              <p>
                                  Detalhamento mais aprofundado do trabalho 
                                  do projeto. Entregas do Projeto: descrição minuciosa dos produtos, capacidades
                                  e/ou resultados para realizar um serviço único e verificável e, assim, concluir
                                  um processo, uma fase ou um projeto.
                              </p>
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