@extends('layouts.base')

@section('title', 'SIGAA - Destaques')

@section('content')

    <!--Ultimas noticias-->
    <div class="container py-4 ">
            <div class="row ">
                <div class="col-lg-7  col-md-12 col-sm-12">
                  <img src="../img/image1.png" class="image_noticiap "width="100%" alt="">
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                @if(count($notification) >= 3 )
                  @for($i = 0; 2 >= $i; $i++)
                    <div class="conteudo py-4 fw-light">
                      <h6>{{$notification[$i]["title"]}}</h6>
                      <p class="text fw-semibold" style="font-size:10px ;">
                      {{$notification[$i]["description"]}}
                      </p>
                      <div class="div border-bottom"> </div>
                    </div>
                  @endfor
                @else
                @for($i = 0; (count($notification)-1) >= $i; $i++)
                    <div class="conteudo py-4 fw-light">
                      
                      <h6>{{$notification[$i]["title"]}}</h6>
                      <p class="text fw-semibold" style="font-size:10px ;">
                      {{$notification[$i]["description"]}}
                      </p>
                      <div class="div border-bottom"> </div>
                    </div>
                @endfor
                @endif
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
               @foreach($novidade as $new)
               <div class="col-md-3 offset-md-1">
                  <div class="image py-2">
                    <img src="/img/images/{{ $new->path }}" width="100%"  alt="">
                  </div>
                  <h6>{{$new->title}}</h6>
                  <p style="font-size:13px ;">
                    {{$new->description}}
                  </p>
                </div>
               @endforeach
            </div>
        </div>
        <!-- noticias-->

@endsection
