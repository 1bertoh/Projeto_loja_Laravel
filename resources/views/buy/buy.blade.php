@extends('layouts.main')
@section('title', 'Shopping')
@section('content')

<div class=" card ">
    <div class="justify-content-center row">
        <img src="https://picsum.photos/300"
        class="mt-5 w-50 mx-auto"
        alt="produto">
    </div>                          
    <div class="card-body card-buy">
        <h4 class="card-title">Produtos1</h5>
        <input data-role="rating" data-stars="5"
        data-star-color="cyan"
        data-stared-color="pink">
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illum modi consectetur nam aliquam, aut distinctio quisquam similique ex voluptatibus suscipit optio vero, minima eaque, asperiores quaerat in facilis soluta!</p>
        <div class="row my-5">
            <a name=""
            id=""
            class="btn btn-rounded w-50 mx-auto text-white btn-buy"
            href="#"
            role="button">Buy</a>               
        </div>
        <div class="row">
            <a name=""
            id=""
            class="btn btn-rounded w-50 mx-auto text-white btn-buy"
            href="#"
            role="button">Carrinho 
                <ion-icon
                style="font-size:24px;"
                size="16px"
                name="cart-outline">
                </ion-icon>
            </a>               
        </div>
    </div>

    <!--acordion-->
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="collapse_toggle_1">
                <h2 class="mb-0">
                    <button class="btn  btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Descrição
                    </button>
                </h2>           
                <div id="collapseOne" class="pos-relative" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body"
                    data-role="collapse"
                    data-collapsed="true"
                    data-toggle-element="#collapse_toggle_1">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card">
            <div class="card-header" id="collapse_toggle_2">
                <h2 class="mb-0">
                    <button class="btn  btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Especificações
                    </button>
                </h2>
            
                <div id="collapseOne" class="pos-relative" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body"
                    data-role="collapse"
                    data-collapsed="true"
                    data-toggle-element="#collapse_toggle_2">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card">
            <div class="card-header" id="collapse_toggle_3">
                <h2 class="mb-0">
                    <button class="btn  btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Comentários
                    </button>
                </h2>
            
                <div id="collapseOne" class="pos-relative" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body"
                    data-role="collapse"
                    data-collapsed="true"
                    data-toggle-element="#collapse_toggle_3">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--fim acordion-->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col card ml-1">
                            <img src="https://picsum.photos/200" class="d-block w-30 card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Produto</h5>
                                <p class="h6"><strong> R$ 250,OO</strong></p>
                                    <input data-role="rating" data-stars="5"
                                    data-star-color="cyan"
                                    data-stared-color="pink">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illum modi consectetur nam aliquam, aut distinctio quisquam similique ex voluptatibus suscipit optio vero, minima eaque, asperiores quaerat in facilis soluta!</p>
                                <a name="" id="" class="btn btn-rounded text-white d-block" href="#" role="button">Buy</a>
                            </div>
                        </div> 
                   
                        <div class="col card ml-1">
                            <img src="https://picsum.photos/200" class="d-block w-30 card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Produto</h5>
                                <p class="h6"><strong> R$ 250,OO</strong></p>
                                    <input data-role="rating" data-stars="5"
                                    data-star-color="cyan"
                                    data-stared-color="pink">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illum modi consectetur nam aliquam, aut distinctio quisquam similique ex voluptatibus suscipit optio vero, minima eaque, asperiores quaerat in facilis soluta!</p>
                                <a name="" id="" class="btn btn-rounded text-white d-block" href="#" role="button">Buy</a>
                            </div>
                        </div>

                        <div class="col card ml-1">
                            <img src="https://picsum.photos/200" class="d-block w-30 card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Produto</h5>
                                <p class="h6"><strong> R$ 250,OO</strong></p>
                                    <input data-role="rating" data-stars="5"
                                    data-star-color="cyan"
                                    data-stared-color="pink">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illum modi consectetur nam aliquam, aut distinctio quisquam similique ex voluptatibus suscipit optio vero, minima eaque, asperiores quaerat in facilis soluta!</p>
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="#" role="button">Buy</a>
                            </div>
                        </div>

                        <div class="col card ml-1">
                            <img src="https://picsum.photos/200" class="d-block w-30 card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Produto</h5>
                                <p class="h6"><strong> R$ 250,OO</strong></p>
                                    <input data-role="rating" data-stars="5"
                                    data-star-color="cyan"
                                    data-stared-color="pink">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illum modi consectetur nam aliquam, aut distinctio quisquam similique ex voluptatibus suscipit optio vero, minima eaque, asperiores quaerat in facilis soluta!</p>
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="#" role="button">Buy</a>
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col card ml-1">
                            <img src="https://picsum.photos/200" class="d-block w-30 card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Produto</h5>
                                <p class="h6"><strong> R$ 250,OO</strong></p>
                                    <input data-role="rating" data-stars="5"
                                    data-star-color="cyan"
                                    data-stared-color="pink">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illum modi consectetur nam aliquam, aut distinctio quisquam similique ex voluptatibus suscipit optio vero, minima eaque, asperiores quaerat in facilis soluta!</p>
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="#" role="button">Buy</a>
                            </div>
                        </div> 
                   
                        <div class="col card ml-1">
                            <img src="https://picsum.photos/200" class="d-block w-30 card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Produto</h5>
                                <p class="h6"><strong> R$ 250,OO</strong></p>
                                    <input data-role="rating" data-stars="5"
                                    data-star-color="cyan"
                                    data-stared-color="pink">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illum modi consectetur nam aliquam, aut distinctio quisquam similique ex voluptatibus suscipit optio vero, minima eaque, asperiores quaerat in facilis soluta!</p>
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="#" role="button">Buy</a>
                            </div>
                        </div>

                        <div class="col card ml-1">
                            <img src="https://picsum.photos/200" class="d-block w-30 card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Produto</h5>
                                <p class="h6"><strong> R$ 250,OO</strong></p>
                                    <input data-role="rating" data-stars="5"
                                    data-star-color="cyan"
                                    data-stared-color="pink">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illum modi consectetur nam aliquam, aut distinctio quisquam similique ex voluptatibus suscipit optio vero, minima eaque, asperiores quaerat in facilis soluta!</p>
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="#" role="button">Buy</a>
                            </div>
                        </div>

                        <div class="col card ml-1">
                            <img src="https://picsum.photos/200" class="d-block w-30 card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Produto</h5>
                                <p class="h6"><strong> R$ 250,OO</strong></p>
                                    <input data-role="rating" data-stars="5"
                                    data-star-color="cyan"
                                    data-stared-color="pink">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illum modi consectetur nam aliquam, aut distinctio quisquam similique ex voluptatibus suscipit optio vero, minima eaque, asperiores quaerat in facilis soluta!</p>
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="#" role="button">Buy</a>
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col card ml-1">
                            <img src="https://picsum.photos/200" class="d-block w-30 card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Produto</h5>
                                <p class="h6"><strong> R$ 250,OO</strong></p>
                                    <input data-role="rating" data-stars="5"
                                    data-star-color="cyan"
                                    data-stared-color="pink">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illum modi consectetur nam aliquam, aut distinctio quisquam similique ex voluptatibus suscipit optio vero, minima eaque, asperiores quaerat in facilis soluta!</p>
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="#" role="button">Buy</a>
                            </div>
                        </div> 
                   
                        <div class="col card ml-1">
                            <img src="https://picsum.photos/200" class="d-block w-30 card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Produto</h5>
                                <p class="h6"><strong> R$ 250,OO</strong></p>
                                    <input data-role="rating" data-stars="5"
                                    data-star-color="cyan"
                                    data-stared-color="pink">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illum modi consectetur nam aliquam, aut distinctio quisquam similique ex voluptatibus suscipit optio vero, minima eaque, asperiores quaerat in facilis soluta!</p>
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="#" role="button">Buy</a>
                            </div>
                        </div>

                        <div class="col card ml-1">
                            <img src="https://picsum.photos/200" class="d-block w-30 card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Produto</h5>
                                <p class="h6"><strong> R$ 250,OO</strong></p>
                                    <input data-role="rating" data-stars="5"
                                    data-star-color="cyan"
                                    data-stared-color="pink">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illum modi consectetur nam aliquam, aut distinctio quisquam similique ex voluptatibus suscipit optio vero, minima eaque, asperiores quaerat in facilis soluta!</p>
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="#" role="button">Buy</a>
                            </div>
                        </div>

                        <div class="col card ml-1">
                            <img src="https://picsum.photos/200" class="d-block w-30 card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Produto</h5>
                                <p class="h6"><strong> R$ 250,OO</strong></p>
                                    <input data-role="rating" data-stars="5"
                                    data-star-color="cyan"
                                    data-stared-color="pink">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illum modi consectetur nam aliquam, aut distinctio quisquam similique ex voluptatibus suscipit optio vero, minima eaque, asperiores quaerat in facilis soluta!</p>
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="#" role="button">Buy</a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <a class="carousel-control-prev carousel-arrow " style="width: 5%;" href="#carouselExampleControls"  role="button" data-slide="prev">
                
                <ion-icon class=" " size="large"  aria-hidden="true" name="caret-back-outline"></ion-icon>
                <span class="sr-only  " >Previous</span>
            </a>
            <a class="carousel-control-next carousel-arrow " style="width: 5%;" href="#carouselExampleControls"  role="button" data-slide="next">
                <ion-icon class=" " size="large"  aria-hidden="true" name="caret-forward-outline"></ion-icon>
                <span class="sr-only  "  >Next</span>
            </a>
        </div>
</div>

@endsection