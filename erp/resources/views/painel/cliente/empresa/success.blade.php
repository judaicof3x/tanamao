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
                        <!--begin::Heading-->
                        <div class="mb-10 text-center">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Estabelecimento cadastrado!</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">Uhul {{ auth()->user()->first_name }}, o seu estabelecimento foi cadastrado com sucesso. Agora é hora de escolher um dos nossos planos!
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <a href="{{ route('painel.customer.planos.index') }}" class="btn btn-lg btn-primary col-12">
                                Ir para planos
                            </a>
                        </div>
                        <!--end::Actions-->
                        <div></div>
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
