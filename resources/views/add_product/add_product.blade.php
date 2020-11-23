@extends('layouts.main')
@section('title','Adicionar Produtos')
@section('content')

<div>
    <form action="/add_product">
        @csrf
        <div class="form-group">
            <label for="name">Nome do produto</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="description" id="descricao"></textarea>
        </div>
        <div class="form-group">
            <label for="especificacao">Especificações</label>
            <textarea name="especification" id="especificacao"></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="upload-img">Imagem do produto</label>
            <div class="custom-file">
                <input type="file" name="ime" class="custom-file-input" id="upload-img" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>

            <div class="form-group">
                <label for="category"></label>
                <select class="form-control" name="category" id="category">
                    <option value="computer">Computador</option>
                    <option value="tv">TV</option>
                    <option value="clothes">Roupas</option>
                    <option value="accessories">Acessórios</option>
                    <option value="furniture">Móveis</option>
                    <option value="liquidificador">Liquidificador</option>
                    <option value="books">Livros</option>
                    <option value="toys">Brinquedos</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection