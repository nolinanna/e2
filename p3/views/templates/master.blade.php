<!doctype html>
<html lang='en'>

<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'>
    <link href='/css/app.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;500;700&display=swap" rel="stylesheet">

    @yield('head')

</head>

<body>

    <header>
        <div class='container-fluid'>
            <div class='text-center'>
                <a href='/'><img id='logo' class="img-fluid" src='/images/logo2.png'
                        alt='Rock Paper Scissors'></a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @yield('footer')
    </footer>

</body>

</html>
