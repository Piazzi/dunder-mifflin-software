@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <h3 style="text-align: center">Visualizar categoria</h3>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('categorias.update', $categoria->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome</label>
                        <input name="nome" value="{{$categoria->nome}}" placeholder="Maecenas convallis nibh ullamcorper, sollicitudin dolor pulvinar, euismod erat" type="text" class="form-control"  aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Descrição</label>
                        <textarea name="descricao" rows="5" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas convallis nibh ullamcorper, sollicitudin dolor pulvinar, euismod erat. Aliquam mi diam, facilisis eget molestie ac, dignissim eu justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse a orci porttitor, fermentum eros aliquam, volutpat massa." type="text" class="form-control" >{{$categoria->descricao}}</textarea>
                    </div>
                    <div class="d-grid gap-2 col-2 mx-auto">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
