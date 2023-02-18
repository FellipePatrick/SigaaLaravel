@extends('layouts.baselogin')

@section('title', 'SIGAA - Recuperar Senha')

@section('css')
<link rel="stylesheet" href="../css/estilo_recuperarsenha.css">
@endsection

@section('content')
<section class=" " >
        <div class="container py-5 d-flex justify-content-center align-items-center ">
            <div class="col col-xl-10">        
              <div class="card" >
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="../img/imagecapa.jpg"
                      alt="login form" class="img-fluid py-5"  />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">

                    <div class="card-body p-4 p-lg-5 text-black">
                      <div class="imageseta">
                        <a href="/"><img src="../img/seta.png" width="25px" alt=""></a>
                      </div>
                      <form class="py-4">
                        <h5 class="fw-semibold mb-3 pb-3 d-flex justify-content-center border-bottom" style="letter-spacing: 2px;">Crie sua nova Senha</h5>
      
                        <div class="form-outline mb-4 py-4">
                          <input type="email" id="form2Example17" class="form-control place form-control-lg" placeholder="email" />
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" id="form2Example27" class="form-control place form-control-lg" placeholder="nova senha"/>
                        </div>
      
                        <div class="pt-1 mb-4 d-flex justify-content-center">
                          <button class="btn btn-dark btn-lg btn-block" type="button">Enviar</button>
                        </div>
      
                        <a class="small estilo text-muted  d-flex justify-content-center" href="login.html">Entrar</a>
                        <p class="mb-5 pb-lg-2 d-flex justify-content-center my-4">Não tenha uma conta? <a href="cadastro.html" class="estilo">Registre-se aqui</a></p>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection