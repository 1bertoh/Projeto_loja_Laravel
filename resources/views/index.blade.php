@extends('layouts.main')
@section('title','Shopping')
@section('content')

    <div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                
                <div class="carousel-item ">
                    <div class="row">
                        <div class="col card ml-1">
                            <img src="https://picsum.photos/200" class="d-block w-30 card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Produto1</h5>
                                <p class="h6"><strong> R$ 250,OO</strong></p>
                                    <input data-role="rating" data-stars="5"
                                    data-star-color="cyan"
                                    data-stared-color="pink">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illum modi consectetur nam aliquam, aut distinctio quisquam similique ex voluptatibus suscipit optio vero, minima eaque, asperiores quaerat in facilis soluta!</p>
                                <a name="" id="" class="btn btn-rounded text-white d-block" href="{{ route('shopping.buy') }}" role="button">Buy</a>
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
                                <a name="" id="" class="btn btn-rounded text-white d-block" href="{{ route('shopping.buy') }}" role="button">Buy</a>
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
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="{{ route('shopping.buy') }}" role="button">Buy</a>
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
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="{{ route('shopping.buy') }}" role="button">Buy</a>
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
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="{{ route('shopping.buy') }}" role="button">Buy</a>
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
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="{{ route('shopping.buy') }}" role="button">Buy</a>
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
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="{{ route('shopping.buy') }}" role="button">Buy</a>
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
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="{{ route('shopping.buy') }}" role="button">Buy</a>
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
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="{{ route('shopping.buy') }}" role="button">Buy</a>
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
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="{{ route('shopping.buy') }}" role="button">Buy</a>
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
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="{{ route('shopping.buy') }}" role="button">Buy</a>
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
                                <a name="" id="" class="btn btn-rounded text-white  d-block" href="{{ route('shopping.buy') }}" role="button">Buy</a>
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