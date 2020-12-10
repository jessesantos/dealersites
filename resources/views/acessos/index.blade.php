@extends('acessos.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Dealer Sites</h2>
            </div>
            <div class="pull-right">
                Pesquisa:
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Número de logins</th>
            <th>Situação</th>
        </tr>
        @foreach ($acessos as $acesso)
            <tr>
                <td>{{ $acesso->name }}</td>
                <td>{{ $acesso->email }}</td>
                <td>{{ $acesso->nacesso }}</td>
                <td>
                    @if ($acesso->active === 1)
                        Ativo
                    @else
                        Inativo
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
    {!! $acessos->links() !!}

@endsection