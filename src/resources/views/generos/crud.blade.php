@extends('adminlte::page')

@section('title', 'Cadastro de Editoras')

@section('content_header')


@stop

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Editoras</h3>
        </div>
        <div class="card-body"s>
            <div class=" form-group">

                @if (isset($gen->id))
                    <form method="post" action="{{ route('genero.update', ['genero' => $gen->id]) }}">
                        @csrf
                        @method('PUT')
                    @else
                        <form method="post" action="{{ route('genero.store') }}">
                            @csrf
                @endif

                <label for="genero">Genero</label>
                <input type="text" class="form-control" id="genero" name="genero" placeholder=""
                    value="{{ $gen->genero ?? old('genero') }}">
                @if ($errors->has('genero'))
                    <span style="color: red;">
                        {{ $errors->first('genero') }}
                    </span>
                @endif
                
                <br>
                
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Registrar</button>
            <a href="{{ route('genero.index') }}" type="button" class="btn btn-secondary">Voltar</a>
        </div>
        </form>

    </div>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop

@section('js')
    <script src="{{ asset('vendor/jquery/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.maskMoney.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        f

        $(document).ready(function() {

            

        });
    </script>
@stop