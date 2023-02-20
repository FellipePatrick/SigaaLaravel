@extends('layouts.base')

@section('title', 'SIGAA - Dash')

@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
            <h3 class="my-2"><i class="fa-solid fa-envelope"></i>  Cria Notificação</h3> 
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
    </div>

@endsection