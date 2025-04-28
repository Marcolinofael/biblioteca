@extends('adminlte::page')

@section('title', 'Cadastro de Clientes')

@section('content_header')
@stop

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Cadastro de Clientes</h3>
    </div>

    <div class="card-body">
        <div class="form-group">

            @if (isset($cli->id))
                <form method="post" action="{{ route('cliente.update', ['cliente' => $cli->id]) }}">
                    @csrf
                    @method('PUT')
            @else
                <form method="post" action="{{ route('cliente.store') }}">
                    @csrf
            @endif

            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome"
                value="{{ $cli->nome ?? old('nome') }}">
            @error('cliente') <span style="color: red;">{{ $message }}</span> @enderror
            <br>

            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf"
                value="{{ $cli->cpf ?? old('cpf') }}">
            @error('cpf') <span style="color: red;">{{ $message }}</span> @enderror
            <br>

            <label for="celular">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular"
                value="{{ $cli->celular ?? old('celular') }}">
            @error('celular') <span style="color: red;">{{ $message }}</span> @enderror
            <br>

            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep"
                value="{{ $cli->cep ?? old('cep') }}">
            @error('cep') <span style="color: red;">{{ $message }}</span> @enderror
            <br>

            <label for="logradouro">Logradouro</label>
            <input type="text" class="form-control" id="logradouro" name="logradouro"
                value="{{ $cli->logradouro ?? old('logradouro') }}">
            @error('logradouro') <span style="color: red;">{{ $message }}</span> @enderror
            <br>

            <label for="numero">Número</label>
            <input type="text" class="form-control" id="numero" name="numero"
                value="{{ $cli->numero ?? old('numero') }}">
            @error('numero') <span style="color: red;">{{ $message }}</span> @enderror
            <br>

            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento"
                value="{{ $cli->complemento ?? old('complemento') }}">
            @error('complemento') <span style="color: red;">{{ $message }}</span> @enderror
            <br>

            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro"
                value="{{ $cli->bairro ?? old('bairro') }}">
            @error('bairro') <span style="color: red;">{{ $message }}</span> @enderror
            <br>

            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade"
                value="{{ $cli->cidade ?? old('cidade') }}">
            @error('cidade') <span style="color: red;">{{ $message }}</span> @enderror
            <br>

            <label for="uf">UF</label>
            <input type="text" class="form-control" id="uf" name="uf"
                value="{{ $cli->uf ?? old('uf') }}">
            @error('uf') <span style="color: red;">{{ $message }}</span> @enderror
            <br>

        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Registrar</button>
        <a href="{{ route('cliente.index') }}" type="button" class="btn btn-secondary">Voltar</a>
    </div>
    </form>
</div>
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {
    $('#cep').on('keyup', function () {
        let cep = $(this).val().replace(/\D/g, '');

        if (cep.length === 8) {
            $.getJSON(`https://viacep.com.br/ws/${cep}/json/`, function (data) {
                if (!data.erro) {
                    $('#logradouro').val(data.logradouro);
                    $('#bairro').val(data.bairro);
                    $('#cidade').val(data.localidade);
                    $('#uf').val(data.uf);
                } else {
                    alert('CEP não encontrado.');
                }
            }).fail(function () {
                alert('Erro ao buscar o CEP.');
            });
        }
    });
});
</script>
@stop