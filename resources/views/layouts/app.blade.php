
        @include('subopp.partials.head')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <title>التسجيل</title>

    <!-- Styles -->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
            <body class="gray-bg">
    @include('auth.topbar')



    @yield('content')


   @include('auth.footer')