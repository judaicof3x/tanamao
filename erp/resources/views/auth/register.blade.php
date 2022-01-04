@extends('auth.main')

@section('content')
<form class="form" novalidate="novalidate" method="post" action="{{ route('register') }}">
    @csrf
    <!--begin::Heading-->
    <div class="text-center mb-10">
        <!--begin::Title-->
        <h1 class="text-dark mb-3">Cadastrar minha conta</h1>
        <!--end::Title-->
        <!--begin::Link-->
        <div class="text-gray-400 fw-bold fs-4">Já é um usuário ? Faça o seu 
        <a href="{{ route('login') }}" class="link-primary fw-bolder">login</a>.</div>
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
    <div class="mb-7 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
        <!--begin::Wrapper-->
        <div class="mb-1">
            <!--begin::Label-->
            <label class="form-label fw-bolder text-dark fs-6">Senha</label>
            <!--end::Label-->
            <!--begin::Input wrapper-->
            <div class="position-relative mb-3">
                <input class="form-control form-control-solid" type="password" placeholder="" name="password" autocomplete="off">
                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                    <i class="bi bi-eye-slash fs-2"></i>
                    <i class="bi bi-eye fs-2 d-none"></i>
                </span>
            </div>
            <!--end::Input wrapper-->
            <!--begin::Meter-->
            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
            </div>
            <!--end::Meter-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Hint-->
        <div class="text-muted">Use 8 ou mais caracteres com um mix de letras, números &amp; simbolos.</div>
        <!--end::Hint-->
    <div class="fv-plugins-message-container invalid-feedback"></div></div>
    <!--begin::Row-->
    <div class="fv-row mb-10">
        <label class="form-label fw-bolder text-dark fs-6">Confirmar a sua senha</label>
        <input class="form-control form-control-solid" type="password" placeholder="" name="password_confirmation" autocomplete="off" />
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="fv-row mb-10">
        <label class="form-check form-check-custom form-check-solid form-check-inline mb-5">
            <input class="form-check-input" type="checkbox" name="toc" value="1" />
            <span class="form-check-label fw-bold text-gray-700">Eu aceito os 
            <a href="#">Termos e condições</a>.</span>
        </label>
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="text-center pb-lg-0 pb-8">
        <button type="submit" id="kt_free_trial_submit" class="btn btn-lg btn-primary fw-bolder col-10">
            <span class="indicator-label">Cadastrar</span>
            <span class="indicator-progress">Carregando... 
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
    </div>
    <!--end::Row-->
</form>
@endsection