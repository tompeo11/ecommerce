<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>



<body class="container">

{{--    Thay vì dùng nhu nay thi nen tach thành compoent
bằng cách tạo folder component trong views
sau đó gọi bằng cách <x-tenComponent> --}}

<x-header />
<main class="row">
<x-sidebar />
    <div class="col-8" style="">
        @yield('main')
    </div>
</main>

<x-footer />

</body>

</html>
