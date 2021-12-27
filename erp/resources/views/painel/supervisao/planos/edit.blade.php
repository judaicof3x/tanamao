@extends('painel.layouts.main')

@section('content')
    
    {{ $plan->name }}

    <form action="{{ route('painel.planos.update', 747) }}" method="post">
        @csrf
        @method('put')
        <button type="submit">Atualizar</button>
    </form>
    <form action="{{ route('painel.planos.destroy', 747) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Remover</button>
    </form>
@endsection