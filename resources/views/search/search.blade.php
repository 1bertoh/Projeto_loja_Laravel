@extends('layouts.main')
@section('Shopping')
@section('content')

<div class="row">
    <div class="col-2" style="background-color: aqua;">
        <nav>
            <div class="list-group mt-3">
                <h6>Filtros</h6>
                <a href="#" class="list-group-item list-group-item-action active">Computador</a>
                <a href="#" class="list-group-item list-group-item-action">TV</a>
                <a href="#" class="list-group-item list-group-item-action ">Roupas</a>
                <a href="#" class="list-group-item list-group-item-action ">Acessórios</a>
                <a href="#" class="list-group-item list-group-item-action ">Móveis</a>
                <a href="#" class="list-group-item list-group-item-action ">Liquidificador</a>
                <a href="#" class="list-group-item list-group-item-action ">Livros</a>
                <a href="#" class="list-group-item list-group-item-action ">Brinquedos</a>
            </div>
        </nav>
    </div>

    <div class="col-10 px-4 " style="background-color: blue; padding-top: 4em">
        
    <div class="dropdown d-flex justify-content-end">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ordenar
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Nome</a>
                <a class="dropdown-item" href="#">Preço</a>
                <a class="dropdown-item" href="#">Reputação</a>
            </div>
        </div>

        <div class="row row-cols-4 justify-content-between">
            <div class="card   mx-2">
                <img src="https://picsum.photos/200" class="card-img-top" alt="https://picsum.photos/200">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card  mx-2">
                <img src="https://picsum.photos/200" class="card-img-top" alt="https://picsum.photos/200">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>  
            <div class="card  mx-2">
                <img src="https://picsum.photos/200" class="card-img-top" alt="https://picsum.photos/200">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card  mx-2">
                <img src="https://picsum.photos/200" class="card-img-top" alt="https://picsum.photos/200">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card  mx-2">
                <img src="https://picsum.photos/200" class="card-img-top" alt="https://picsum.photos/200">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card  mx-2">
                <img src="https://picsum.photos/200" class="card-img-top" alt="https://picsum.photos/200">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card  mx-2">
                <img src="https://picsum.photos/200" class="card-img-top" alt="https://picsum.photos/200">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div> 
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

@endsection