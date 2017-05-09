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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap Material Design -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-material-design.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ripples.min.css') }}">
@show

<!-- Scripts -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>