@extends('layouts.base')

@section('title', 'SIGAA - Departamentos')

@section('css')

<link rel="stylesheet" href="../css/calendario.css">
<link rel="stylesheet" href="../css/estilo_departamentos.css">

@endsection

@section('content')

<div class="container ">
        <H2 class="py-4 fw-bold border-bottom">Departamentos Academicos</H2>
        <div class="row infor">
          <div class="col-md-12 ">
            <div class="col-md-6 d-flex ">
              <div class="offset-md-1 col-md-2 col-sm-2 ">
                <p class="fw-semibold text_infor">Centro:</p>
                <div class="dropdown ">
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   --------
                  </a>    
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">BioCiência</a></li>
                    <li><a class="dropdown-item" href="#">Matematica</a></li>
                    <li><a class="dropdown-item" href="#">Física</a></li>
                  </ul>
                </div>
              </div>
              <div class="  col-md-2 col-sm-2 itens movee ">
                <div class="dropdown ">
                  <p  class="fw-semibold text_infor">Departamento:</p>
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
    <section class="departamentos py-5">
        <div class="container">
            <div class="row">
                <div class="row departrow " >
                    <div style="background-color:rgb(30, 30, 54) ; height: auto; width: 100%;" >
                    <li class=" itens d-flex py-3" style="color:white ;"><h2>UFRN | </h2> <h4>Centro de BioCiência</h4></li></div>
                    <div class="col-md-12 caixa d-flex border border-3">
                        <div class="col-md-4">
                            <div class="imagee">
                              <img src="../img/logo bio.png" width="100%" alt=""> 
                            </div>                  
                            <ul class="ul_infos">
                              <h5 class="py-2 fw-bolder">Chefe do Departamentos</h5>
                                <li >Edilson Dantas</li>
                                <li>Jonas Ican</li>
                                <h5 class="py-2" >Telefones</h5>
                                <li>3215.3419</li>
                                <h5 class="py-2">Endereço Alternativo</h5>
                                <li>Não informado</li>
                            </ul>
                        </div>
                        <div class="col-md-6 py-5 ">
                            <h4>Departamento de BioFísica e Farmacologia</h4>
                            <h6 class="py-3 fw-bolder mx-2">Escolha outro departamento</h6>
                            <div class="links ">
                                <ul class="">
                                    <li class="py-1"><a href="">Departamento de BioFísica e Farmacologia</a></li>
                                    <li class="py-1"><a href="">Departamento de BioFísica e Farmacologia</a></li>
                                    <li class="py-1"><a href="">Departamento de BioFísica e Farmacologia</a></li>
                                    <li class="py-1"><a href="">Departamento de BioFísica e Farmacologia</a></li>
                                    <li class="py-1"><a href="">Departamento de BioFísica e Farmacologia</a></li>
                                    <div class="border-bottom py-4"></div>
                                </ul>
                            </div>
                        </div>
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
                  <li class=" itens d-flex py-3" style="color:white ;"><h2>UFRN | </h2> <h4>Centro de BioCiência</h4></li></div>
                  <div class="col-md-12 d-flex border border-3">
                      <div class="col-md-4">
                        <div class="imagee">
                          <img src="../img/logo bio.png" width="100%" alt=""> 
                        </div>   
                            <ul class="ul_infos">
                            <h5 class="py-2 fw-bolder">Chefe do Departamentos</h5>
                              <li >Edilson Dantas</li>
                              <li>Jonas Ican</li>
                              <h5 class="py-2" >Telefones</h5>
                              <li>3215.3419</li>
                              <h5 class="py-2">Endereço Alternativo</h5>
                              <li>Não informado</li>
                          </ul>
                      </div>
                      <div class="col-md-6 py-5 ">
                          <h4>Departamento de BioFísica e Farmacologia</h4>
                          <h6 class="py-3 fw-bolder mx-2">Escolha outro departamento</h6>
                          <div class="links ">
                              <ul class="">
                                  <li class="py-1"><a href="">Departamento de BioFísica e Farmacologia</a></li>
                                  <li class="py-1"><a href="">Departamento de BioFísica e Farmacologia</a></li>
                                  <li class="py-1"><a href="">Departamento de BioFísica e Farmacologia</a></li>
                                  <li class="py-1"><a href="">Departamento de BioFísica e Farmacologia</a></li>
                                  <li class="py-1"><a href="">Departamento de BioFísica e Farmacologia</a></li>
                                  <div class="border-bottom py-4"></div>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

@endsection