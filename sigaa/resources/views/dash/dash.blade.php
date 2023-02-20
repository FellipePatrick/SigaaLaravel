@extends('layouts.base')

@section('title', 'SIGAA - Dash')

@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
            @if(session('msgs'))
                <div class="alert alert-success" role="alert">
                    {{session('msgs')}} <i class="mx-5 fa-solid fa-xmark" onclick="this.parentElement.style.display='none';"></i>
                </div>
            @elseif(session('msgr'))
                <div class="alert alert-danger" role="alert">
                    {{session('msgr')}} <i class="mx-5 fa-solid fa-xmark" onclick="this.parentElement.style.display='none';"></i>
                </div>
            @endif
            <h3 class="my-2"><i class="fa-solid fa-envelope"></i>  Criar Notificação</h3> 
            <form action="/notification" method="POST" class="row g-3">
            @csrf
                <div class="row my-5">
                    <div>
                            <div class="mb-3">
                            <label class="form-label">Titulo</label>
                            <input type="text" name="title" class="form-control" placeholder="Titulo" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                            <textarea class="form-control" name="description" 
                                id="exampleFormControlTextarea1" rows="3" >

                            </textarea>
                        </div>
                        <div class="my-3">
                            <button type="submit" class="btn btn-primary">cadastrar</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-3 col-md-6">
            <h3 class="my-2"><i class="fa-solid fa-folder-open"></i>  Criar Novidade</h3> 
            <form action="/novidade" method="POST" class="row g-3" enctype="multipart/form-data">
             @csrf
                <div class="row my-5">
                    <div>
                        <div class="mb-3">
                            <label for="form-label">Imagem do Evento:</label>
                            <input type="file" id="image" name="image" class="from-control-file">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Titulo</label>
                            <input type="text" name="title" class="form-control" placeholder="Titulo" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                            <textarea class="form-control" name="description" 
                                id="exampleFormControlTextarea1" rows="3" >
                            </textarea>
                        </div>
                        <div class="my-3">
                            <button type="submit" class="btn btn-primary">cadastrar</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

@endsection