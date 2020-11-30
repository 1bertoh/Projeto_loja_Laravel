@extends('layouts.main')
@section('title', 'shopping')
@section('content')

<div>
    <div class="card" >
        <div class="card-body">
            <div class="row">
                <h3 class="col-4 card-title">Carrinho 
                    <ion-icon style="font-size: 50px; color:purple" name="cart-outline"></ion-icon>
                </h3>
            
                <div class="dropdown col-8 d-flex justify-content-end">
                    <button class="btn btn-secondary  dropdown-toggle" style="height:2em" width="1em" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">
                            <ion-icon class="pr-2" name="trash-outline"></ion-icon>Excluir
                        </a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            
                <form action="" style="border: 1px solid red">
                    <table class="table  table-striped" style="border: 1px solid pink; width: 100%">
                        <thead class="thead-dark">
                            <tr class="row">
                                <th class=" col-1"><input class="form-check-input  ml-5"  type="checkbox" value="" id="defaultCheck1"></th>
                                <th class="col-8">Produto</th>
                                <th class="col-3">Preço</th>
                            </tr>
                        </thead>
                        
                        <tbody >
                            <tr class="row" >
                                <td scope="row" class=" col-1">
                                    
                                    <input class="form-check-input ml-5" type="checkbox" value="" id="defaultCheck1">
                                </td>
                                <td class="pl-5 col-8">
                                    <p>
                                        <img src="https://picsum.photos/200" width="50em" class=" mr-3 " alt="...">
                                        <span class='h6'>Produto</span>
                                        
                                    </p>
                                    <p class="text-truncate col-8" style="width:250px">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est officiis blanditiis libero quibusdam vero. Obcaecati ad quia eos facere delectus recusandae ut. Facilis commodi amet accusamus quod nihil, cum veritatis?
                                    </p>
 
                                </td>
                                <td class="col-3">
                                    R$255,99
                                </td>
                            </tr>

                            <tr class="row">
                                <td scope="row" class="col-1">
                                    
                                    <input class="form-check-input ml-5" type="checkbox" value="" id="defaultCheck1">
                                </td>
                                <td class="col-8">
                                <p>
                                    <img src="https://picsum.photos/200" width="50em" class=" mr-3   mx-3" alt="...">
                                   <span class='h6'>Produto</span>
                                   
                                </p>
                                <p class="text-truncate" style="width:250px">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est officiis blanditiis libero quibusdam vero. Obcaecati ad quia eos facere delectus recusandae ut. Facilis commodi amet accusamus quod nihil, cum veritatis?
                                </p>
                                
                                </td>
                                <td class="col-3">
                                    R$255,99
                                </td>
                            </tr>
                            <tr class="row">
                                <td scope="row" class="col-1">
                                    
                                    <input class="form-check-input ml-5" type="checkbox" value="" id="defaultCheck1">
                                </td>
                                <td class="col-8">
                                <p>
                                    <img src="https://picsum.photos/200" width="50em" class=" mr-3   mx-3" alt="...">
                                   <span class='h6'>Produto</span>
                                   
                                </p>
                                <p class="text-truncate" style="width:250px">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est officiis blanditiis libero quibusdam vero. Obcaecati ad quia eos facere delectus recusandae ut. Facilis commodi amet accusamus quod nihil, cum veritatis?
                                </p>
                                
                                </td>
                                <td class="col-3">
                                    R$255,99
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            
        </div>
    </div>
</div>

@endsection