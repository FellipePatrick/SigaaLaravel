@extends('layouts.baselogin')

@section('title', 'SIGAA - Cadastro')
@section('css')
<link rel="stylesheet" href="../css/estilo_cadastro.css">
@endsection

@section('content')
<section class="text-center marcador_section text-lg-start ">
            <div class="container py-4">      
            <div class="row g-0 align-items-center">
                <div class=" offset-lg-1  col-lg-6 mb-5 mb-lg-0">
                  <div class="card cascading-right">
                    <div class="imageseta mx-5 py-">
                      <a href="/"><img src="../img/seta.png" width="25px" alt=""></a>
                    </div>
                    <div class="card-body  shadow-5 text-center">
                    <h5 class="fw-bold mb-5" style="letter-spacing: 3px;">Cadastre-se</h5>
                    <form class="row g-3">
                      <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                      </div>
                      <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="inputPassword4">
                      </div>
                      <div class="col-12">
                        <label for="inputAddress" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Rua Principal, 1234">
                      </div>
                        <div class="col-6">
                          <label for="inputAddress2" class="form-label">Telefone</label>
                          <input type="text" class="form-control" id="inputAddress2" placeholder="(84) 9 0000-0000">
                        </div>
                        <div class="col-6">
                          <label for="inputAddress2" class="form-label">Telefone</label>
                          <input type="text" class="form-control" id="inputAddress2" placeholder="(84) 9 0000-0000">
                        </div>
                      <div class="col-md-6">
                        <label for="inputCity" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="inputCity">
                      </div>
                      <div class="col-md-4">
                        <label for="inputState" class="form-label">Estado</label>
                        <select id="inputState" class="form-select">
                          <option selected>selecione</option>
                          <option>RN</option>
                          <option>BA</option>
                          <option>CE</option>
                        </select>
                      </div>
                      <div class="col-md-2">
                        <label for="inputZip" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="inputZip">
                      </div>
                      <div class="col-lg-4 col-sm-4">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Notifique-me
                          </label>
                        </div>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">cadastrar</button>
                      </div>
                    </form>
                    </div>
                 </div>
                </div>
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <img src="../img/imagecapa.jpg" class="w-100 rounded-4 imagecapa shadow-4"
                      alt="" />
                </div>
             </div>
            </div>
        </section>
@endsection