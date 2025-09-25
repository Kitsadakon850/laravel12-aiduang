<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - เว็บข่าววิทยาศาสตร์</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<style>
/* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Prompt", sans-serif;
    background: #f8f9fa;
    color: #333;
    line-height: 1.6;
}

/* Header */

header h1 {
    margin-bottom: 5px;
    font-size:60px;
   
    text-top: 100%;

}

/* เมนูอาหาร */
nav ul {
    display: grid;
  grid-template-columns: repeat(5, 5fr);
    gap: 15px;
    list-style: none;
    padding: 0;
}

nav ul li {
    background: rgb(255, 251, 145);
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

nav ul li:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
}

nav ul li img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    display: block;
}

/* Main */


/* Footer */
footer {
    text-align: center;
    padding: 15px;
    background: #2c3e50;
    color: rgb(243, 247, 200);
    margin-top: 30px;
    font-size: 14px;
}
</style>
<body>
    <header>
        <h1>เว็บข่าววิทยาศาสตร์</h1>
        <nav>
            <ul>
                <li><a href="{{ route('food.page1') }}"><img src="https://ichef.bbci.co.uk/ace/ws/800/cpsprodpb/00c8/live/8bf366f0-8165-11f0-a34f-318be3fb0481.jpg.webp" alt=""></a></li>
                <li><a href="{{ route('food.page2') }}"><img src="https://ichef.bbci.co.uk/ace/ws/800/cpsprodpb/fb62/live/7cd5fa90-79f2-11f0-87a7-fdfee4a863a8.jpg.webp" alt=""></a></li>
                <li><a href="{{ route('food.page3') }}"><img src="https://ichef.bbci.co.uk/ace/ws/800/cpsprodpb/5f03/live/2ae2c100-7beb-11f0-83cc-c5da98c419b8.jpg.webp" alt=""></a></li>
                <li><a href="{{ route('food.page4') }}"><img src="https://ichef.bbci.co.uk/ace/ws/800/cpsprodpb/ac71/live/8273fad0-7450-11f0-8071-1788c7e8ae0e.jpg.webp" alt=""></a></li>
                <li><a href="{{ route('food.page5') }}"><img src="https://ichef.bbci.co.uk/ace/ws/800/cpsprodpb/99ff/live/b5dcb7e0-710d-11f0-af20-030418be2ca5.jpg.webp" alt=""></a></li>
                <li><a href="{{ route('food.page6') }}"><img src="https://ichef.bbci.co.uk/ace/ws/800/cpsprodpb/cd42/live/e4c9e0f0-591b-11f0-960d-e9f1088a89fe.jpg.webp" alt=""></a></li>
                <li><a href="{{ route('food.page7') }}"><img src="https://ichef.bbci.co.uk/ace/ws/800/cpsprodpb/b44e/live/6d3965d0-460e-11f0-8402-c958f7234d20.jpg.webp" alt=""></a></li>
                <li><a href="{{ route('food.page8') }}"><img src="https://ichef.bbci.co.uk/ace/ws/800/cpsprodpb/59c1/live/662d8810-46aa-11f0-84b6-6bf0f66205f1.jpg.webp" alt=""></a></li>
                <li><a href="{{ route('food.page9') }}"><img src="https://ichef.bbci.co.uk/ace/ws/800/cpsprodpb/1489/live/49992760-2731-11f0-b26b-ab62c890638b.jpg.webp" alt=""></a></li>
                <li><a href="{{ route('food.page10') }}"><img src="https://ichef.bbci.co.uk/ace/ws/800/cpsprodpb/779b/live/bd061c20-0fef-11f0-ac9f-c37d6fd89579.jpg.webp" alt=""></a></li>
           
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    
</body>
</html>
