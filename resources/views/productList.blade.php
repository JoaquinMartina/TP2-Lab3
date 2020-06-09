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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

