<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    @include('layouts._favicons')
    @include('layouts._css')
</head>

<body class="layout-fixed">
    <div class="mdk-header-layout js-mdk-header-layout">
        <div class="mdk-header-layout__content page pt-64px">
            <div class="d-flex justify-content-center align-items-center" style="height:100px;">
                <div class="display-4 mt-5">Launch demo</div>    
            </div>
            <div class="d-flex justify-content-center align-items-center" style="height:100px;">
                <a class="btn btn-primary btn-large" href="/" target="_blank">Click here</a>
            </div>
        </div>
    </div>

    @include('layouts._js')
</body>

</html>
