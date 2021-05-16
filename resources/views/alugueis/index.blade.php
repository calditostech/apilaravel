@extends('alugueis.layout.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Controle Aluguel - Laravel 6</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('alugueis.create') }}"> Adicionar Aluguel do mês</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Valor Aluguel</th>
            <th>Agua</th>
            <th>Luz</th>
            <th>Internet</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($alugueis as $aluguel)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $aluguel->valoraluguel }}</td>
            <td>{{ $aluguel->agua }}</td>
            <td>{{ $aluguel->luz }}</td>
            <td>{{ $aluguel->internet }}</td>
            <td>
                <form action="{{ route('alugueis.destroy',$aluguel->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('alugueis.show',$aluguel->id) }}">Arquivo</a>
    
                    <a class="btn btn-primary" href="{{ route('alugueis.edit',$aluguel->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $alugueis->links() !!}
      
@endsection