<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href={{ asset("icon.png") }}>
    <title>XotaLink | URL Shortner</title>
    @vite('resources/css/app.css')
</head>

<body>
    <main class="px-3 py-8 flex flex-col gap-5 items-center h-screen justify-center text-center ">
        <a href="{{ asset('/') }}" class="w-96">@include('logo')</a>
        @yield('main')
    </main>
    <footer class="p-10 bg-slate-800 text-white text-center">
        &copy; XotaLink | All Rights Reserved
    </footer>
    @stack('scripts')
</body>

</html>