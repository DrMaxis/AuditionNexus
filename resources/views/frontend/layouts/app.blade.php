<!DOCTYPE html>
@langrtl
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl
@include('frontend.includes.head')
<body class="background-stars" >

        

        <div id="app">
            @include('includes.partials.logged-in-as')

            @include('frontend.includes.header')

            <div class="container">
                @include('includes.partials.messages')
                @yield('content')
            </div><!-- container -->
        </div><!-- #app -->

       

        @include('includes.partials.ga')




<script type="text/javascript" src="{{asset('vendor/plugins/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/plugins/js/bootstrap.bundle.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/plugins/js/propper.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/plugins/js/cakebootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/plugins/js/menushop.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/plugins/js/chat.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/plugins/js/emojis.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/plugins/js/jquery.emojiarea.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/plugins/js/emojisarea.js')}}"></script>
<script type="text/javascript" src="{{asset('js/GenerateOneTimePass.js')}}"></script>


@yield('page-scripts')
    </body>
</html>
