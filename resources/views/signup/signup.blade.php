@extends('layouts.main')
@section('title', 'shopping')
@section('content')

<div>
    <div class="card ">
        <div class="card-header">
            <h3>Cadastro</h3>
        </div>
        <div class="card-body ">
            <fieldset class="" >
                
                <form action="" method="post" class=" ">
                    <div class="form-group mx-auto text-white pb-3 pt-6"  style="background-color: #8A2E65; width:50%">
                        <p class="d-flex justify-content-center">
                            <label for="">
                                Nome completo: <input class="form-control" type="text" name="name" id="">
                            </label>
                        </p>
                        <p class="d-flex justify-content-center">
                            <label for="">
                                E-mail: <input class="form-control" type="email" name="name" id="">
                            </label>
                        </p>
                        <p class="d-flex justify-content-center">
                            <label for="">
                                Usuário: <input class="form-control" type="text" name="name" id="">
                            </label>
                        </p>
                        <p class="d-flex justify-content-center">
                            <label for="">
                                Senha: <input class="form-control" type="password" name="name" id="">
                            </label>
                        </p>
                        <p class="d-flex justify-content-center">
                            <label for="">
                                cofirmr senha: <input class="form-control" type="text" name="name" id="">
                            </label>
                        </p>
                        <p class="d-flex justify-content-center">
                            <label for="">
                                Data de nascimento: <input class="form-control" type="date" name="name" id="">
                            </label>
                        </p>
                        <a type="submit" class="btn btn-success mt-6 d-flex justify-content-center ">Cadastrar</a>
                    </div>
                    
                </form>
            </fieldset>
        </div>
    </div>
    
    
</div>

@endsection