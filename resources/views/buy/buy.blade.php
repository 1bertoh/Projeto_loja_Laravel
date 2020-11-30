@extends('layouts.main')
@section('title', 'Shopping')
@section('content')

<div class=" card ">
    <div class="justify-content-center row">
        <img src="/Image/products/{{$product->image}}"
        class="mt-5 w-50 mx-auto"
        alt="produto">
    </div>                          
    <div class="card-body card-buy">
        <h4 class="card-title">{{$product->name}}</h5>
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
            role="button">Adicionar no Carrinho 
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
                    <p>
                        {{$product['description']}}
                    </p>
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
                    <p>
                        {{$product->especification}}
                    </p>
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

@component('layouts.carousel-items')
    
    @slot('nome1')
        {{$products[0]->name}}
    @endslot
    @slot('preco1')
        {{$products[0]->price}}
    @endslot
    @slot('id1')
        {{$products[0]->id}}
    @endslot
    @slot('image1')
        {{$products[0]->image}}
    @endslot

    
    @slot('nome2')
        {{$products[1]->name}}
    @endslot
    @slot('preco2')
        {{$products[1]->price}}
    @endslot
    @slot('id2')
        {{$products[1]->id}}
    @endslot
    @slot('image2')
        {{$products[1]->image}}
    @endslot

    @slot('nome3')
        {{$products[2]->name}}
    @endslot
    @slot('preco3')
        {{$products[2]->price}}
    @endslot
    @slot('id3')
        {{$products[2]->id}}
    @endslot
    @slot('image3')
        {{$products[2]->image}}
    @endslot

    @slot('nome4')
        {{$products[3]->name}}
    @endslot
    @slot('preco4')
        {{$products[3]->price}}
    @endslot
    @slot('id4')
        {{$products[3]->id}}
    @endslot
    @slot('image4')
        {{$products[3]->image}}
    @endslot

    @slot('nome5')
        {{$products[4]->name}}
    @endslot
    @slot('preco5')
        {{$products[4]->price}}
    @endslot
    @slot('id5')
        {{$products[4]->id}}
    @endslot
    @slot('image5')
        {{$products[4]->image}}
    @endslot

    @slot('nome6')
        {{$products[5]->name}}
    @endslot
    @slot('preco6')
        {{$products[5]->price}}
    @endslot
    @slot('id6')
        {{$products[5]->id}}
    @endslot
    @slot('image6')
        {{$products[5]->image}}
    @endslot

    @slot('nome7')
        {{$products[6]->name}}
    @endslot
    @slot('preco7')
        {{$products[6]->price}}
    @endslot
    @slot('id7')
        {{$products[6]->id}}
    @endslot
    @slot('image7')
        {{$products[6]->image}}
    @endslot

    @slot('nome8')
        {{$products[7]->name}}
    @endslot
    @slot('preco8')
        {{$products[7]->price}}
    @endslot
    @slot('id8')
        {{$products[7]->id}}
    @endslot
    @slot('image8')
        {{$products[7]->image}}
    @endslot

    @slot('nome9')
        {{$products[8]->name}}
    @endslot
    @slot('preco9')
        {{$products[8]->price}}
    @endslot
    @slot('id9')
        {{$products[8]->id}}
    @endslot
    @slot('image9')
        {{$products[8]->image}}
    @endslot

    @slot('nome10')
        {{$products[9]->name}}
    @endslot
    @slot('preco10')
        {{$products[9]->price}}
    @endslot
    @slot('id10')
        {{$products[9]->id}}
    @endslot
    @slot('image10')
        {{$products[9]->image}}
    @endslot

    @slot('nome11')
        {{$products[10]->name}}
    @endslot
    @slot('preco11')
        {{$products[10]->price}}
    @endslot
    @slot('id11')
        {{$products[10]->id}}
    @endslot
    @slot('image11')
        {{$products[10]->image}}
    @endslot

    @slot('nome12')
        {{$products[11]->name}}
    @endslot
    @slot('preco12')
        {{$products[11]->price}}
    @endslot
    @slot('id12')
        {{$products[11]->id}}
    @endslot
    @slot('image12')
        {{$products[11]->image}}
    @endslot
@endcomponent

</div>

@endsection