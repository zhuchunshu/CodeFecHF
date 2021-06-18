<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title","标题") - {{ config('app_name', 'CodeFec') }}</title>
    <link href="{{ '/tabler/css/tabler.min.css' }}" rel="stylesheet" />
    <link href="{{ '/tabler/css/tabler-flags.min.css' }}" rel="stylesheet" />
    <link href="{{ '/tabler/css/tabler-payments.min.css' }}" rel="stylesheet" />
    <link href="{{ '/tabler/css/tabler-vendors.min.css' }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <meta name="msapplication-TileColor" content="#206bc4" />
    <meta name="theme-color" content="#206bc4" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <link rel="icon" href="/logo.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="/logo.svg" type="image/x-icon" />
    <!-- 自定义CSS -->
    @yield('css')
</head>

<body class="antialiased">
    <div id="app" class="wrapper {{ path_class() }}-page">
        @include('layouts.header')
        {{-- @include('layouts.bujian._msg')
        @include('shared._error') --}}
        <div class="page-wrapper">
            @include('layouts.header_title')
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>

    <script src="/js/jquery-3.6.0.min.js"></script>
    <script>var admin = {!! json_encode(\App\CodeFec\Admin\Admin::data()) !!};</script>
    <script src="{{ mix('js/vue.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ '/tabler/libs/apexcharts/dist/apexcharts.min.js' }}"></script>
    <!-- Tabler Core -->
    <script src="{{ '/tabler/js/tabler.min.js' }}"></script>
    <!-- 自定义Js -->
    @yield('scripts')
</body>

</html>
