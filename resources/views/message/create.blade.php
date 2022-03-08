@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Mensagens</h1>
        <div class="table-responsive">
            <form method="post" action="{{ route('message.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="text">Mensagem</label>
                    <input type="text" name="text" class="form-control" placeholder="Texto">
                </div>
                <button class="btn btn-info">Enviar</button>
            </form>
        </div>
    </div>
@endsection
