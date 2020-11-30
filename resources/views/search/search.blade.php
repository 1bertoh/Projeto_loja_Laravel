@extends('layouts.main')
@section('Shopping')
@section('content')

<?php
$qs = '';

if (false === empty($_SERVER['QUERY_STRING'])) {
   $qs = $_SERVER['QUERY_STRING'] . '&';
}

//extrai a querystring para uma array/vetor
parse_str($qs, $output);

//Exibe o resultado
print_r($output);
?>

<?php
//Copia o output para não misturar os links
$link1 = $output;

//Cria o seu link com o valor cor=verde
$link1['sort'] = 'name';
?>
<a href="?<?php echo http_build_query($link1); ?>"></a>

<?php
//Copia o output para não misturar os links
$link2 = $output;

//Cria o seu link com o valor sexo=m
$link2['sort'] = 'price';
?>

<?php
//Copia o output para não misturar os links
$link3 = $output;

//Cria o seu link com o valor sexo=m
$link3['sort'] = 'rate';
?>



<div class="row">
    <div class="col-lg-2 col-sm-3 col-md-3" style="background-color: aqua;">
        <nav>
            <div class="list-group mt-3">
                <h6>Filtros</h6>
                <a  href="{{url('/search?search=computador')}}"  class="list-group-item list-group-item-action active">Computador</a>
                <a  href="{{url('/search?search=TV')}}"  class="list-group-item list-group-item-action">TV</a>
                <a  href="{{url('/search?search=roupas')}}"  class="list-group-item list-group-item-action ">Roupas</a>
                <a  href="{{url('/search?search=acessorios')}}"  class="list-group-item list-group-item-action ">Acessórios</a>
                <a  href="{{url('/search?search=moveis')}}"  class="list-group-item list-group-item-action ">Móveis</a>
                <a  href="{{url('/search?search=liquidificador')}}"  class="list-group-item list-group-item-action ">Liquidificador</a>
                <a  href="{{url('/search?search=livros')}}"  class="list-group-item list-group-item-action ">Livros</a>
                <a  href="{{url('/search?search=brinquedos')}}"  class="list-group-item list-group-item-action ">Brinquedos</a>
            </div>
        </nav>
    </div>

    <div class="col-lg-10 col-sm-9 col-md-9 px-4 " style="background-color: blue; padding-top: 4em">
        
        <div class="dropdown d-flex justify-content-end mb-4">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ordenar
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="?<?php echo http_build_query($link1); ?>">Nome</a>
                <a class="dropdown-item" href="?<?php echo http_build_query($link2); ?>">Preço</a>
                <a class="dropdown-item" href="?<?php echo http_build_query($link3); ?>">Reputação</a>
            </div>
        </div>

        <div class="row justify-content-between" style="background-color: #071a52;">

            @foreach($produtos as $produto)

                <div class="card  col-lg-4 col-md-5 col-sm-12 col-12" style="width: 55%;" >
                <img src="/Image/products/{{$produto->image}}" class="card-img-top" alt="https://picsum.photos/200">
                <div class="card-body">
                    <h5 class="card-title">{{$produto->name}}</h5>
                    <input data-role="rating" data-stars="5"
                        data-star-color="cyan"
                        data-stared-color="pink">
                    <p class="h6"> Por: <strong>R$ {{$produto->price}}</strong></p>
                    
                </div>
                <a name="" onclick="alert()" id="" class="btn btn-rounded text-white  d-block btn-search" href="{{ route('shopping.buy', $produto->id) }}" role="button">Buy</a>
            </div>  

            @endforeach

             
        </div>
        <nav aria-label="Page navigation example" class="d-flex justify-content-center">
            <ul class="pagination">
                <li class="page-item border-0"><a class="page-link  border-0" href="#">Previous</a></li>
                <li class="page-item border-0"><a class="page-link border-0" href="#">1</a></li>
                <li class="page-item border-0"><a class="page-link border-0" href="#">2</a></li>
                <li class="page-item border-0"><a class="page-link border-0" href="#">3</a></li>
                <li class="page-item border-0"><a class="page-link border-0" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
<script>

</script>

@endsection