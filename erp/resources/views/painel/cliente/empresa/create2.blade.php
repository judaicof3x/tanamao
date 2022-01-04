<html lang="pt-BR">
<!--begin::Head-->

<head>
    <title>Tá na mão, Macaé</title>
    <link rel="shortcut icon" href="{{ URL::asset('media/logos/png/branco/branco1.png') }}" />
    @include('painel.layouts.__includes.meta')
    <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
        @yield('custom-css')
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
        @include('painel.layouts.__includes.css')
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url({{ URL::asset('media/illustrations/sketchy-1/14.png') }})">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Wrapper-->
                <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form method="post" action="{{ route('painel.customer.welcome.store') }}" class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework"
                        id="kt_sign_up_form">
                        @csrf
                        <!--begin::Heading-->
                        <div class="mb-10 text-center">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Bem-vindo, {{ auth()->user()->first_name }}</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">Vamos fazer o cadastro da sua empresa para que possamos prosseguir com os planos, ok?
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Separator-->
                        <div class="d-flex align-items-center mb-10">
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            <span class="fw-bold text-gray-400 fs-7 mx-2">EMPRESA</span>
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                        </div>
                        <!--end::Separator-->

                        @if($errors->all())
                            @foreach ($errors->all() as $e)
                                <div class="alert alert-danger">
                                    {{ $e }}
                                </div>
                            @endforeach
                        @endif

                        <!--begin::Input group-->
                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                            <!--begin::Col-->
                            <div class="">
                                <label class="form-label fw-bolder text-dark fs-6">Responsável pela empresa</label>
                                <input class="form-control form-control-lg form-control-solid" type="text"
                                    placeholder="" name="" autocomplete="off" value="{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}" disabled>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6">Segmento da empresa</label>
                            <select name="segment_id" class="form-select form-select-solid" data-control="select2" data-placeholder="Selecione uma opção" required="required">
                                <option></option>
                                @foreach ($segments as $s)
                                    <option value="{{ $s->id }}">{{ $s->id }} - {{ $s->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6">Outros segmentos</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Obrigatório se selecionar outros"
                                name="other_segments" value="{{ old('other_segments') }}" autocomplete="off">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6">Razão social</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Nome da sua empresa"
                                name="corporate_name" value="{{ old('corporate_name') }}" autocomplete="off" required="required">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6">CNPJ</label>
                            <input data-inputmask="'mask': '99.999.999/0001.99'" class="form-control form-control-lg form-control-solid" type="text" placeholder="Opcional"
                                name="cnpj" value="{{ old('cnpj') }}" autocomplete="off">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <div class="d-flex align-items-center my-10">
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            <span class="fw-bold text-gray-400 fs-7 mx-2">ENDEREÇO</span>
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                        </div>
                        <!--end::Separator-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6 required">Estado</label>
                            <select name="state" class="form-select form-select-solid" data-control="select2" data-placeholder="Selecione uma opção" required="required">
                                <option></option>
                                <option value="RJ" selected>RJ - Rio de Janeiro</option>
                            </select>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6 required">Cidade</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Macaé"
                                name="city" value="Macaé" autocomplete="off" required="required" disabled>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6 required">CEP</label>
                            <input data-inputmask="'mask': '99999-999'" class="form-control form-control-lg form-control-solid" type="text" placeholder="CEP"
                                name="zipcode" value="{{ old('zipcode') }}" autocomplete="off" required="required">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6 required">Endereço</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Rua"
                                name="street" value="{{ old('street') }}" autocomplete="off" required="required">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6 required">Número</label>
                            <input maxlength="5" class="form-control form-control-lg form-control-solid" type="number" placeholder="Número"
                                name="number" value="{{ old('number') }}" autocomplete="off" required="required">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6 required">Bairro</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Bairro"
                                name="neighborhood" value="{{ old('neighborhood') }}" autocomplete="off" required="required">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6">Complemento</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Opcional"
                                name="complement" value="{{ old('complement') }}" autocomplete="off">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <div class="d-flex align-items-center my-10">
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            <span class="fw-bold text-gray-400 fs-7 mx-2">ADICIONAIS</span>
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                        </div>
                        <!--end::Separator-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6">Informações relevantes</label>
                            <textarea class="form-control form-control-lg form-control-solid" type="text" placeholder="Insira informações relevantes apenas se achar necessário"
                                name="phone" value="{{ old('phone') }}" autocomplete="off"></textarea>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6">Email adicional</label>
                            <input class="form-control form-control-lg form-control-solid" type="email" placeholder="Opcional"
                                name="email" value="{{ old('email') }}" autocomplete="off">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6">Telefone adicional</label>
                            <input data-inputmask="'mask': '(99) 99999-9999'" class="form-control form-control-lg form-control-solid" type="text" placeholder="Opcional"
                                name="phone" value="{{ old('phone') }}" autocomplete="off">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10 fv-plugins-icon-container fv-plugins-bootstrap5-row-invalid">
                            <label class="form-check form-check-custom form-check-solid form-check-inline">
                                <input class="form-check-input" type="checkbox" name="toc" required="required">
                                <span class="form-check-label fw-bold text-gray-700 fs-6">Eu aceito os
                                    <a href="#" class="ms-1 link-primary">Termos e condições</a>.</span>
                            </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary col-12">
                                <span class="indicator-label">Cadastrar</span>
                                <span class="indicator-progress">Cadastrando...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                        <div></div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Authentication - Sign-up-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Modals-->
    @yield('modals')
    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>var hostUrl = "/";</script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
        @include('painel.layouts.__includes.javascript')
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
        @yield('custom-javascript')
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>

</html>
