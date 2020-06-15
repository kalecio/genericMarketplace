@extends('layouts.app')
<!-- informando o nome do layout e englobando o nosso template dentro da section -->
@section('content')
    <h1>Editar Loja</h1>
    <!-- passando o action do form de forma dinâmica pegando o apelido da rota. O segundo parâmetro do route é aonde é feita a passagem de variáveis -->
    <form action="{{route('admin.stores.update', ['store' => $store->id])}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label for="">Nome Loja</label>
            <input type="text" name="name" class="form-control" value="{{$store->name}}">
        </div>

        <div class="form-group">
            <label for="">Descrição</label>
            <input type="text" name="description" class="form-control" value="{{$store->description}}">
        </div>

        <div class="form-group">
            <label for="">Telefone</label>
            <input type="text" name="phone" class="form-control" value="{{$store->phone}}">
        </div>

        <div class="form-group">
            <label for="">Celular/Whatsapp</label>
            <input type="text" name="mobile_phone" class="form-control" value="{{$store->mobile_phone}}">
        </div>

        <div class="form-group">
            <label for="">Slug</label>
            <input type="text" name="slug" class="form-control" value="{{$store->slug}}">
        </div>

        <div>
            <button type="submit" class="btn btn-lg btn-success">Atualizar</button>
        </div>
    </form>
@endsection