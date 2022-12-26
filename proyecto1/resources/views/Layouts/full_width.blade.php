
@include('Layouts.head')

<body>    
    @include('Layouts.menu')
    <div class="box">
    <!-- Contenido de off canvas, end.  -->
        @yield('contenido')
</div>
        @include('Layouts.footer')
</body>
</html>
