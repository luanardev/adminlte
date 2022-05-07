@extends('adminlte::layouts.master')

@section('global_css')
    @yield('global_css')
    @stack('global_css')
@endsection

@section('css')
    @yield('css')
    @stack('css')
@endsection

@section('body-class', 'hold-transition sidebar-mini layout-fixed')

@section('body')
    <div class="wrapper">

        {{-- Top Navbar --}}
        @include('adminlte::partials.navbar')

        {{-- Left Main Sidebar --}}
        @include('adminlte::partials.sidebar')

        {{-- Content Wrapper --}}
        @include('adminlte::partials.content')

        {{-- Footer --}}
        @include('adminlte::partials.footer')

        {{-- Right Control Sidebar --}}
        @include('adminlte::partials.control')

    </div>
@stop

@section('global_js')
    @yield('global_js')
    @stack('global_js')
@endsection

@section('js')
    @yield('js')
    @stack('js')
@endsection

