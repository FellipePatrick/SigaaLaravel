@extends('layouts.base')

@section('title', 'SIGAA')

@section('content')

    <!--Ultimas noticias-->
    <div class="container py-4 ">
            <div class="row ">
                <div class="col-lg-7  col-md-12 col-sm-12">
                  <img src="../img/image1.png" class="image_noticiap "width="100%" alt="">
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                @foreach($notification as $noti)
                  <div class="conteudo py-4 fw-light">
                    <h6>{{$noti->title}}</h6>
                    <p class="text fw-semibold" style="font-size:10px ;">
                      {{$noti->description}}
                    </p>
                    <div class="div border-bottom"> </div>
                  </div>
                @endforeach
                </div>
                <div class="col-md-2 col-sm-3 image2 ">
                  <img src="../img/image2.png" width="100%" height="100%"  alt="">
                </div>
            </div>
        </div>
        <!--Ultimas noticias-->
        <!-- noticias-->
        <div class="container mb-3">
            <div class="row">
                <p><h2>Últimas novidades</h2></p>
            </div>
            <div class="row">
                <div class="col-md-3 offset-md-1">
                  <div class="image py-2">
                    <img src="../img//image3.png" width="100%"  alt="">
                  </div>
                  <h6>Diretoria de Projetos-DP/INFRA</h6>
                  <p style="font-size:13px ;">Seleção de bolsistas do curso de
                    Arquitetura e Urbanismo!</p>
                </div>
                <div class="col-md-3">
                  <div class="image py-2">
                    <img src="../img/image3.png" width="100%"  alt="">
                  </div>
                  <h6>Diretoria de Projetos-DP/INFRA</h6>
                  <p style="font-size:13px ;">Seleção de bolsistas do curso de
                    Arquitetura e Urbanismo!</p>
                </div>
                <div class="col-md-3">
                  <div class="image py-2">
                    <img src="../img/image3.png" width="100%"  alt="">
                  </div>
                  <h6>Diretoria de Projetos-DP/INFRA</h6>
                  <p style="font-size:13px ;">Seleção de bolsistas do curso de
                    Arquitetura e Urbanismo!</p>
                </div>
                
            </div>
        </div>
        <!-- noticias-->

@endsection
