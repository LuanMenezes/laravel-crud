@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cadastro de Igreja</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/church') }}">
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

                            <fieldset>
                                <legend>Contatos</legend>
                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <label for="phone" class="col-md-4 control-label">Telefone:</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="tel" class="form-control" name="phone" value="{{ old('phone') }}" required>
                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('cell') ? ' has-error' : '' }}">
                                    <label for="cell" class="col-md-4 control-label">Celular:</label>

                                    <div class="col-md-6">
                                        <input id="cell" type="tel" class="form-control" name="cell" value="{{ old('cell') }}" required>
                                        @if ($errors->has('cell'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('cell') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Endereço</legend>
                                <div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
                                    <label for="place" class="col-md-4 control-label">Logradouro:</label>

                                    <div class="col-md-6">
                                        <input id="place" type="text" class="form-control" name="place" value="{{ old('place') }}" required>
                                        @if ($errors->has('place'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('place') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                                    <label for="number" class="col-md-4 control-label">Número:</label>

                                    <div class="col-md-6">
                                        <input id="number" type="text" class="form-control" name="number" value="{{ old('number') }}" required>
                                        @if ($errors->has('number'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('number') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('neighborhood') ? ' has-error' : '' }}">
                                    <label for="neighborhood" class="col-md-4 control-label">Bairro:</label>

                                    <div class="col-md-6">
                                        <input id="neighborhood" type="text" class="form-control" name="neighborhood" value="{{ old('neighborhood') }}" required>
                                        @if ($errors->has('neighborhood'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('neighborhood') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                    <label for="city" class="col-md-4 control-label">Cidade:</label>

                                    <div class="col-md-6">
                                        <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required>
                                        @if ($errors->has('city'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                    <label for="state" class="col-md-4 control-label">Estado:</label>

                                    <div class="col-md-6">
                                        <select id="state" type="text" class="form-control" name="state" value="{{ old('state') }}" required>
                                            <option>Selecione um estado</option>
                                            <option>Estado 001</option>
                                            <option>Estado 002</option>
                                            <option>Estado 003</option>
                                            <option>Estado 004</option>
                                        </select>
                                        @if ($errors->has('state'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="type" class="col-md-4 control-label">Tipo de Igreja:</label>

                                <div class="col-md-6">
                                    <select id="type" type="text" class="form-control" name="type" value="{{ old('type') }}" required>
                                        <option>Selecione um tipo</option>
                                        <option>Matriz</option>
                                        <option>Filia</option>
                                    </select>
                                    @if ($errors->has('type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('pastor') ? ' has-error' : '' }}">
                                <label for="pastor" class="col-md-4 control-label">Pastor Responsável:</label>

                                <div class="col-md-6">
                                    <select id="pastor" type="text" class="form-control" name="pastor" value="{{ old('pastor') }}" required>
                                        <option>Selecione um pastor</option>
                                        <option>Pastor 001</option>
                                        <option>Pastor 002</option>
                                        <option>Pastor 003</option>
                                    </select>
                                    @if ($errors->has('pastor'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('pastor') }}</strong>
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