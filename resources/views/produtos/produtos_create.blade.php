@extends('layouts.app')

@section('content')
<div class="container">
    <h3 style="text-align: center">Criar produto</h3>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('produtos.store')}}" method="post">
                @csrf
                @method('post')
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nome</label>
                  <input placeholder="Maecenas convallis nibh ullamcorper, sollicitudin dolor pulvinar, euismod erat" name="nome" type="text" class="form-control"  aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Descrição</label>
                  <textarea rows="5" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas convallis nibh ullamcorper, sollicitudin dolor pulvinar, euismod erat. Aliquam mi diam, facilisis eget molestie ac, dignissim eu justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse a orci porttitor, fermentum eros aliquam, volutpat massa." name="descricao" type="text" class="form-control" ></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Valor</label>
                    <input placeholder="Maecenas convallis nibh ullamcorper, sollicitudin dolor pulvinar, euismod erat" name="valor" type="text" class="form-control"  aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Dimensão</label>
                    <input placeholder="Maecenas convallis nibh ullamcorper, sollicitudin dolor pulvinar, euismod erat" name="dimensao" type="text" class="form-control"  aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                <select name="categoria_id" class="form-select" aria-label="size 3 select example">
                    <option disabled selected>Selecione uma categoria</option>
                    @foreach ($categorias as  $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                    @endforeach
                  </select>
                </div>
                <input hidden name="user_id" value="{{Auth::user()->id}}">
                <div class="d-grid gap-2 col-2 mx-auto">

                <button type="submit" class="btn btn-primary">Criar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
