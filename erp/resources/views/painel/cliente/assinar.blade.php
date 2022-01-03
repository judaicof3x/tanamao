@extends('painel.layouts.main')

@section('breadcrumb')
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a class="text-muted text-hover-primary">Planos</a>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-300 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a class="text-muted text-hover-primary">Ver planos</a>
    </li>
    <!--end::Item-->
@endsection

@section('content')
    <form action="{{ route('painel.cliente.planos.pagar', $plan->slug) }}" method="post">
        @csrf
        <button type="submit">Pagar</button>
    </form>
@endsection