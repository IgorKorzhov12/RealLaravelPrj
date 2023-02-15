<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title ?? 'MyLaravelApp'}}</title>
    @vite(['resources/js/app.js'])
    <title>MyPage</title>
</head>
<body>
    <div class="wrapper">
        <div class="content">
            @include('components.navbar.navbar')
            @yield('content')
        </div>
        <div class="footer">
            @include('components.footer')
        </div>
    </div>
</body>
</html>

<style>
    * {
        margin: 0;
        padding: 0;
    }
    html,
    body {
        background-color: #dce3ea;
        height: 100%;
    }
    .wrapper {
        position: relative;
        min-height: 100%;
    }
    .content {
        min-height: 100vh;
        padding-bottom: 90px;
    }
    .footer {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
    }
</style>
