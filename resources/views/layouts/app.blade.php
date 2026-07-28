<html>
    <head>
        <title>@yield('title',"layout title")</title>
@vite(['resources/css/app.css','resources/css/custom.css','resources/js/app.js'])
        
    </head>
    <body>
        <header>
            <h1>Code step by step</h1>
</header>
<nav>
    <a href="/home">Home</a>
    <a href="/contact">Contact</a>
    <a href="/about">About</a>

</nav>
<main>
    @yield('content')
</main>
<footer>
    code step by step copyrights @2026
</footer>
    </body>
</html>