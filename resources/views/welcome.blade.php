<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex Athlete</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}?v={{ time() }}">

    <!-- <script src="script.js" defer></script> -->
    <script src="{{ secure_asset('js/script.js') }}" defer></script>
    <!-- <link rel="icon" href="../images/favicon.webp" type="image/svg+xml"> -->
    <link rel="icon" href="{{ secure_asset('images/favicon.webp') }}" type="image/webp">
</head>
<body>

    <!-- ローディング画面 -->
    <div id="loading">
        <p>loading...</p>
        <div id="loading-screen"></div>
    </div>

    <!-- ナビゲーションメニュー ↓↓ 追加 ↓↓ -->
    <nav>
        <button id="menu-open" class="btn-menu">
            <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                <title>メニューを開く</title>
                <path clip-rule="evenodd" d="m4.25 8c0-.41421.33579-.75.75-.75h14c.4142 0 .75.33579.75.75s-.3358.75-.75.75h-14c-.41421 0-.75-.33579-.75-.75zm0 4c0-.4142.33579-.75.75-.75h14c.4142 0 .75.3358.75.75s-.3358.75-.75.75h-14c-.41421 0-.75-.3358-.75-.75zm.75 3.25c-.41421 0-.75.3358-.75.75s.33579.75.75.75h14c.4142 0 .75-.3358.75-.75s-.3358-.75-.75-.75z" fill-rule="evenodd"/>
            </svg>
        </button>
        <div id="menu-panel">
            <button id="menu-close" class="btn-menu">
                <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <title>メニューを閉じる</title>
                    <path clip-rule="evenodd" d="m7.53033 6.46967c-.29289-.29289-.76777-.29289-1.06066 0s-.29289.76777 0 1.06066l4.46963 4.46967-4.46963 4.4697c-.29289.2929-.29289.7677 0 1.0606s.76777.2929 1.06066 0l4.46967-4.4696 4.4697 4.4696c.2929.2929.7677.2929 1.0606 0s.2929-.7677 0-1.0606l-4.4696-4.4697 4.4696-4.46967c.2929-.29289.2929-.76777 0-1.06066s-.7677-.29289-1.0606 0l-4.4697 4.46963z" fill-rule="evenodd"/>
                </svg>
            </button>
            <ul class="menu-list">
                <!-- <li><a href="login.html">Login</a></li> -->
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            </ul>
        </div>
    </nav>
    <section class="hero">
        <h1 class="title">Apex<br>Athlete</h1>
    </section>

    <section class="concept">
        <div class="wrapper">
            <h2 class="title fadein">Concept</h2>
            <p class="fadein">
                あなたの競技の目標、状況に応じた、パーソナルなトレーニングメニューを提案します。<br>
            目標に向けた確かな一歩を、今ここから始めませんか？一緒に夢を現実に変えましょう。</p>
            </p>
        </div>
        <img src="images/track2.jpg" alt="">
    </section>
    
</body>
</html>