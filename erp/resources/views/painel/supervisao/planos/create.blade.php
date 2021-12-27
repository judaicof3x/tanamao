@extends('painel.layouts.main')

@section('content')
    <form action="{{ route('painel.planos.store') }}" method="post">
        @csrf
        <button type="submit">Enviar</button>
    </form>
@endsection