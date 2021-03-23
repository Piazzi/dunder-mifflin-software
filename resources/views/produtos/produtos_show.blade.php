@extends('layouts.app')

@section('content')
<div class="container">
    <h3 style="text-align: center">Visualizar produto</h3>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input disabled value="{{$produto->nome}}" placeholder="Maecenas convallis nibh ullamcorper, sollicitudin dolor pulvinar, euismod erat" type="text" class="form-control"  aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Descrição</label>
                <textarea disabled rows="5" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas convallis nibh ullamcorper, sollicitudin dolor pulvinar, euismod erat. Aliquam mi diam, facilisis eget molestie ac, dignissim eu justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse a orci porttitor, fermentum eros aliquam, volutpat massa." name="descricao" type="text" class="form-control" >{{$produto->descricao}}</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Valor</label>
                <input disabled value="{{$produto->valor . 'R$'}}" type="text" class="form-control"  aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Dimensão</label>
                <input disabled value="{{$produto->dimensao}}" type="text" class="form-control"  aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="size 3 select example">
                    <option disabled selected >{{$produto->categoria->nome}}</option>
                </select>
            </div>
            <div class="d-grid gap-2 col-2 mx-auto">
                <a href="{{route('produtos.index')}}">
                    <button type="submit" class="btn btn-primary">Voltar</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
