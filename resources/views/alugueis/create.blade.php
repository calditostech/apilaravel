@extends('alugueis.layout.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar Aluguel</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('alugueis.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('alugueis.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Valor Aluguel:</strong>
                <input type="text" name="valoraluguel" class="form-control" placeholder="Valor do Alguel">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agua:</strong>
                <input type="text" name="agua" class="form-control" placeholder="Agua">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Luz:</strong>
                <input type="text" name="luz" class="form-control" placeholder="Luz">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Internet:</strong>
                <input type="text" name="internet" class="form-control" placeholder="Internet">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </div>
   
</form>
@endsection