<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<script>
    window.easemobim = window.easemobim || {};
    easemobim.config = {
        hide: true,
        autoConnect: true,
        dialogWidth: '560px',
        dialogHeight: '650px',
    };
</script>
<script src='//kefu.easemob.com/webim/easemob.js'></script>
<body>
@include('layouts._header')

<div class="container">
    @yield('content')
    @include('layouts._footer')
</div>
</body>
</html>