@extends('layouts.app')

@section('content')
<div class="container">
    <h3 style="text-align: center">Editar produto</h3>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('produtos.update', $produto->id)}}" method="post">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                    <input name="nome"  value="{{$produto->nome}}" placeholder="Maecenas convallis nibh ullamcorper, sollicitudin dolor pulvinar, euismod erat" type="text" class="form-control"  aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Descrição</label>
                    <textarea name="descricao" rows="5" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas convallis nibh ullamcorper, sollicitudin dolor pulvinar, euismod erat. Aliquam mi diam, facilisis eget molestie ac, dignissim eu justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse a orci porttitor, fermentum eros aliquam, volutpat massa." name="descricao" type="text" class="form-control" >{{$produto->descricao}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Valor</label>
                    <input name="valor"  value="{{$produto->valor}}" type="text" class="form-control"  aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Dimensão</label>
                    <input name="dimensao" value="{{$produto->dimensao}}" type="text" class="form-control"  aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <select name="categoria_id" class="form-select" aria-label="size 3 select example">
                        @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}" @if($categoria->id == $produto->categoria->id) selected @endif >{{$categoria->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-grid gap-2 col-2 mx-auto">
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
