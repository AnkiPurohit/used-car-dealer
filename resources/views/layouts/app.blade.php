<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Used Car Dealer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <h1>Used Car Project</h1>
            </a>
        </div>
    </nav>

    <div class="container ">
        @yield('content')
    </div>

    <footer class="text-center mt-4">
        <p>&copy; {{ date('Y') }} Used Car Project</p>
    </footer>
</body>

</html>
