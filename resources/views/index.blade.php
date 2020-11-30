@extends('layouts.main')
@section('title','Shopping')
@section('content')

    <div>
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