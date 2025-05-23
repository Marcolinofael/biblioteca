@extends('adminlte::page')

@section('title', 'Cadastro de Clientes')

@section('content_header')
<h1>Clientes</h1>
@stop

@section('plugins.Datatables', true)

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Lista de Clientes</h3>
    </div>

    <div class="card-body">
        <div>
            <a href="{{ route('cliente.create') }}" type="button" class="btn btn-primary" style="width:80px;">Novo</a>
        </div>
        <br>
        <table class="table table-bordered table-striped dataTable dtr-inline" id="cliente-table" style="font-size: 15px;">
            <thead>
                <tr>
                    <th style="width: 5%">Id</th>
                    <th style="width: 30%">Nome</th>
                    <th style="width: 10%">CPF</th>
                    <th style="width: 10%">Celular</th>
                    <th style="width: 10%">CEP</th>
                    <th style="width: 10%">Logradouro</th>
                    <th style="width: 10%">Número</th>
                    <th style="width: 10%">Complemento</th>
                    <th style="width: 10%">Bairro</th>
                    <th style="width: 10%">Cidade</th>
                    <th style="width: 10">UF</th>                     
                    <th style="width: 10%">Ações</th>
                </tr>
            </thead>
        </table>
    </div>

</div>
@stop

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">
@stop

@section('js')

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {

        $('#cliente-table').DataTable({
            language: {
                "url": "{{ asset('js/pt-br.json') }}"
            },
            processing: true,
            serverSide: true,
            ajax: "{{ route('cliente.index') }}",
            columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'nome',
                name: 'nome'
            },
            {
                data: 'cpf',
                name: 'cpf'
            },              
            {
                data: 'celular',
                name: 'celular'
            },
            {
                data: 'cep',
                name: 'cep'
            },
            {
                data: 'logradouro',
                name: 'logradouro'
            },
            {
                data: 'numero',
                name: 'numero'
            },
            {
                data: 'complemento',
                name: 'complemento'
            },
            {
                data: 'bairro',
                name: 'bairro'
            },
            {
                data: 'cidade',
                name: 'cidade'
            },
            {
                data: 'uf',
                name: 'uf'
            },
            
            { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
</script>
@stop