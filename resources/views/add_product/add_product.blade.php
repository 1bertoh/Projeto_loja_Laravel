@extends('layouts.main')
@section('title','Adicionar Produtos')
@section('content')

<div>
    <form action="/add_product" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome do produto</label>
            <input required type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea required name="description" id="descricao"></textarea>
        </div>
        <div class="form-group">
            <label for="especificacao">Especificações</label>
            <textarea required name="especification" id="especificacao"></textarea>
        </div>

        <div class="form-group">
          <label for="number">Preço</label>
          <input required type="number" step="0.01" class="form-control" name="price" id="number" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

        <div class="form-group mb-3">
            <label for="upload-img">Imagem do produto</label>
            <div class="custom-file">
                <input required type="file" name="image" class="custom-file-input" id="upload-img" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>

            <div class="form-group">
                <label for="category"></label>
                <select required class="form-control" name="id_category" id="category">
                    <option value="1">Computador</option>
                    <option value="2">TV</option>
                    <option value="3">Roupas</option>
                    <option value="4">Acessórios</option>
                    <option value="5">Móveis</option>
                    <option value="6">Liquidificador</option>
                    <option value="7">Livros</option>
                    <option value="8">Brinquedos</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection