@extends('auth.main')

@section('content')
<form class="form" novalidate="novalidate" method="post" action="{{ route('login') }}">
    @csrf
    <!--begin::Heading-->
    <div class="text-center mb-10">
        <!--begin::Title-->
        <h1 class="text-dark mb-3">Acessar minha conta</h1>
        <!--end::Title-->
        <!--begin::Link-->
        <div class="text-gray-400 fw-bold fs-4">Novo por aqui ? Faça o seu 
        <a href="{{ route('register') }}" class="link-primary fw-bolder">cadastro</a>.</div>
        <!--end::Link-->
    </div>
    <!--begin::Heading-->
    @if($errors->all())
        @foreach ($errors->all() as $e)
            <div class="alert alert-danger">
                <small class="">{{ $e }}</small>
            </div>
        @endforeach
    @endif
    <!--begin::Input group-->
    <div class="fv-row mb-10">
        <label class="form-label fw-bolder text-dark fs-6">Email</label>
        <input class="form-control form-control-solid" type="email" placeholder="" name="email" autocomplete="off" />
    </div>
    <!--end::Input group-->
    <!--begin::Row-->
    <div class="fv-row mb-10">
        <label class="form-label fw-bolder text-dark fs-6">Senha</label>
        <input class="form-control form-control-solid" type="password" placeholder="" name="password" autocomplete="off" />
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="fv-row mb-10">
        <label class="form-check form-check-custom form-check-solid form-check-inline mb-5">
            <input class="form-check-input" type="checkbox" name="toc" value="1" />
            <span class="form-check-label fw-bold text-gray-700">Manter-me conectado.</span>
        </label>
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="text-center pb-lg-0 pb-8">
        <button type="submit" id="kt_free_trial_submit" class="btn btn-lg btn-primary fw-bolder col-10">
            <span class="indicator-label">Acessar</span>
            <span class="indicator-progress">Carregando... 
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
    </div>
    <!--end::Row-->
</form>
@endsection