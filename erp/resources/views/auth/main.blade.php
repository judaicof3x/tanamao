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
			<div class="d-flex flex-column flex-xl-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-center flex-lg-row-fluid">
					<!--begin::Content-->
					<div class="d-flex align-items-start flex-column p-5 p-lg-15">
						<!--begin::Logo-->
						<a href="#" class="mb-15">
							<img alt="Logo" src="{{ URL::asset('media/logos/png/preto/preto5.png') }}" class="h-80px" />
						</a>
						<!--end::Logo-->
						<!--begin::Title-->
						<h1 class="text-dark fs-2x mb-3">Bem vindo, empresário!</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="fw-bold fs-4 text-gray-400 mb-10">É hora do seu negócio vender mais,
						<br />tenha a cidade na palma da mão!</div>
						<!--begin::Description-->
						<!--begin::Illustration-->
						<img src="{{ URL::asset('media/illustrations/sigma-1/8.png') }}" class="h-250px h-lg-350px" />
						<!--end::Illustration-->
					</div>
					<!--end::Content-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="flex-row-fluid d-flex flex-center justfiy-content-xl-first p-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-center p-15 shadow-sm bg-body rounded w-100 w-md-550px mx-auto ms-xl-20">
						<!--begin::Form-->
						@yield('content')
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Right Content-->
			</div>
			<!--end::Authentication-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
            @include('painel.layouts.__includes.javascript')
            <script src="{{ URL::asset('js/custom/authentication/sign-up/free-trial.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
            @yield('custom-javascript')
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>