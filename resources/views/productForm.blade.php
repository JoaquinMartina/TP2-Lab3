@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        {{__('Productos')}}

                        <div>
                            <a href="{{route('productList')}}" class="btn btn-primary float-md-right">{{__('Ver todos')}}</a>
                        </div>
                    </div>

                    <div class="card-body justify-content-center">

                        <form method="POST" action="{{route('sendProductForm')}}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Nombre')}}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{old('name')}}">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{__('Descripción')}}</label>
                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" name="description" value="{{old('description')}}">
                                    @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{__('Precio')}}</label>
                                <div class="col-md-6">
                                    <input id="price" type="number step=0.01" class="form-control" name="price" value="{{old('price')}}">
                                    @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="stock" class="col-md-4 col-form-label text-md-right">{{__('Stock')}}</label>
                                <div class="col-md-6">
                                    <input id="stock" type="number" class="form-control" name="stock" value="{{old('days')}}">
                                    @error('stock')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 offset-md-4 justify-content-around">
                                    <button type="submit" class="btn btn-primary">{{__('Guardar')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

