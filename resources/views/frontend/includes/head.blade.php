<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', app_name())</title>
    <meta name="description" content="@yield('meta_description', 'Audition Nexus ')">
    <meta name="author" content="@yield('meta_author', 'DrMaxis')">
    @yield('meta')

    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
   

  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/plugins/homebutton.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/plugins/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/plugins/style.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/plugins/menushop.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/plugins/chat.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/plugins/jquery.emojiarea.css')}}">

    
    <script defer src="{{asset('vendor/plugins/font-awesome.min.js')}}"></script>
</head>