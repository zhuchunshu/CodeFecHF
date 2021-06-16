<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title","标题") - {{ config('app_name', 'CodeFec') }}</title>
    <link href="{{ 'tabler/css/tabler.min.css' }}" rel="stylesheet" />
    <link href="{{ 'tabler/css/tabler-flags.min.css' }}" rel="stylesheet" />
    <link href="{{ 'tabler/css/tabler-payments.min.css' }}" rel="stylesheet" />
    <link href="{{ 'tabler/css/tabler-vendors.min.css' }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div id="app" class="{{path_class()}}-page">
        @include('layouts.header')
        {{-- @include('layouts.bujian._msg')
        @include('shared._error') --}}
        <main class="py-4">
            @yield('content')

        </main>
        
    </div>
    @include('layouts.footer')
    
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ 'tabler/libs/apexcharts/dist/apexcharts.min.js' }}"></script>
    <!-- Tabler Core -->
    <script src="{{ 'tabler/js/tabler.min.js' }}"></script>
    <script src="{{ mix('js/vue.js') }}"></script>
</body>

</html>
