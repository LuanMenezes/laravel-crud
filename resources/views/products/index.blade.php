@extends('layouts.app')

@section('content')
    <div class="content">
        @if(count($message))
            <h4>{{$message}}</h4>
        @endif
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @forelse($products as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->description}}</td>
                    <td>{{$p->quantity}}</td>
                    <td>R$ {{$p->price}}</td>
                    <td>
                        <a class="btn btn-default" href="{{ URL::to('products/' . $p->id . '/edit') }}" title="Editar">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-default" href="{{ URL::to('products/' . $p->id . '/delete') }}" title="Excluir">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>
                        Nenhum produto cadastrado
                    </td>
                </tr>
            @endforelse

            </tbody>
        </table>

        <div class="row">
            <div class="col">
                <a class="btn btn-default" href="{{ URL::to('products/create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Novo</a>
            </div>
        </div>
    </div>
@endsection

