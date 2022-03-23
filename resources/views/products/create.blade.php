@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card mt-3">
                <div class="card-header">Nuevo producto</div>

                <div class="card-body">
                    <form method="post" action="{{route('products.store')}}">
                        @csrf
                        <div class="col-md-12">
                            <label for="name">
                                Nombre del producto
                            </label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}" />
                            @if ($errors->has('name'))
                            <div class="text-danger">
                                {{$errors->first('name')}}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="price">
                                Precio
                            </label>
                            <input name="price" type="text" class="form-control @error('price') is-invalid @enderror" id="price" value="{{old('price')}}" />
                            @if ($errors->has('price'))
                            <div class="text-danger">
                                {{$errors->first('price')}}
                            </div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
