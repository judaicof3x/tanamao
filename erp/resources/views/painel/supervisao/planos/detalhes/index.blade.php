@extends('painel.layouts.main')

@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post" data-select2-id="select2-data-kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl" data-select2-id="select2-data-kt_content_container">
            <!--begin::Details-->
            <div class="card card-flush" data-select2-id="select2-data-125-d5qf">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5" data-select2-id="select2-data-124-1z45">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Procurar detalhe">
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5" data-select2-id="select2-data-123-okpj">
                        <!--begin::Add product-->
                        <a href="{{ route('painel.planos.detalhes.create') }}" class="btn btn-primary col-12 col-lg-3">Adicionar</a>
                        <!--end::Add product-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <div id="kt_ecommerce_products_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_ecommerce_products_table">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="min-w-200px sorting" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending" style="width: 25%  ;">
                                            Nome
                                        </th>
                                        <th class="text-center min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 50%;">
                                            Status
                                        </th>
                                        <th class="text-center min-w-70px sorting_disabled d-none d-lg-inline-block" rowspan="1" colspan="1" aria-label="Actions" style="width: 100%;">
                                            Ações
                                        </th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-bold text-gray-600">
                                    @forelse ($details as $d)
                                    <tr class="even">
                                        <!--begin::Category=-->
                                        <td class="">
                                            <!--begin::Title-->
                                            <a href="{{ route('painel.planos.detalhes.show', $d->slug) }}" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">{{ $d->name }}</a>
                                            <!--end::Title-->
                                        </td>
                                        <!--end::Category=-->
                                        <!--begin::Status=-->
                                        <td class="text-center pe-0" data-order="Inactive">
                                            @if ($d->deleted_at === null)
                                                <!--begin::Badges-->
                                                <div class="badge badge-light-success">Ativo</div>
                                                <!--end::Badges-->
                                            @else
                                                <!--begin::Badges-->
                                                <div class="badge badge-light-danger">Inativo</div>
                                                <!--end::Badges-->
                                            @endif
                                        </td>
                                        <!--end::Status=-->
                                        <!--begin::Action=-->
                                        <td class="text-center d-none d-lg-block">
                                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Ações 
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon--></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ route('painel.planos.detalhes.edit', $d->slug) }}" class="menu-link px-3">Editar</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    @if ($d->deleted_at === null)
                                                        <a onclick="document.getElementById('destroy').submit()" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Desativar</a>
                                                        <form id="destroy" action="{{ route('painel.planos.detalhes.destroy', $d->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                    @else
                                                        <a onclick="document.getElementById('restore').submit()" class="menu-link px-3" data-kt-ecommerce-product-filter="restore_row">Ativar</a>
                                                        <form id="restore" action="{{ route('painel.planos.detalhes.restore', $d->id) }}" method="post">
                                                            @csrf
                                                        </form>
                                                    @endif
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                        <!--end::Action=-->
                                    </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Details-->
        </div>
        <!--end::Container-->
    </div>
@endsection