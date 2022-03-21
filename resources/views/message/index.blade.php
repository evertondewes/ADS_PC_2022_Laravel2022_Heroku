@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Mensagens</h1>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Mensagem</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                    <tr>
                        <th>{{ $message->id }}</th>
                        <td>{{ $message->text }}</td>
                        <td>
                            <form
                            action="{{ route('message.edit', $message->id) }}"
                            method="POST" style="display: inline">
                                {{ csrf_field() }}
                                <input type="hidden"
                                       name="_method">
                                <button class="btn btn-info">
                                    Editar
                                </button>
                                </form>
                            <form
                                action="{{ route('message.destroy', $message->id) }}"
                                method="POST" style="display: inline">
                                {{ csrf_field() }}
                                <input type="hidden"
                                       name="_method" value="DELETE">
                                <button class="btn btn-danger"
                                        onclick="return confirm('Deseja mesmo excluir?')">
                                    Apagar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

