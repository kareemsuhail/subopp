   <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

    </script>    

    @include('apps.layouts.head')
     @include('apps.layouts.menu')

<div class="container" align="center">
    <div class="row">

         @include('apps.layouts.rightpage')
         
         @yield('content')

    </div>
</div>

     @include('apps.layouts.footer')