@extends('painel.layouts.main')

@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post" data-select2-id="select2-data-kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl" data-select2-id="select2-data-kt_content_container">
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10" data-select2-id="select2-data-133-xwcd">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Geral</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Nome</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name" class="form-control mb-2" placeholder="Nome do plano" value="{{ $plan[1]['attributes']['name'] }}" disabled>
                                <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Descrição</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name" class="form-control mb-2" placeholder="Nome do plano" value="{{ $plan[1]['attributes']['description'] }}" disabled>
                                <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Preço</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name" class="form-control mb-2" placeholder="Nome do plano" value="{{ $plan[1]['attributes']['amount'] }}" disabled>
                                <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Frequencia</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name" class="form-control mb-2" placeholder="Nome do plano" value="{{ $plan[1]['attributes']['frequency'] }}" disabled>
                                <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Intervalo</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name" class="form-control mb-2" placeholder="Nome do plano" value="{{ $plan[1]['attributes']['interval'] }}" disabled>
                                <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Links</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name" class="form-control mb-2" placeholder="Nome do plano" value="{{ $plan[1]['attributes']['links']['payment'] }}" disabled>
                                <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                    <!--begin::Automation-->
                    <div class="card card-flush py-4" data-select2-id="select2-data-132-yl8r">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Status</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0" data-select2-id="select2-data-131-k51v">
                            <!--begin::Input group-->
                            <div>
                                <!--begin::Methods-->
                                <!--begin::Input row-->
                                <div class="d-flex fv-row">
                                    <!--begin::Radio-->
                                    <div class="form-check form-check-custom form-check-solid">
                                        <!--begin::Input-->
                                        <input class="form-check-input me-3" name="status" type="radio" value="ativo" id="kt_ecommerce_add_category_automation_1" disabled>
                                        <!--end::Input-->
                                        <!--begin::Label-->
                                        <label class="form-check-label" for="kt_ecommerce_add_category_automation_1">
                                            <div class="fw-bolder text-gray-800">Ativo</div>
                                            <div class="text-gray-600">Se essa opção estiver marcada, o item ficará disponível para vincular em planos.</div>
                                        </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Radio-->
                                </div>
                                <!--end::Input row-->
                                <div class="separator separator-dashed my-5"></div>
                                <!--begin::Input row-->
                                <div class="d-flex fv-row">
                                    <!--begin::Radio-->
                                    <div class="form-check form-check-custom form-check-solid">
                                        <!--begin::Input-->
                                        <input class="form-check-input me-3" name="status" type="radio" value="inativo" id="kt_ecommerce_add_category_automation_0" disabled>
                                        <!--end::Input-->
                                        <!--begin::Label-->
                                        <label class="form-check-label" for="kt_ecommerce_add_category_automation_0">
                                            <div class="fw-bolder text-gray-800">Inativo</div>
                                            <div class="text-gray-600">Se essa opção estiver marcada, o item não ficará disponível para vincular em planos.</div>
                                        </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Radio-->
                                </div>
                                <!--end::Input row-->
                                <!--end::Methods-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Automation-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('painel.planos.index') }}" class="btn btn-light me-5">Voltar</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <a href="" class="btn btn-warning me-5">Editar</a>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
            <div></div></form>
        </div>
        <!--end::Container-->
    </div>
@endsection