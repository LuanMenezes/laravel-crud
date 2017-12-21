@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cadastro de Conta Entrada</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/expense/input') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nome:</label>

                                <div class="col-md-6">
                                    <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Descrição:</label>

                                <div class="col-md-6">
                                    <textarea id="description" class="form-control" name="description" value="{{ old('description') }}" required placeholder="Descrição"></textarea>
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('dtpayment') ? ' has-error' : '' }}">
                                <label for="dtpayment" class="col-md-4 control-label">Data de Pagamento:</label>

                                <div class="col-md-6">
                                    <input id="dtpayment" type="date" class="form-control" name="dtpayment" value="{{ old('dtpayment') }}" required>
                                    @if ($errors->has('dtpayment'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('dtpayment') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('dtexpiration') ? ' has-error' : '' }}">
                                <label for="dtexpiration" class="col-md-4 control-label">Data de Vencimento:</label>

                                <div class="col-md-6">
                                    <input id="dtexpiration" type="date" class="form-control" name="dtexpiration" value="{{ old('dtexpiration') }}" required>
                                    @if ($errors->has('dtexpiration'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('dtexpiration') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="price" class="col-md-4 control-label">Valor:</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}" required>
                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                                <label for="category" class="col-md-4 control-label">Tipo de Entrada:</label>

                                <div class="col-md-6">
                                    <select id="category" type="text" class="form-control" name="category" value="{{ old('category') }}" required>
                                        <option>Dizimo</option>
                                        <option>Oferta</option>
                                        <option>Culto</option>
                                        <option>Eventos</option>
                                        <option>Outros</option>
                                    </select>
                                    @if ($errors->has('category'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Cadastrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection