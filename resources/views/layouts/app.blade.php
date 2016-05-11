<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Quickstart - Basic</title>

    <!-- CSS And JavaScript -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
</head>

<body>
<H1><center>Pierwszy mój tutorial w Laravel</center></H1>


<div class="container">
    <nav class="navbar navbar-default">
        <!-- Navbar Contents -->
    </nav>
</div>

@yield('content')
</body>
</html>