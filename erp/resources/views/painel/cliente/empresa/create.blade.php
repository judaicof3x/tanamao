<!DOCTYPE html>
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
			<!--begin::Authentication-->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column" id="kt_create_account_stepper">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto w-xl-500px bg-lighten shadow-sm">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-500px scroll-y">
						<!--begin::Header-->
						<div class="d-flex flex-row-fluid flex-column flex-center p-10 pt-lg-20">
							<!--begin::Logo-->
							<a href="#" class="mb-10 mb-lg-20">
								<img alt="Logo" src="{{ URL::asset('media/logos/png/preto/preto5.png') }}" class="h-60px" />
							</a>
							<!--end::Logo-->
							<!--begin::Nav-->
							<div class="stepper-nav">
								<!--begin::Step 1-->
								<div class="stepper-item current" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">1</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Detalhes da conta</h3>
										<div class="stepper-desc fw-bold">Precisamos saber seus dados</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">2</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Informações da empresa</h3>
										<div class="stepper-desc fw-bold">As informações da sua empresa</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">3</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Informações de endereço</h3>
										<div class="stepper-desc fw-bold">Localização da sua empresa</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">4</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Escolha um plano</h3>
										<div class="stepper-desc fw-bold">Planos que cabem no seu bolso</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">5</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Completado</h3>
										<div class="stepper-desc fw-bold">Woah, cadastro completado</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Step 5-->
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Header-->
						<!--begin::Illustration-->
						<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-150px min-h-lg-300px" style="background-image: url({{ URL::asset('media/illustrations/sigma-1/17.png') }}"></div>
						<!--end::Illustration-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-700px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
							<form method="POST" action="{{ route('painel.customer.welcome.store') }}" class="my-auto pb-5" id="kt_create_account_form">
								<!--begin::Step 1-->
								<div class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bolder d-flex align-items-center text-dark">Detalhes da conta 
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Precisamos saber mais sobre você"></i></h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-bold fs-6">Se você precisar de ajuda, verifique nossa
											<a href="#" class="link-primary fw-bolder">página de ajuda</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
                                        @csrf
										<!--begin::Input group-->
										<div class="mb-10 fv-row fv-plugins-icon-container">
											<!--begin::Label-->
											<label class="form-label mb-3 required">Primeiro nome</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input minlength="3" maxlength="155" type="text" class="form-control form-control-lg form-control-solid" name="first_name" placeholder="" value="{{ old('first_name') }}" required="required">
											<!--end::Input-->
										<div class="fv-plugins-message-container invalid-feedback"></div></div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10 fv-row fv-plugins-icon-container">
											<!--begin::Label-->
											<label class="form-label mb-3 required">Último nome</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input minlength="3" maxlength="155" type="text" class="form-control form-control-lg form-control-solid" name="last_name" placeholder="" value="{{ old('last_name') }}" required="required">
											<!--end::Input-->
										<div class="fv-plugins-message-container invalid-feedback"></div></div>
										<!--end::Input group-->
                                        
										<!--begin::Input group-->
										<div class="row fv-row mb-10">
                                            <!--begin::Col-->
                                            <div class="col-xl-6">
                                                <label class="form-label mb-3 required">WhatsApp</label>
                                                <input data-inputmask="'mask': '(99) 99999-9999'" class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="phone" value="{{ old('phone') }}" required="required">
                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-xl-6 mt-10 mt-lg-0">
                                                <label class="form-label mb-3 required">CPF</label>
                                                <input data-inputmask="'mask': '999.999.999-99'" class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="cpf" value="{{ old('cpf') }}" required="required">
                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                            <!--end::Col-->
                                        </div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bolder text-dark">Informações da empresa</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-bold fs-6">Se você precisar de ajuda, verifique nossa
                                            <a href="#" class="link-primary fw-bolder">página de ajuda</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <label class="form-label required">Razão social</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Nome da sua empresa"
                                                name="corporate_name" value="{{ old('corporate_name') }}" autocomplete="off" required="required">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <label class="form-label">CNPJ</label>
                                            <input data-inputmask="'mask': '99.999.999/0001.99'" class="form-control form-control-lg form-control-solid" type="text" placeholder="Opcional"
                                                name="cnpj" value="{{ old('cnpj') }}" autocomplete="off">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
                                            <label class="form-label required">Segmento da empresa</label>
                                            <select name="segment_id" class="form-select form-select-solid" data-control="select2" data-placeholder="Selecione uma opção" required="required">
                                                <option></option>
                                                @foreach ($segments as $s)
                                                    <option value="{{ $s->id }}" @if(old('segment_id') == $s->id) selected @endif>{{ $s->id }} - {{ $s->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
										<!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <label class="form-label">Outros segmentos</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Caso o seu segmento não esteja na nossa lista"
                                                name="other_segments" value="{{ old('other_segments') }}" autocomplete="off">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<h2 class="fw-bolder text-dark">Informações de endereço</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-bold fs-6">Se você precisar de ajuda, verifique nossa
                                            <a href="#" class="link-primary fw-bolder">página de ajuda</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
                                            <label class="form-label required">Estado</label>
                                            <select name="state" class="form-select form-select-solid" data-control="select2" data-placeholder="Selecione uma opção" required="required">
                                                <option></option>
                                                <option value="RJ" selected>RJ - Rio de Janeiro</option>
                                            </select>
                                        </div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
                                            <label class="form-label required">Cidade</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Macaé"
                                                name="city" value="Macaé" autocomplete="off" required="required" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
                                            <label class="form-label required">CEP</label>
                                            <input data-inputmask="'mask': '99999-999'" class="form-control form-control-lg form-control-solid" type="text" placeholder="CEP"
                                                name="zipcode" value="{{ old('zipcode') }}" autocomplete="off" required="required">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
                                            <label class="form-label required">Bairro</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Bairro"
                                                name="neighborhood" value="{{ old('neighborhood') }}" autocomplete="off" required="required">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
                                            <label class="form-label required">Endereço</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Rua"
                                                name="street" value="{{ old('street') }}" autocomplete="off" required="required">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
                                            <label class="form-label required">Número</label>
                                            <input maxlength="5" class="form-control form-control-lg form-control-solid" type="number" placeholder="Número"
                                                name="number" value="{{ old('number') }}" autocomplete="off" required="required">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
                                            <label class="form-label">Complemento</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Opcional"
                                                name="complement" value="{{ old('complement') }}" autocomplete="off">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
                                            <label class="form-label">Informações relevantes</label>
                                            <textarea class="form-control form-control-lg form-control-solid" type="text" placeholder="Insira informações relevantes apenas se achar necessário"
                                                name="info" value="{{ old('info') }}" autocomplete="off"></textarea>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
                                            <label class="form-label">Email adicional</label>
                                            <input class="form-control form-control-lg form-control-solid" type="email" placeholder="Opcional"
                                                name="email_2" value="{{ old('email_2') }}" autocomplete="off">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
                                            <label class="form-label">Telefone adicional</label>
                                            <input data-inputmask="'mask': '(99) 99999-9999'" class="form-control form-control-lg form-control-solid" type="text" placeholder="Opcional"
                                                name="phone_2" value="{{ old('phone') }}" autocomplete="off">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div class="" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bolder text-dark">Escolha um plano</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-bold fs-6">Se você precisar de ajuda, verifique nossa
                                            <a href="#" class="link-primary fw-bolder">página de ajuda</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<!--begin::Radio group-->
                                        <div data-kt-buttons="true">
                                            <!--begin::Radio button-->
                                            <label class="btn btn-outline btn-outline-dashed d-flex flex-stack text-start p-6 mb-5">
                                                <!--end::Description-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Radio-->
                                                    <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                        <input class="form-check-input" type="radio" name="plan" value="startup"/>
                                                    </div>
                                                    <!--end::Radio-->

                                                    <!--begin::Info-->
                                                    <div class="flex-grow-1">
                                                        <h2 class="d-flex align-items-center fs-3 fw-bolder flex-wrap">
                                                            Plano 1
                                                        </h2>
                                                        <div class="fw-bold opacity-50">
                                                            O melhor para startups
                                                        </div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Description-->

                                                <!--begin::Price-->
                                                <div class="ms-5">
                                                    <span class="mb-2">R$</span>
                                                    <span class="fs-2x fw-bolder">
                                                        20,90
                                                    </span>
                                                    <span class="fs-7 opacity-50">/
                                                        <span data-kt-element="period">Mês</span>
                                                    </span>
                                                </div>
                                                <!--end::Price-->
                                            </label>
                                            <!--end::Radio button-->

                                            <!--begin::Radio button-->
                                            <label class="btn btn-outline btn-outline-dashed d-flex flex-stack text-start p-6 mb-5 active">
                                                <!--end::Description-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Radio-->
                                                    <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                        <input class="form-check-input" type="radio" name="plan" checked="checked" value="advanced"/>
                                                    </div>
                                                    <!--end::Radio-->

                                                    <!--begin::Info-->
                                                    <div class="flex-grow-1">
                                                        <h2 class="d-flex align-items-center fs-3 fw-bolder flex-wrap">
                                                            Plano 2
                                                            <span class="badge badge-light-success ms-2 fs-7">Mais popular</span>
                                                        </h2>
                                                        <div class="fw-bold opacity-50">
                                                            Ideal para grandes empresas
                                                        </div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Description-->

                                                <!--begin::Price-->
                                                <div class="ms-5">
                                                    <span class="mb-2">R$</span>
                                                    <span class="fs-2x fw-bolder">
                                                        149,90
                                                    </span>
                                                    <span class="fs-7 opacity-50">/
                                                        <span data-kt-element="period">Mês</span>
                                                    </span>
                                                </div>
                                                <!--end::Price-->
                                            </label>
                                            <!--end::Radio button-->
                                        </div>
                                        <!--end::Radio group-->
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div class="" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-8 pb-lg-10">
											<!--begin::Title-->
											<h2 class="fw-bolder text-dark">Assinatura realizada!</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-bold fs-6">Se você precisar de ajuda, verifique nossa
                                            <a href="#" class="link-primary fw-bolder">página de ajuda</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="mb-0">
											<!--begin::Text-->
											<div class="fs-6 text-gray-600 mb-5">Parabéns! A sua assinatura foi realizada, mas para começar a usar e fazer parte do Tá na mão, adicione um cartão de crédito.</div>
											<!--end::Text-->
											<!--begin::Alert-->
											<!--begin::Notice-->
											<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
												<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
														<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack flex-grow-1">
													<!--begin::Content-->
													<div class="fw-bold">
														<h4 class="text-gray-900 fw-bolder">Precisamos da sua atenção!</h4>
														<div class="fs-6 text-gray-700">Para ativar a sua assinatura, por favor 
														<a href="https://sandbox.ipag.com.br/subscriptions?id=2e65f2f2fdaf6c699b223c61b1b5ab897d3b24b005e8f6ecb8d5e2382d7bf81b1e47b39e" class="fw-bolder">cadastre um cartão de crédito</a></div>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->
											<!--end::Alert-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 5-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack pt-15">
									<div class="mr-2">
										<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
										<span class="svg-icon svg-icon-4 me-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
												<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->Voltar</button>
									</div>
									<div>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
											<span class="indicator-label">Finalizar cadastro 
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
											<span class="svg-icon svg-icon-4 ms-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon--></span>
											<span class="indicator-progress">Aguarde... 
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continuar 
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
										<span class="svg-icon svg-icon-4 ms-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
												<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon--></button>
									</div>
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
						<!--begin::Links-->
						<div class="d-flex flex-center fw-bold fs-6">
                            <span class="text-muted">Faça o cadastro da sua empresa para continuar</span>
						</div>
						<!--end::Links-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
            @include('painel.layouts.__includes.javascript')
            <script src="{{ URL::asset('js/custom/utilities/modals/create-account.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
            @yield('custom-javascript')
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>