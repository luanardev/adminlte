<div class="content-wrapper">
    {{-- Content Header --}}
    @hasSection('content-header')
	<div class="content-header">
		@yield('content-header')
	</div>
    @endif
	
	{{-- Flash Message --}}
	@hasSection('flash')
		@include('adminlte::partials.flash.flash')
	@endif
    {{-- Main Content --}}
    <div class="content">
		@yield('content')
    </div>
</div>