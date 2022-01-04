@extends('painel.layouts.main')

@section('breadcrumb')
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a class="text-muted text-hover-primary">Dashboard</a>
    </li>
    <!--end::Item-->
@endsection
	
@section('content')
	<!--begin::Post-->
		<div class="post d-flex flex-column-fluid" id="kt_post">
			<!--begin::Container-->
			<div id="kt_content_container" class="container-xxl">
				<!--begin::Row-->
				<div class="row g-5 g-xl-8">
					<!--begin::Col-->
					<div class="col-xl-12">
						<!--begin::Tables Widget 5-->
						<div class="card card-xxl-stretch mb-5 mb-xl-8">
							<!--begin::Header-->
							<div class="card-header border-0 pt-5">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bolder fs-3 mb-1">Vendas</span>
									<span class="d-none text-muted mt-1 fw-bold fs-7">More than 400 new products</span>
								</h3>
								<div class="card-toolbar">
									<ul class="nav">
										<li class="nav-item">
											<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Mês</a>
										</li>
										<li class="nav-item">
											<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Semana</a>
										</li>
										<li class="nav-item">
											<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 active" data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Dia</a>
										</li>
									</ul>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body py-3">
								<div class="tab-content">
									<!--begin::Tap pane-->
									<div class="tab-pane fade" id="kt_table_widget_5_tab_1">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
												<!--begin::Table head-->
												<thead>
													<tr class="border-0">
														<th class="p-0 w-50px"></th>
														<th class="p-0 min-w-150px"></th>
														<th class="p-0 min-w-140px"></th>
														<th class="p-0 min-w-110px"></th>
														<th class="p-0 min-w-50px"></th>
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="#" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
															<span class="text-muted fw-bold d-block">cliente@email.com</span>
														</td>
														<td class="text-end text-muted fw-bold">Plano 1</td>
														<td class="text-end">
															<span class="badge badge-light-success">Aprovado</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="#" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
															<span class="text-muted fw-bold d-block">cliente@email.com</span>
														</td>
														<td class="text-end text-muted fw-bold">Plano 2</td>
														<td class="text-end">
															<span class="badge badge-light-warning">Processando</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="#" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
															<span class="text-muted fw-bold d-block">cliente@email.com</span>
														</td>
														<td class="text-end text-muted fw-bold">Plano 1</td>
														<td class="text-end">
															<span class="badge badge-light-primary">Ativo</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="#" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
															<span class="text-muted fw-bold d-block">cliente@email.com</span>
														</td>
														<td class="text-end text-muted fw-bold">Plano 1</td>
														<td class="text-end">
															<span class="badge badge-light-danger">Cancelado</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
												</tbody>
												<!--end::Table body-->
											</table>
										</div>
										<!--end::Table-->
									</div>
									<!--end::Tap pane-->
									<!--begin::Tap pane-->
									<div class="tab-pane fade" id="kt_table_widget_5_tab_2">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
												<!--begin::Table head-->
												<thead>
													<tr class="border-0">
														<th class="p-0 w-50px"></th>
														<th class="p-0 min-w-150px"></th>
														<th class="p-0 min-w-140px"></th>
														<th class="p-0 min-w-110px"></th>
														<th class="p-0 min-w-50px"></th>
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="#" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
															<span class="text-muted fw-bold d-block">cliente@email.com</span>
														</td>
														<td class="text-end text-muted fw-bold">Plano 1</td>
														<td class="text-end">
															<span class="badge badge-light-success">Aprovado</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="#" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
															<span class="text-muted fw-bold d-block">cliente@email.com</span>
														</td>
														<td class="text-end text-muted fw-bold">Plano 2</td>
														<td class="text-end">
															<span class="badge badge-light-warning">Processando</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="#" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
															<span class="text-muted fw-bold d-block">cliente@email.com</span>
														</td>
														<td class="text-end text-muted fw-bold">Plano 1</td>
														<td class="text-end">
															<span class="badge badge-light-primary">Ativo</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="#" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
															<span class="text-muted fw-bold d-block">cliente@email.com</span>
														</td>
														<td class="text-end text-muted fw-bold">Plano 1</td>
														<td class="text-end">
															<span class="badge badge-light-danger">Cancelado</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
												</tbody>
												<!--end::Table body-->
											</table>
										</div>
										<!--end::Table-->
									</div>
									<!--end::Tap pane-->
									<!--begin::Tap pane-->
									<div class="tab-pane fade show active" id="kt_table_widget_5_tab_3">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
												<!--begin::Table head-->
												<thead>
													<tr class="border-0">
														<th class="p-0 w-50px"></th>
														<th class="p-0 min-w-150px"></th>
														<th class="p-0 min-w-140px"></th>
														<th class="p-0 min-w-110px"></th>
														<th class="p-0 min-w-50px"></th>
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="#" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
															<span class="text-muted fw-bold d-block">cliente@email.com</span>
														</td>
														<td class="text-end text-muted fw-bold">Plano 1</td>
														<td class="text-end">
															<span class="badge badge-light-success">Aprovado</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="#" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
															<span class="text-muted fw-bold d-block">cliente@email.com</span>
														</td>
														<td class="text-end text-muted fw-bold">Plano 2</td>
														<td class="text-end">
															<span class="badge badge-light-warning">Processando</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="#" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
															<span class="text-muted fw-bold d-block">cliente@email.com</span>
														</td>
														<td class="text-end text-muted fw-bold">Plano 1</td>
														<td class="text-end">
															<span class="badge badge-light-primary">Ativo</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="#" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
															<span class="text-muted fw-bold d-block">cliente@email.com</span>
														</td>
														<td class="text-end text-muted fw-bold">Plano 1</td>
														<td class="text-end">
															<span class="badge badge-light-danger">Cancelado</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
												</tbody>
												<!--end::Table body-->
											</table>
										</div>
										<!--end::Table-->
									</div>
									<!--end::Tap pane-->
								</div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Tables Widget 5-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Container-->
		</div>
	<!--end::Post-->
@endsection

@section('custom-css')
	<link href="{{ URL::asset('plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ URL::asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('custom-javascript')
	<script src="{{ URL::asset('js/custom/widgets.js') }}"></script>
	<script src="{{ URL::asset('js/custom/apps/chat/chat.js') }}"></script>
	<script src="{{ URL::asset('js/custom/modals/upgrade-plan.js') }}"></script>
	<script src="{{ URL::asset('js/custom/modals/users-search.js') }}"></script>
	<script src="{{ URL::asset('plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
	<script src="{{ URL::asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
@endsection

@section('drawers')
	
@endsection

@section('modals')
	
@endsection