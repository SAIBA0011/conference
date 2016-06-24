{{-- Main Header --}}
@include('frontend.partials.header')

@if(Request::is('/'))
    {{-- Website Slider --}}
    @include('frontend.partials.slider')
@endif

{{-- Navigation --}}
@include('frontend.partials.nav')

{{-- Page Content--}}
@yield('content')

 {{--Top Footer--}}
@include('frontend.partials.footer')

{{-- Registration Form Popup --}}
@include('frontend.partials.registration')

{{-- Bottom Footer --}}
@include('frontend.partials.bottom-footer')