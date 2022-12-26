@extends('Layouts.full_width')

@section('titulo')
@guest
<title>@yield('titulo') - Usuario</title>
  @else
<title>{{ Session::get('nombre') }} - @yield('titulo') - Producción</title>
  @endif
@endsection

