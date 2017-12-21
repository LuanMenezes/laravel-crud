@extends('layouts.app')

@section('content')
    <div class="content">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>DT de Pagamento</th>
                <th>DT de Vencimento</th>
                <th>Valor</th>
                <th>Tipo de Entrada</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Teste 001</td>
                <td>12/12/2017</td>
                <td>12/12/2017</td>
                <td>R$ 100,00</td>
                <td>Dízimo</td>
                <td>
                    <button type="button" class="btn btn-default">Excluir</button>
                    <a class="btn btn-default" href="#">Editar</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection

