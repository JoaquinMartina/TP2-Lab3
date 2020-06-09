@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        {{__('Productos')}}
                        <div>
                            <a href="{{route('productForm')}}" class="btn btn-primary float-md-right">{{__('Nuevo')}}</a>
                        </div>
                    </div>

                    <div class="card-body justify-content-center">
                        @if (isset($products) && !$products->isEmpty())
                            <div class="card-body">

                                <table class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>{{__('Id')}}</th>
                                        <th>{{__('Nombre')}}</th>
                                        <th>{{__('Descripcion')}}</th>
                                        <th>{{__('Precio')}}</th>
                                        <th>{{__('Stock')}}</th>
                                    </tr>
                                    </thead>
                                    @foreach($products as $itemProduct)
                                        <tbody>
                                        <tr>
                                            <th scope="row">{{$itemProduct->id}}</th>
                                            <td>{{$itemProduct->getName()}}</td>
                                            <td>{{$itemProduct->getDescription()}}</td>
                                            <td>{{$itemProduct->getPrice()}}</td>
                                            <td>{{$itemProduct->getStock()}}</td>
                                        </tr>
                                        </tbody>
                                    @endforeach
                                </table>

                            </div>
                        @else
                            <div class="card-body justify-content-center">
                                <h2 class="text-sm-center">No existen productos cargados</h2>
                            </div>
                        @endif

                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

