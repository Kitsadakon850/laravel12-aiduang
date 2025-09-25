<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - เว็บไซต์อาหาร</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>เว็บไซต์อาหาร</h1>
        <nav>
            <ul>
                <li><a href="{{ route('food.page1') }}">หน้า 1</a></li>
                <li><a href="{{ route('food.page2') }}">หน้า 2</a></li>
                <li><a href="{{ route('food.page3') }}">หน้า 3</a></li>
                <li><a href="{{ route('food.page4') }}">หน้า 4</a></li>
                <li><a href="{{ route('food.page5') }}">หน้า 5</a></li>
                <li><a href="{{ route('food.page6') }}">หน้า 6</a></li>
                <li><a href="{{ route('food.page7') }}">หน้า 7</a></li>
                <li><a href="{{ route('food.page8') }}">หน้า 8</a></li>
                <li><a href="{{ route('food.page9') }}">หน้า 9</a></li>
                <li><a href="{{ route('food.page10') }}">หน้า 10</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2025 เว็บไซต์อาหาร</p>
    </footer>
</body>
</html>
