@extends('painel.layouts.main')

@section('breadcrumb')
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a class="text-muted text-hover-primary">Plano</a>
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

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Pricing card-->
            <div class="card" id="kt_pricing">
                <!--begin::Card body-->
                <div class="card-body p-lg-17">
                    <!--begin::Plans-->
                    <div class="d-flex flex-column">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <h1 class="fs-2hx fw-bolder mb-5">Escolha o seu plano</h1>
                            <div class="text-gray-400 fw-bold fs-5">Faça upgrade ou cancele quando quiser!
                            <a href="#" class="link-primary fw-bolder"></a></div>
                        </div>
                        <!--end::Heading-->
                        @foreach ($plans as $p)
                            <!--begin::Row-->
                            <div class="row g-10">
                                <!--begin::Col-->
                                <div class="col-xl-4">
                                    <div class="d-flex h-100 align-items-center">
                                        <!--begin::Option-->
                                        <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
                                            <!--begin::Heading-->
                                            <div class="mb-7 text-center">
                                                <!--begin::Title-->
                                                <h1 class="text-dark mb-5 fw-boldest">{{ $p[0]['attributes']['name'] }}</h1>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-gray-400 fw-bold mb-5">{{ $p[0]['attributes']['description'] }}</div>
                                                <!--end::Description-->
                                                <!--begin::Price-->
                                                <div class="text-center">
                                                    <span class="mb-2 text-primary">R$</span>
                                                    <span class="fs-3x fw-bolder text-primary" data-kt-plan-price-month="{{ $p[0]['attributes']['amount'] }}">{{ $p[0]['attributes']['amount'] }}</span>
                                                    <span class="fs-7 fw-bold opacity-50">/ 
                                                    <span data-kt-element="period">mês</span></span>
                                                </div>
                                                <!--end::Price-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Features-->
                                            <div class="w-100 mb-10">
                                                @foreach ($details as $detail)
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <span class="fw-bold fs-6 text-gray-800 flex-grow-1 pe-3">{{ $detail->name }}</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        @if (!empty($plans[0][1]->filter(function($item) use($detail) {
                                                            return $item->id == $detail->id;
                                                        })->all()))
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"></rect>
                                                                <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        @else
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"></rect>
                                                                <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black"></rect>
                                                                <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black"></rect>
                                                            </svg>
                                                        </span>
                                                        @endif
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                @endforeach
                                            </div>
                                            <!--end::Features-->
                                            <!--begin::Select-->
                                            <a href="{{ route('painel.cliente.planos.assinar', $p['slug'])}}" class="btn btn-sm btn-primary col-12">Assinar</a>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Option-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        @endforeach
                    </div>
                    <!--end::Plans-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Pricing card-->
        </div>
        <!--end::Container-->
    </div>
    
@endsection