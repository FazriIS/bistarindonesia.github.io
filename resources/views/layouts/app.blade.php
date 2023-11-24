<!DOCTYPE html>
<html>

<head>
    <title>
        @yield('title', 'HCM-Timor Telecom')
    </title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="Rizki Ramadhan" name="author">
    <meta name="csrf-token" content="" />


    @include('layouts.styles')

    @yield('page-style')
</head>

<body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">

        <div class="layout-w" style="min-height: 100vh;">
            @include('templates.main-menu')

            <div class="content-w" style="width: 100px;">

                @include('templates.topbar')

                @yield('content')

            </div>

        </div>

    </div>

    @include('layouts.scripts')

    @yield('page-script')

</body>

</html>
