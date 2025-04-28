@extends('adminlte::page')

@section('title', 'Cadastro de Autores')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Autores</h3>
        </div>

        @if (isset($edit->id))
            <form method="POST" action="{{ route('autor.update', ['autor' => $edit->id]) }}">
                @csrf
                @method('PUT')
        @else
            <form method="POST" action="{{ route('autor.store') }}">
                @csrf
        @endif

        <div class="card-body">
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" placeholder=""
                    value="{{ $edit->autor ?? old('autor') }}">
                @if ($errors->has('autor'))
                    <span style="color: red;">{{ $errors->first('autor') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="nacionalidade">Nacionalidade</label>
                <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder=""
                    value="{{ $edit->nacionalidade ?? old('nacionalidade') }}">
                @if ($errors->has('nacionalidade'))
                    <span style="color: red;">{{ $errors->first('nacionalidade') }}</span>
                @endif
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Registrar</button>
            <a href="{{ route('autor.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
        </form>
    </div>
@stop
