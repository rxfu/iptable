<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{ config('setting.author') }}">
    <meta name="keywords" content="{{ config('setting.keywords') }}">
    <meta name="description" content="{{ config('setting.description') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @section('styles')
        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @show

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <title>{{ $title or '首页' }} | {{ config('setting.name', 'Laravel') }}</title>
</head>

<body>
    <div id="app"></div>

    @include('footer')

    @section('script')
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}"></script>
    @show
</body>
</html>
