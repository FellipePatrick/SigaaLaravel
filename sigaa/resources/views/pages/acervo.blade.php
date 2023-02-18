@extends('layouts.base')

@section('title', 'SIGAA - Acervo')
@section('css')

<link rel="stylesheet" href="../css/calendario.css">
<link rel="stylesheet" href="../css/acervo.css">

@endsection

@section('content')
<div class="container ">
        <H2 class="py-4 fw-bold border-bottom">Acervo Academico</H2>
        <div class="row infor">
          <div class="col-md-12 ">
            <div class="col-md-6 d-flex ">
              <div class=" col-md-2 col-sm-2 ">
                <p class="fw-semibold text_infor">Autor:</p>
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
        </div>
      </div>
    <section class="conteudo_acervo">
        <div class="container">
            <div class="row">
                <div class="offset-md-1 col-md-7">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <img class="imagem_livro" src="../img/arvores.png" width="" height="300" alt="">
                        </div>
                        <div class=" col-md-8 col-sm-12  ">
                          <ul>
                            <h5>Livro - Biologia no Mundo Morderno</h5>
                            <div class="icones1">
                              <i class="fa fa-star" style="color: yellow ;"></i>
                              <i class="fa fa-star" style="color: yellow ;"></i>
                              <i class="fa fa-star" style="color: yellow ;"></i>
                              <i class="fa fa-star" style="color: yellow ;"></i>
                              <i class="fa fa-star" style="color: rgb(87, 87, 83) ;"></i>
                            </div>
                          <h6 class="py-1">José de Alencar</h6>
                           <p> O romance mais pessoal da carreira de Colleen Hoover, 
                            É assim que acaba discute temas como violência doméstica
                             e abuso psicológico de forma sensível e direta. &#160; Em É 
                            assim que acaba, Colleen Hoover nos apresenta Lily, uma jovem...</p>
                            <a href=""><h6>Mais informações</h6></a>
                           <a href=""> <h6>Conheça nossa polítca de  imprestimos</h6></a>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 ">
                  <ul>
                    <h5>Novas Aquiosoções - UFRN</h5>
                    <li>Ciências Agrárias</li>
                    <li>Ciências Biológicas</li>
                    <li>Ciências da Saúde</li>
                    <li>Ciências Exatas e da Terra</li>
                    <li>Ciências Humanas</li>
                    <li>Ciências Sociais Aplicadas</li>
                    <div class="border-bottom py-3"></div>
                  </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=" ">
        <div class="container-fluid livros" style="background-color: #112039;
              color: aliceblue;"> 
          <div class="container">
            <div class="row livros1">
              <div class=" col-md-2 centralizar">        
                  <div class="">
                    <i class="icones fa fa-book"></i>
                  </div>
                  <h4>Organização dos Arquivos</h4>
                  <p>Organizamos seus arquivos
                    facilitando a localização.</p>
                    <div class="linhas ">
                      _____<br>_____
                    </div>
              </div>
              <div class="col-md-2 centralizar">
                <div class="">
                  <i class=" icones fa Example of archive fa-archive"></i>
                </div>
                <h4>Organização dos Arquivos</h4>
                  <p>Organizamos seus arquivos
                    facilitando a localização.</p>
                    <div class="linhas ">
                      _____<br>_____
                    </div>
              </div>
              <div class="col-md-2 centralizar">
                <i class="icones fa  fa-file-pdf-o"></i>
                <h4>Organização dos Arquivos</h4>
                  <p>Organizamos seus arquivos
                    facilitando a localização.</p>
                    <div class="linhas ">
                      _____<br>_____
                    </div>
              </div>
              <div class="col-md-2 centralizar">
                <i class="icones fa fa-file-o"></i>
                <h4>Organização dos Arquivos</h4>
                  <p>Organizamos seus arquivos
                    facilitando a localização.</p>
                    <div class="linhas ">
                      _____<br>_____
                    </div>
              </div>
            </div>
          </div>
          </div>
    </section>
    <section class="quantidade_livros py-5">
      <div class="container-fluid " style="background-color: #262728;
            color: aliceblue;">
        <div class="container">
          <div class="row quantidade">
            <div class=" col-md-2 centralizar2">  
                <h6 class="fw-bold">MAIS DE</h6>      
                <h4>50.000</h4>
                <h5>Livros</h5>
                <p class="fw-semibold">De todas as categorias 
                  de livros educacionais</p>
                  <div class="linhas ">
                    _____<br>_____
                  </div>
            </div>
            <div class=" col-md-2 centralizar2">  
              <h6 class="fw-bold">MAIS DE</h6>      
              <h4>50.000</h4>
              <h5>Livros</h5>
              <p class="fw-semibold">De todas as categorias 
                de livros educacionais</p>
                <div class="linhas ">
                  _____<br>_____
                </div>
          </div>
          <div class=" col-md-2 centralizar2">  
            <h6 class="fw-bold">MAIS DE</h6>      
            <h4>50.000</h4>
            <h5>Livros</h5>
            <p class="fw-semibold">De todas as categorias 
              de livros educacionais</p>
              <div class="linhas ">
                _____<br>_____
              </div>
        </div>
           <div class=" col-md-2 centralizar2">  
                <h6 class="fw-bold">MAIS DE</h6>      
                <h4>50.000</h4>
                <h5>Livros</h5>
                <p class="fw-semibold">De todas as categorias 
                  de livros educacionais</p>
                  <div class="linhas ">
                    _____<br>_____
                  </div>
            </div>
        </div>
        </div>
        <div class="row">
          <div class="offset-md-5 col-md-3 offset-sm-4 col-sm-4">
            <div class="botao ">
              <button type="button" class="btn btn-primary btn-lg " width="25%">Conheça mais o Arcevo</button>
            </div>
          </div>
        </div>
      </div>
  </section>

@endsection