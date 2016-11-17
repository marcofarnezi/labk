<html>
<head>
    @if(Config::get('app.debug'))
        <link href="{{ asset('build/css/vendor/bootstrao.min.css') }}" rel="stylesheet">
        <link href="{{ asset('build/css/vendor/bootstrao-theme.min.css') }}" rel="stylesheet">
    @else
        <link href="{{ elixir('css/all.css') }}" rel="stylesheet">
    @endif
</head>
<body>
@if(Config::get('app.debug'))
    <script src="{{ asset('build/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('build/js/vendor/angular.min.js') }}"></script>
    <script src="{{ asset('build/js/vendor/angular-route.min.js') }}"></script>
    <script src="{{ asset('build/js/vendor/angular-resource.min.js') }}"></script>
    <script src="{{ asset('build/js/vendor/angular-animate.min.js') }}"></script>
    <script src="{{ asset('build/js/vendor/angular-messages.min.js') }}"></script>
    <script src="{{ asset('build/js/vendor/ui-bootstrap.min.js') }}"></script>
    <script src="{{ asset('build/js/vendor/navbar.min.js') }}"></script>
@else
    <script src="{{ elixir('js/all.js') }}"></script>
@endif
</body>
</html>