@extends('alugueis.layout.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Relatorio Mensal</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('alugueis.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Valor Aluguel:</strong>
                {{ $aluguel->valoraluguel }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agua:</strong>
                {{ $aluguel->agua }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Luz:</strong>
                {{ $aluguel->luz }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Internet:</strong>
                {{ $aluguel->internet }}
            </div>
        </div>
    </div>
@endsection