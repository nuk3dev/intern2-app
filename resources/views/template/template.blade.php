<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body class="flex flex-col min-h-screen text-white bg-gray-700">
    <nav>
        @include('includes.navbar')
    </nav>

    <div class="container flex-grow bg-gray-700">
        <section class="flex justify-center pt-4">
            @yield('content')
        </section>
    </div>

    <footer class="py-4 text-center text-white bg-gray-700">
        @include('includes.footer')
    </footer>


</body>
</html>
